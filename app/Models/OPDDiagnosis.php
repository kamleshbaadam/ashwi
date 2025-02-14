<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OPDDiagnosis extends Model
{
    use HasFactory;

    protected $table = 'opd_diagnosis';

    public static function removeDiagnosisByOpdID($opd_id)
    {
    	return OPDDiagnosis::where('opd_id', $opd_id)->delete();
    }

    public static function addOpdDiagnosis($arr)
    {
    	$newData=new OPDDiagnosis;
    	$newData->opd_id=$arr['opd_id'];
    	$newData->diagnosis_id=$arr['diagnosis_id'];
    	$newData->diagnosis_name=$arr['diagnosis_name'];

    	$newData->save();

    	return $newData;
    }

    public static function getDiagnosisByOpdID($opd_id)
    {
        return OPDDiagnosis::where('opd_id', $opd_id)->get()->toArray();
    }
}
