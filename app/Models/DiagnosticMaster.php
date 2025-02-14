<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiagnosticMaster extends Model
{
    use HasFactory;
    protected $table = "diagnostics";
    public static function storeDiagnostics($request){
        $diagnostics = new DiagnosticMaster();
        if(!empty($request->id))
        {
            $diagnostics=DiagnosticMaster::find($request->id);
            if(!isset($diagnostics->id))
            {
                return '';
            }
        }
    
        $diagnostics->diagnostics_name = $request->diagnostics_name;
        $diagnostics->status = $request->status ?? 0;
        $diagnostics->save();
        return $diagnostics;
    }
    public static function getAllDiagnostics(){
        return DiagnosticMaster::orderBy('id','desc')->paginate(25);
    }
    public static function getDiagnosticsByID(){
        return DiagnosticMaster::orderBy('diagnostics_name', 'ASC')->get()->toArray();
    }
    public static function getActiveDiagnosticsByID(){
        return DiagnosticMaster::orderBy('diagnostics_name', 'ASC')->where('status','1')->get()->toArray();
    }
    public static function getDiagnosticByID($id)
    {
    	return DiagnosticMaster::where('id', $id)->first();
    }
}
