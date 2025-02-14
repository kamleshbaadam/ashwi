<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function RegisterForm()
    {
        return view('backend.admin.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
        ]);

        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        if ($user) {
            return redirect()->route('admin');
        }

        return back()->withErrors(['registration' => 'Failed to register.']);
    }

    public function LoginForm()
    {
        try
        {
            return view('backend.admin.login');
        }
        catch(\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function logout(Request $request)
    {
        try
        {
            Auth::logout();

            return redirect('admin')->with('success', 'Logout SuccessFully');
        }
        catch(\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function login(Request $request)
    {
        try
        {
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if(Auth::attempt($credentials))
            {
                return redirect('admin/dashboard');
            }

            return back()->with('error', 'Invalid credentials.');
        }
        catch(\Exception $e)
        {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
