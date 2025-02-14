<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DiagnosticMaster;

use Illuminate\Http\Request;

class DiagnosticsController extends BaseController
{
    public function diagnosticsList()
    {
        try {
            $diagnostics = DiagnosticMaster::getAllDiagnostics();
            $this->diagnosticsData = $diagnostics;
            return view('backend.admin.Diagnostics.diagnostics_list', $this->data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function addDiagnostics(Request $request, $id = null)
    {
        try {
            $diagnosticsData = array();
            if (!empty($id)) {
                $diagnosticsData = DiagnosticMaster::getDiagnosticByID($id);
                if (empty($diagnosticsData)) {
                    return redirect()->back()->with('error', 'Diagnostics Not Found');
                }
            }
            $this->diagnosticsData = $diagnosticsData;
            return view('backend.admin.Diagnostics.add_diagnostics', $this->data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function storeDiagnostics(Request $request)
    {
        try {
            $request->validate(
                [
                    'diagnostics_name' => 'required',
                    'status' => 'nullable'
                ],
                [
                    'diagnostics_name.required' => 'Diagnostics Name Field is required !',
                    'status.required' => 'Status Field is required !'
                ]
            );
            DiagnosticMaster::storeDiagnostics($request);
            return redirect('admin/diagnostics_list')->with('success', 'Diagnostics Added Successfully!');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


}
