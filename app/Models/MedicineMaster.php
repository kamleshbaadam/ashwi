<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineMaster extends Model
{
    use HasFactory;
    protected $table ='medicine_master';

    public static function storeMedicine($request){
        $medicine = new MedicineMaster();
        if(!empty($request->id))
        {
            $medicine=MedicineMaster::find($request->id);
            if(!isset($medicine->id))
            {
                return '';
            }
        }
        $medicine->medicine_name = $request->medicine_name;
        $medicine->power = $request->power;
        $medicine->measure = $request->measure;
        $medicine->category_id = $request->category_id;
        $medicine->description = $request->description;
        $medicine->price = $request->price;
        $medicine->status = $request->status ?? 0;
        $medicine->save();
        return $medicine;
    }
    
    public static function getAllMedicine(){
        return MedicineMaster::selectRaw('medicine_master.*,medicine_category_master.category_name')
        ->leftJoin('medicine_category_master','medicine_category_master.id','=','medicine_master.category_id')
        ->orderBy('id','desc')->paginate(25);
    }
    public static function getMedicineByID($id)
    {
    	return MedicineMaster::where('id', $id)->first();
    }
    public static function getAllMedicineByID(){
        return MedicineMaster::orderBy('medicine_name', 'ASC')->get()->toArray();
    }
    public static function getActiveMedicineByID(){
        return MedicineMaster::orderBy('medicine_name', 'ASC')->where('status','1')->get()->toArray();
    }

    public static function getMedicineByArrID($ids)
    {
        return MedicineMaster::whereIn('id', $ids)->where('status', 1)->get()->toArray();
    }
}
