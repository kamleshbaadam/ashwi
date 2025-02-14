<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
	public function dashboard(Request $request)
	{
		try
		{
			return view('backend.admin.dashboard', $this->data);
		}
		catch(\Exception $e)
		{
			return redirect()->back()->with('error', $e->getMessage());
		}
	}

	
}
