<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiagnosticsMedicineMaster extends Model
{
    use HasFactory;
    protected $table = 'diagnosis_medicine_master';
    public static function storDiagnosticsMedicine($request)
    {
        $diagnosisMedicine = new DiagnosticsMedicineMaster();
        if (!empty($request->id)) {
            $diagnosisMedicine = DiagnosticsMedicineMaster::find($request->id);
            if (!isset($diagnosisMedicine->id)) {
                return '';
            }
        }
        $diagnosisMedicine->diagnostics_id = $request->diagnostics_id;
        $diagnosisMedicine->medicine_id = $request->medicine_id;
        $diagnosisMedicine->report_name = $request->report_name;
        $diagnosisMedicine->status = $request->status ?? 0;
        $diagnosisMedicine->save();
        return $diagnosisMedicine;
    }
    public static function getAllDiagnosticsMedicine()
    {
        return DiagnosticsMedicineMaster::select('diagnosis_medicine_master.*', 'diagnostics.diagnostics_name')
            ->leftJoin('diagnostics', 'diagnostics.id', '=', 'diagnosis_medicine_master.diagnostics_id')
            ->orderBy('diagnosis_medicine_master.id', 'desc')
            ->paginate(25);
    }



    public static function getDiagnosticsMedicineByID($id)
    {
        return DiagnosticsMedicineMaster::where('id', $id)->first();
    }

    public static function getMedicineByDiagnosisID($diagnosis_id)
    {
        return DiagnosticsMedicineMaster::where('diagnostics_id', $diagnosis_id)->get()->toArray();
    }
}
