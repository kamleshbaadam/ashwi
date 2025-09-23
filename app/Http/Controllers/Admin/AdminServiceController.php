<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminService;
use App\Models\StaffMaster;

class AdminServiceController extends BaseController
{
    public function servicesList()
    {
        try {
            $services = AdminService::with('staff')->orderBy('id', 'desc')->get();
            $this->servicesData = $services;
            return view('backend.admin.services.list', $this->data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function addService($id = null)
    {
        try {
            $this->staffData = StaffMaster::select('id', 'first_name')->where('status', 1)->get()->toArray();
            if (!empty($id)) {
                $this->servicesData = AdminService::find($id);
            } else {
                $this->servicesData = null; // Set to null for new service
            }
            return view('backend.admin.services.add', $this->data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function storeService(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'assigned_to' => 'required',
                'period' => 'required',
                'quantity' => 'required',
                'last_check_date' => 'required',
                'status' => 'required',
            ]);

            // Only allow fields that exist in the table
            $data = $request->only([
                'name',
                'assigned_to',
                'period',
                'quantity',
                'last_check_date',
                'status',
            ]);

            if (!empty($request->service_id)) {
                AdminService::where('id', $request->service_id)->update($data);
                return redirect('admin/services/list')->with('success', 'Service Updated Successfully!');
            } else {
                AdminService::create($data);
                return redirect('admin/services/list')->with('success', 'Service Added Successfully!');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function deleteService($id)
    {
        try {
            AdminService::where('id', $id)->delete();
            return redirect()->back()->with('success', 'Service Deleted Successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
