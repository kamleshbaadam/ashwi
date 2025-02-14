<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MedicineMaster;
use App\Models\MedicineCategoryMaster;
use Illuminate\Http\Request;

class MedicineCategoryController extends BaseController
{
    public function medicineList()
    {
        try {
            $medicineData = MedicineMaster::getAllMedicine();
            $this->medicineData = $medicineData;
            return view('backend.admin.Medicine.medicine_list', $this->data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function medicineCategoryList()
    {
        try {
            $medicineCategory =MedicineCategoryMaster::getAllMedicineCategory();
            $this->medicineCategoryData = $medicineCategory;
            return view('backend.admin.Medicine_Category.medicine_category_list', $this->data);
        } catch (\Exception $e) {
            // return $e->getMessage();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function addMedicineCategory(Request $request, $id = null)
    {
        try {
            $categoryData = array();
            if (!empty($id)) {
                $categoryData = MedicineCategoryMaster::getCategoryByID($id);
                if (empty($categoryData)) {
                    return redirect()->back()->with('error', 'Category Not Found');
                }
            }
            $this->categoryData = $categoryData;
            return view('backend.admin.Medicine_Category.add_medicine_category', $this->data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function storeMedicineCategory(Request $request)
    {
        try {
            $request->validate(
                [
                    'category_name' => 'required',
                    'description' => 'required',
                    'status' => 'nullable'
                ],
                [
                    'category_name.required' => 'Category Name Field is required !',
                    'description.required' => 'Description Field is required !',
                    'status.required' => 'Status Field is required !'
                ]
            );
            // return $request->all();
            MedicineCategoryMaster::storeMedicineCategory($request); 
            return redirect('admin/medicine_category_list')->with('success', 'Category Added Successfully!');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function addMedicine(Request $request, $id = null)
    {
        try {
            $medicineData = array();
            if (!empty($id)) {
                $medicineData = MedicineMaster::getMedicineByID($id);
                if (empty($medicineData)) {
                    return redirect()->back()->with('error', 'Category Not Found');
                }
            }
            $this->medicineData = $medicineData;
            $category = MedicineCategoryMaster::getMedicineCategoryByID();
            $this->categoryData = $category;
            return view('backend.admin.Medicine.add_medicine', $this->data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function storeMedicine(Request $request){
        try{
            $request->validate(
            [
                'medicine_name' => 'required',
                'power' => 'required',
                'measure' => 'required',
                'category_id' => 'required',
                'description' => 'required',
                'price' => 'required',
            ],
            [
                'medicine_name.required' => 'Medicine Name Field is required !',
                'power.required' => 'Power Name Field is required !',
                'measure.required' => 'Measure Name Field is required !',
                'category_id.required' => 'Category Id Field is required !',
                'description.required' => 'Description Field is required !',
                'price.required' => 'Price Field is required !',
            ]
        );
        MedicineMaster::storeMedicine($request);
        return redirect('admin/medicine_list')->with('success', 'Medicine Added Successfully!');

        }catch (\Exception $e) {
           
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
