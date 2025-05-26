<?php

namespace App\Http\Controllers\Reception;

use App\Http\Controllers\Controller;
use App\Models\Billing;
use App\Models\OpdMaster;
use App\Models\PatientMaster;
use App\Models\Service;
use App\Models\StaffMaster;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OpdController extends BaseController
{
    public function createBill($id)
    {
       $billing = Billing::select('billings.*', 'opd_master.checkup_type')
            ->join('opd_master', 'opd_master.id', '=', 'billings.opd_master_id')
            ->where('billings.opd_master_id', $id)
            ->first();


        $serviceData = Service::get();

        // Decode JSON fields into arrays or empty arrays if null
        if ($billing) {
            $billing->date = json_decode($billing->date) ?? [];
            $billing->services = json_decode($billing->services) ?? [];
            $billing->description = json_decode($billing->description) ?? [];
            $billing->qty = json_decode($billing->qty) ?? [];
            $billing->rate = json_decode($billing->rate) ?? [];
            $billing->discount = json_decode($billing->discount) ?? [];
            $billing->total = json_decode($billing->total) ?? [];
        }

        return view('backend.reception.create_bill', compact('billing', 'serviceData'));
    }

    public function storeBill(Request $request)
    {
        // return $request->all();
        $validator = Validator::make($request->all(), [
            'date' => 'required',
            'services' => 'required',
            'description' => 'required',
            'qty' => 'required',
            'rate' => 'required',
            'discount' => 'required',
            'total' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->id) {
            $bill = Billing::find($request->id);
        } else {
            $bill = new Billing();
            $bill->opd_master_id = $request->opd_master_id;
            $bill->appointments_id = $request->appointments_id;
            $bill->patient_master_id = $request->patient_master_id;
        }
        $bill->date = $request->date;
        $bill->total = $request->total;
        $bill->description = $request->description;
        $bill->services = $request->services;
        $bill->rate = $request->rate;
        $bill->qty = $request->qty;
        $bill->discount = $request->discount;
        $bill->category = $request->category;
        $bill->taxation = $request->taxation;
        $bill->package = $request->package;
        $bill->account = $request->account;
        $bill->case_memo_date = $request->case_memo_date;
        $bill->mode_of_payment = $request->mode_of_payment;
        $bill->ref_no = $request->ref_no;
        $bill->subtotal = $request->subtotal;
        $bill->save();

        return redirect()->back()->with('success', 'Bill created successfully');
    }
    public function previewBill($id)
    {
        
        $this->billing = Billing::with(['opdMaster', 'appointments', 'patient'])->find($id);
        // dd($this->billing);
        return view('backend.reception.preview_bill', $this->data);
    }
};