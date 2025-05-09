<?php

namespace App\Http\Controllers;

use App\Models\StaffMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
	public function login(Request $request)
	{
		try
		{
			$credentials=$request->validate(
                [
                    'email' => 'required|email',
                    'password' => 'required',
                ],
                [
                    'email.required' => 'Email Field is required !',
                    'email.email' => 'Email Field is Email !',
                    'password.required' => 'Gender Field is required !',
                ]
            );

            $credentials['status']=1;

            $checkEmail=StaffMaster::getStaffByEmailID($request->email);
            if(empty($checkEmail))
            {
            	return redirect()->back()->with('error', "Staff Not Found");
            }

            if($checkEmail['status']!=1)
            {
            	return redirect()->back()->with('error', "Staff Is In-Active, Please Contact Admin");
            }

            if(!Auth::guard('staff')->attempt($credentials))
            {
                return redirect()->back()->with('success', "Email or Password Invalid");
            }

            $staffData=Auth::guard('staff')->user();

            $role=$staffData['role'];

            if($role=='telecaller')
            {
                return redirect('telecaller/dashboard')->with('success', "Login SuccessFully");
            }

            if($role=='receptionist')
            {
                return redirect('reception/dashboard')->with('success', "Login SuccessFully");
            }
            if($role=='doctor')
            {
                return redirect('doctor/dashboard')->with('success', "Login SuccessFully");
            }

            Auth::logout();

            return redirect('/login')->back()->with('success', "Role Not Found Please Contact Support");
		}
		catch(\Exception $e)
		{
			return redirect()->back()->with('success', $e->getMessage());
		}
	}

    public function logout(Request $request)
    {
        try
        {
            Auth::logout();

            return redirect('/login')->with('success', 'Logout SuccessFully');
        }
        catch(\Exception $e)
        {
            return redirect()->back()->with('success', $e->getMessage());
        }
    }

    public function staffLogout(Request $request)
    {
        try
        {
            Auth::guard('staff')->logout();

            return redirect('/login')->with('success', 'Logout SuccessFully');
        }
        catch(\Exception $e)
        {
            return redirect()->back()->with('success', $e->getMessage());
        }
    }
}
