<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineCategoryMaster extends Model
{
    use HasFactory;
    protected $table ='medicine_category_master';

    public static function storeMedicineCategory($request){
        $medicineCategory = new MedicineCategoryMaster();
        if(!empty($request->id))
        {
            $medicineCategory=MedicineCategoryMaster::find($request->id);
            if(!isset($medicineCategory->id))
            {
                return '';
            }
        }
        $medicineCategory->category_name = $request->category_name;
        $medicineCategory->description = $request->description;
        $medicineCategory->status = $request->status ?? 0;
        $medicineCategory->save();
        return $medicineCategory;
    }

    public static function getAllMedicineCategory(){
        return MedicineCategoryMaster::orderBy('id','desc')->paginate(25);
    }
    public static function getCategoryByID($id)
    {
    	return MedicineCategoryMaster::where('id', $id)->first();
    }
    public static function getMedicineCategoryByID(){
        return MedicineCategoryMaster::orderBy('category_name', 'ASC')->get()->toArray();
    }
}
