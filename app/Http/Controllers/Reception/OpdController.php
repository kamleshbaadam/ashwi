<?php

namespace App\Http\Controllers\Reception;

use App\Http\Controllers\Controller;
use App\Models\OpdMaster;
use App\Models\PatientMaster;
use App\Models\StaffMaster;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OpdController extends BaseController
{
    public function createBill($id)
    {
        $opd = OpdMaster::find($id);
        return view('backend.reception.create_bill', compact('opd'));
    }
} 