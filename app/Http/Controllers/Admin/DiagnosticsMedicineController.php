<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{DiagnosticMaster, MedicineMaster, DiagnosticsMedicineMaster};
use Illuminate\Http\Request;

class DiagnosticsMedicineController extends BaseController
{
    public function diagnosticsMedicineList()
    {
        try {
            $diagnosticsMedicineData = DiagnosticsMedicineMaster::getAllDiagnosticsMedicine();
    
            $allMedicineIds = [];
            foreach ($diagnosticsMedicineData as $diagnost_val) {
                $diagnost = explode(',', $diagnost_val->medicine_id);
                $allMedicineIds = array_merge($allMedicineIds, $diagnost);
            }
    
            $uniqueMedicineIds = array_unique($allMedicineIds);
            $medicineData = \DB::table('medicine_master')->whereIn('id', $uniqueMedicineIds)->get()->keyBy('id');
    
            foreach ($diagnosticsMedicineData as $diagnost_val) {
                $diagnost = explode(',', $diagnost_val->medicine_id);
                if (is_array($diagnost)) {
                    $medicineNames = $medicineData->only($diagnost)->pluck('medicine_name');
                    $diagnost_val->medicine_name = $medicineNames->implode(', ');
                } else {
                    $diagnost_val->medicine_name = '';
                }
            }
    
            $this->data['diagnosticsMedicineData'] = $diagnosticsMedicineData;
            return view('backend.admin.Diagnostics Medicine.diagnostics_medicine_list', $this->data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }    
    public function adddiagnosticsMedicine(Request $request, $id = null)
    {
        try {
            $diagnosticsMedicineData = array();
            if (!empty($id)) {
                $diagnosticsMedicineData = DiagnosticsMedicineMaster::getDiagnosticsMedicineByID($id);
                if (empty($diagnosticsMedicineData)) {
                    return redirect()->back()->with('error', 'Diagnosis Medicine Not Found');
                }
            }
            $this->diagnosticsMedicineData = $diagnosticsMedicineData;
            $diagnosticData = DiagnosticMaster::getDiagnosticsByID();
            $this->diagnosticData = $diagnosticData;
            $medicineData = MedicineMaster::getAllMedicineByID();
            $this->medicineData = $medicineData;

            return view('backend.admin.Diagnostics Medicine.add_diagnostics_medicine', $this->data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function storeDiagnosticsMedicine(Request $request)
    {
        try {
            $request->validate(
                [
                    'diagnostics_id' => 'required',
                    'medicine_id' => 'required',
                    'report_name' => 'required',
                    'status' => 'nullable'
                ],
                [
                    'diagnostics_id.required' => 'Category Name Field is required !',
                    'medicine_id.required' => 'Description Field is required !',
                    'report_name.required' => 'Report Name Field is required !',
                    'status.required' => 'Status Field is required !'
                ]
            );
            // return $request->all();
            $request->medicine_id = implode(',', $request->medicine_id);
            $request->report_name = implode(',', $request->report_name);
            DiagnosticsMedicineMaster::storDiagnosticsMedicine($request);
            return redirect('admin/diagnostics_medicine_list')->with('success', 'Diagnosis Medicine Added Successfully!');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
