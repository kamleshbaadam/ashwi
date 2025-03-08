<?php

namespace App\Http\Controllers\Reception;

use App\Http\Controllers\Controller;
use App\Models\PatientMaster;
use App\Models\StaffMaster;
use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Validator;

class PatientController extends BaseController
{
    /**
     * Display a listing of the patients.
     */
    public function index()
    {
        try {
            $patients = PatientMaster::orderBy('id', 'desc')->paginate(10);
            $this->data['patients'] = $patients;
            return view('backend.reception.patients', $this->data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new patient.
     */
    public function create()
    {
        try {
            return view('backend.reception.patient_create', $this->data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Store a newly created patient in storage.
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'phone_no' => 'required|string|max:15',
                'gender' => 'required|in:male,female,other',
                'age' => 'required|numeric',
                'address' => 'nullable|string',
                'email' => 'nullable|email',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $patient = new PatientMaster();
            $patient->first_name = $request->first_name;
            $patient->last_name = $request->last_name;
            $patient->phone_no = $request->phone_no;
            $patient->gender = $request->gender;
            $patient->age = $request->age;
            $patient->address = $request->address;
            $patient->email = $request->email;
            $patient->save();

            return redirect()->route('reception.patients')->with('success', 'Patient created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage())->withInput();
        }
    }

    /**
     * Display the specified patient.
     */
    public function show($id)
    {
        try {
            $patient = PatientMaster::findOrFail($id);
            $appointments = Appointment::where('patient_id', $id)->orderBy('id', 'desc')->get();
            $opds = OpdMaster::where('patient_id', $id)->orderBy('id', 'desc')->get();
            
            $this->data['patient'] = $patient;
            $this->data['appointments'] = $appointments;
            $this->data['opds'] = $opds;
            
            return view('backend.reception.patient_view', $this->data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified patient.
     */
    public function edit($id)
    {
        try {
            $patient = PatientMaster::findOrFail($id);
            $this->data['patient'] = $patient;
            return view('backend.reception.patient_edit', $this->data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Update the specified patient in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'phone_no' => 'required|string|max:15',
                'gender' => 'required|in:male,female,other',
                'age' => 'required|numeric',
                'address' => 'nullable|string',
                'email' => 'nullable|email',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $patient = PatientMaster::findOrFail($id);
            $patient->first_name = $request->first_name;
            $patient->last_name = $request->last_name;
            $patient->phone_no = $request->phone_no;
            $patient->gender = $request->gender;
            $patient->age = $request->age;
            $patient->address = $request->address;
            $patient->email = $request->email;
            $patient->save();

            return redirect()->route('reception.patients')->with('success', 'Patient updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified patient from storage.
     */
    public function destroy($id)
    {
        try {
            $patient = PatientMaster::findOrFail($id);
            $patient->delete();
            return redirect()->route('reception.patients')->with('success', 'Patient deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Search for patients.
     */
    public function search(Request $request)
    {
        try {
            $query = PatientMaster::query();
            
            if ($request->has('search')) {
                $search = $request->search;
                $query->where(function($q) use ($search) {
                    $q->where('first_name', 'like', "%{$search}%")
                      ->orWhere('last_name', 'like', "%{$search}%")
                      ->orWhere('phone_no', 'like', "%{$search}%");
                });
            }
            
            $patients = $query->orderBy('id', 'desc')->paginate(10);
            $this->data['patients'] = $patients;
            $this->data['search'] = $request->search;
            
            return view('backend.reception.patients', $this->data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Show form to create appointment for a patient.
     */
    public function createAppointment($id)
    {
        try {
            $patient = PatientMaster::findOrFail($id);
            $doctorList = StaffMaster::getOnlyDoctor();
            
            $this->data['patient'] = $patient;
            $this->data['doctorData'] = $doctorList;
            
            return view('backend.reception.create_appointment_from_patient', $this->data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
} 