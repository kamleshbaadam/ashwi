<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StaffMaster;
use App\Models\Role;
use Illuminate\Http\Request;

class StaffController extends BaseController
{
	public function staffList(Request $request)
	{
		try
		{
			$staffData=StaffMaster::getAllStaff();

			$this->staffData=$staffData;

			return view('backend.admin.Staff.staff_management', $this->data);
		}
		catch(\Exception $e)
		{
			return redirect()->back()->with('error', $e->getMessage());
		}
	}

	public function staffAdd(Request $request, $id=null)
	{
		try
		{
			$staffArr=array();
			if(!empty($id))
			{
				$staffArr=StaffMaster::getStaffByID($id);
				if(empty($staffArr))
				{
					return redirect()->back()->with('error', 'Staff Data Not Found');
				}
			}

			$roleData=Role::getAllRole();

			$this->roleData=$roleData;

			$this->staffData=$staffArr;
			
			return view('backend.admin.Staff.staff_create', $this->data);
		}
		catch(\Exception $e)
		{
			return redirect()->back()->with('error', $e->getMessage());
		}
	}

	public function addStaff(Request $request)
	{
		try
		{
			if(!empty($request->staff_id))
            {
                $request->validate(
                    [
                        'first_name' => 'required',
	                    'last_name' => 'required',
                        'email' => 'required|email|unique:staff_master,email,'.$request->staff_id.'',
                        'mobile' => 'required|digits:10',
                        'role' => 'required',
                        'gender' => 'required',
                    ],
                    [
                        'first_name.required' => 'First Name Field is required !',
	                    'last_name.required' => 'Last Name Field is required !',
	                    'email.required' => 'Email Field is required !',
	                    'email.email' => 'Email Field is Email !',
	                    'email.unique' => 'Email Field is Already Exists !',
	                    'mobile.required' => 'Mobile Field is required !',
	                    'role.required' => 'Role Field is required !',
	                    'gender.required' => 'Gender Field is required !',
                    ]
                );

                $staffData=StaffMaster::getStaffByID($request->staff_id);

                if(empty($staffData))
                {
                	return redirect()->with('error', "Staff Member Not Found");
                }
            }
            else
            {
				$request->validate(
	                [
	                    'first_name' => 'required',
	                    'last_name' => 'required',
	                    'email' => 'required|email|unique:staff_master,email',
	                    'password' => 'required',
	                    'mobile' => 'required',
	                    'role' => 'required',
	                    'gender' => 'required',
	                ],
	                [
	                    'first_name.required' => 'First Name Field is required !',
	                    'last_name.required' => 'Last Name Field is required !',
	                    'email.required' => 'Email Field is required !',
	                    'email.email' => 'Email Field is Email !',
	                    'email.unique' => 'Email Field is Already Exists !',
	                    'mobile.required' => 'Mobile Field is required !',
	                    'role.required' => 'Role Field is required !',
	                    'gender.required' => 'Gender Field is required !',
	                    'password.required' => 'Password Field is required !',
	                ]
	            );
			}

			$staffnewData=StaffMaster::addNewStaff($request);
			

			return redirect('admin/staffList')->with('success', 'Staff Updated SuccessFully');
		}
		catch(\Exception $e)
		{
			return redirect()->back()->with('error', $e->getMessage());
		}
	}
}
