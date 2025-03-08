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
    /**
     * Display a listing of OPD records.
     */
    public function index()
    {
        try {
            $opds = OpdMaster::getRecordPatientMasterOpdMaster()->paginate(10);
            $this->data['opds'] = $opds;
            return view('backend.reception.opd', $this->data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new OPD record.
     */
    public function create()
    {
        try {
            $doctorList = StaffMaster::getOnlyDoctor();
            $this->data['doctorData'] = $doctorList;
            return view('backend.reception.opd_create', $this->data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Store a newly created OPD record in storage.
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'patient_id' => 'required|exists:patient_master,id',
                'doctor_id' => 'required|exists:staff_master,id',
                'case_type' => 'required|string',
                'fees' => 'required|numeric',
                'payment_mode' => 'required|string',
                'payment_status' => 'required|string',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // Create OPD record
            $opd = new OpdMaster();
            $opd->patient_id = $request->patient_id;
            $opd->doctor_id = $request->doctor_id;
            $opd->case_type = $request->case_type;
            $opd->fees = $request->fees;
            $opd->payment_mode = $request->payment_mode;
            $opd->payment_status = $request->payment_status;
            $opd->remarks = $request->remarks;
            $opd->save();

            // If this OPD was created from an appointment, update the appointment status
            if ($request->has('appointment_id') && !empty($request->appointment_id)) {
                $appointment = Appointment::find($request->appointment_id);
                if ($appointment) {
                    $appointment->status = 'finalized';
                    $appointment->save();
                }
            }

            return redirect()->route('reception.opd')->with('success', 'OPD record created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage())->withInput();
        }
    }

    /**
     * Display the specified OPD record.
     */
    public function show($id)
    {
        try {
            $opd = OpdMaster::with(['patient', 'doctor'])->findOrFail($id);
            $this->data['opd'] = $opd;
            return view('backend.reception.opd_view', $this->data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified OPD record.
     */
    public function edit($id)
    {
        try {
            $opd = OpdMaster::findOrFail($id);
            $doctorList = StaffMaster::getOnlyDoctor();
            
            $this->data['opd'] = $opd;
            $this->data['doctorData'] = $doctorList;
            
            return view('backend.reception.opd_edit', $this->data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Update the specified OPD record in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'doctor_id' => 'required|exists:staff_master,id',
                'case_type' => 'required|string',
                'fees' => 'required|numeric',
                'payment_mode' => 'required|string',
                'payment_status' => 'required|string',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $opd = OpdMaster::findOrFail($id);
            $opd->doctor_id = $request->doctor_id;
            $opd->case_type = $request->case_type;
            $opd->fees = $request->fees;
            $opd->payment_mode = $request->payment_mode;
            $opd->payment_status = $request->payment_status;
            $opd->remarks = $request->remarks;
            $opd->save();

            return redirect()->route('reception.opd')->with('success', 'OPD record updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified OPD record from storage.
     */
    public function destroy($id)
    {
        try {
            $opd = OpdMaster::findOrFail($id);
            $opd->delete();
            return redirect()->route('reception.opd')->with('success', 'OPD record deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Show form to create OPD from patient.
     */
    public function createFromPatient($id)
    {
        try {
            $patient = PatientMaster::findOrFail($id);
            $doctorList = StaffMaster::getOnlyDoctor();
            
            $this->data['patient'] = $patient;
            $this->data['doctorData'] = $doctorList;
            
            return view('backend.reception.opd_create_from_patient', $this->data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Show form to create OPD from appointment.
     */
    public function createFromAppointment($id)
    {
        try {
            $appointment = Appointment::with('patient')->findOrFail($id);
            $doctorList = StaffMaster::getOnlyDoctor();
            
            $this->data['appointment'] = $appointment;
            $this->data['patient'] = $appointment->patient;
            $this->data['doctorData'] = $doctorList;
            $this->data['selectedDoctor'] = $appointment->doctor_id;
            
            return view('backend.reception.opd_create_from_appointment', $this->data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
} 