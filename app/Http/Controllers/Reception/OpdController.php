<?php

namespace App\Http\Controllers\Reception;

use App\Http\Controllers\Controller;
use App\Models\Billing;
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
        $this->billing = Billing::with(['opdMaster','appointments','patient'])->where('opd_master_id', $id)->first();
        return view('backend.reception.create_bill', $this->data);
    }
    public function storeBill(Request $request)
    {
        if ($request->id) {
            $bill = Billing::find($request->id);
        } else {
            $bill = new Billing();
            $bill->opd_master_id = $request->opd_master_id;
            $bill->appointments_id = $request->appointments_id;
            $bill->patient_master_id = $request->patient_master_id;
            $bill->billing_no = rand(100000, 999999);
        }
        $bill->taxation = $request->taxation;
        $bill->package = $request->package;
        $bill->account = $request->account;
        $bill->case_memo_date = $request->case_memo_date;
        $bill->balance = $request->balance;
        $bill->mode_of_payment = $request->mode_of_payment;
        $bill->overall_discount = $request->overall_discount;
        $bill->ref_no = $request->ref_no;
        $bill->subtotal = $request->subtotal;
        $bill->description = $request->description;
        $bill->save();
        return redirect()->back()->with('success', 'Bill created successfully');
    }
    public function previewBill($id)
    {
        $this->billing = Billing::with(['opdMaster','appointments','patient'])->find($id);
        return view('backend.reception.preview_bill', $this->data);
    }
} 