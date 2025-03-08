<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class OpdMaster extends Model
{
    use HasFactory;
    protected $table = 'opd_master';


    public static function generateOpdCaseNo()
    {
        $opdCaseno = self::count();
        $currentDate = date('Ymd');
        $newId = $currentDate . str_pad($opdCaseno + 1, 4, '0', STR_PAD_LEFT); 
        return $newId;
    }
     public static function createAppointment($request)
    {
        $case_no = self::generateOpdCaseNo();
        $opdArr = new OpdMaster();
        $opdArr->case_no = $case_no;
        $opdArr->patient_id = $request->patient_id;
        $opdArr->appointment_id = $request->appointment_id;
        if(!empty($request->opd_id))
        {
            $opdArr=OpdMaster::find($request->opd_id);
            if(!isset($opdArr->id))
            {
                return '';
            }
        }
        $opdArr->case_type = $request->case_type;
        $opdArr->payment_method = $request->payment_method;
        $opdArr->appointment_date = $request->appointment_date;
        $opdArr->appointment_time = $request->appointment_time;
        $opdArr->doctor_id = $request->doctor_id;
        $opdArr->remarks = $request->remarks;
        $opdArr->mediclaim = $request->mediclaim;
        $opdArr->save();

        return $opdArr;
    }
    public static function getRecordPatientMasterOpdMaster(){
        return OpdMaster::selectRaw('opd_master.*, p.patient_id, p.first_name, p.phone_no, p.middle_name, p.last_name, p.reference_name, 
        d.first_name as d_first_name, d.last_name as d_last_name')
        ->leftJoin('patient_master as p','p.id', '=', 'opd_master.patient_id')
        ->leftJoin('staff_master as d','d.id','=','opd_master.doctor_id')
        ->orderBy('opd_master.id','ASC')
        // ->take(10)
        ->get();
    }

    public static function getHistoryByOPDIdandPatientId($patient_id,$opd_id){
        return OpdMaster::selectRaw('opd_master.*,d.diag  as diagnosis_name')
        ->leftJoin(DB::raw('(SELECT opd_id, GROUP_CONCAT(diagnosis_name) as diag FROM `opd_diagnosis` GROUP BY opd_id) AS d'),'d.opd_id', '=', 'opd_master.id')
        ->where('opd_master.patient_id', $patient_id)
        ->where('opd_master.id', '<' ,$opd_id)
        ->orderBy('opd_master.id','Desc')->get()->toArray();

    }
    public static function getOpdByID($id)
    {
        return OpdMaster::find($id);
    }
    public static function getRecordByID($id){
        return OpdMaster::where('id', $id)->first();
    }

    public static function updateOPD($req)
    {
        $newArr=OpdMaster::find($req->opd_id);
        
        if(empty($newArr->visit_date))
        {
            $newArr->visit_date=date('Y-m-d H:i:s');
        }

        if(empty($newArr->next_visit_date))
        {
            $newArr->next_visit_date=$req->next_visit_date;
        }
        $newArr->language=$req->language;
        $newArr->checkup_type=$req->checkup_type;
        $newArr->complain=$req->complain;
        $newArr->examination=$req->examination;
        $newArr->weight=$req->weight;
        $newArr->height=$req->height;
        $newArr->oxygen=$req->oxygen;
        $newArr->temperature=$req->temperature;

        $newArr->investigation=$req->investigation;
        $newArr->advise=$req->advise;
        $newArr->billing=$req->billing;
        $newArr->surgery=$req->surgery;
        $newArr->admit=$req->admit;

        $newArr->save();

        return $newArr;
    }
}
