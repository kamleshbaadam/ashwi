<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ResourceManagement;

class ResourceManagmentController extends BaseController
{
    public function resourcesList()
    {
        try {
            $resources = ResourceManagement::orderBy('id', 'desc')->get();
            $this->resourcesData = $resources;
            return view('backend.admin.resources.list', $this->data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function addResource($id = null)
    {
        try {
            if (!empty($id)) {
                $this->resourcesData = ResourceManagement::find($id);
            } else {
                $this->resourcesData = null; // Set to null for new resource
            }
            return view('backend.admin.resources.add', $this->data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function storeResource(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'uses' => 'required',
                'maintainance_date' => 'required|date',
                'amount' => 'required|numeric',
                'quantity' => 'required|numeric',
            ]);

            // Only allow fields that exist in the table
            $data = $request->only([
                'name',
                'uses',
                'maintainance_date',
                'amount',
                'quantity',
            ]);

            if (!empty($request->resource_id)) {
                ResourceManagement::where('id', $request->resource_id)->update($data);
                return redirect('admin/resources/list')->with('success', 'Resource Updated Successfully!');
            } else {
                ResourceManagement::create($data);
                return redirect('admin/resources/list')->with('success', 'Resource Added Successfully!');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function deleteResource($id)
    {
        try {
            ResourceManagement::where('id', $id)->delete();
            return redirect()->back()->with('success', 'Resource Deleted Successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
