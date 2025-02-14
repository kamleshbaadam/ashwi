<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OPDMedicine extends Model
{
    use HasFactory;

    protected $table = 'opd_medicine';

    public static function removeMedicineByOpdID($opd_id)
    {
    	return OPDMedicine::where('opd_id', $opd_id)->delete();
    }

    public static function addOpdMedicine($request)
    {
    	$newMed=new OPDMedicine;
    	$newMed->opd_id=$request['opd_id'];
    	$newMed->medicine_id=$request['medicine_id'];
    	$newMed->medicine_name=$request['medicine_name'];
    	$newMed->medicine_description=$request['medicine_description'];
    	$newMed->unit=$request['unit'];
    	$newMed->days=$request['days'];
    	$newMed->qty=$request['qty'];

    	$newMed->save();

    	return $newMed;
    }

    public static function getMedicineByOpdID($opd_id)
    {
        return OPDMedicine::where('opd_id', $opd_id)->get()->toArray();
    }
}
