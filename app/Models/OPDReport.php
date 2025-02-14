<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OPDReport extends Model
{
    use HasFactory;

    protected $table = 'opd_report';

    public static function removeReportByOpdID($opd_id)
    {
    	return OPDReport::where('opd_id', $opd_id)->delete();
    }

    public static function addOpdReport($arr)
    {
    	$newData=new OPDReport;
    	$newData->opd_id=$arr['opd_id'];
    	$newData->report_id=$arr['report_id'];
    	$newData->report_name=$arr['report_name'];
    	$newData->report_description=$arr['report_description'];

    	$newData->save();

    	return $newData;
    }

    public static function getReportByOpdID($opd_id)
    {
        return OPDReport::where('opd_id', $opd_id)->get()->toArray();
    }
}
