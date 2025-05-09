<?php

namespace App\Http\Controllers\Reception;
use App\Models\{StaffMaster, OpdMaster, PatientMaster};

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;

class AppointmentController extends BaseController
{
	public function view_opd_appointment(Request $request)
	{
		try {
			$doctorList = StaffMaster::getOnlyDoctor();
			$this->doctorData = $doctorList;
			$query = OpdMaster::getAllOpdAppoiment($request->user_id);
			if ($request->has('start_date') && $request->has('end_date')) {
				$query->whereBetween('appointment_date', [$request->start_date, $request->end_date]);
			}
			$opdData = $query;
			$this->data['opdData'] = $opdData;
			return view('backend.reception.view_opd_appointment', $this->data);
		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}

	/**
	 * Display a listing of the appointments
	 */
	public function index(Request $request)
	{
		try {
			// Get doctor list for dropdown
			$doctorList = StaffMaster::getOnlyDoctor();
			$this->doctorData = $doctorList;
			
			// Build query with filters
			$query = Appointment::with('doctor');
			
			// Filter by appointment type if provided
			if ($request->has('type')) {
				$query->where('type', $request->type);
			}
			
			// Apply date range filter if provided
			if ($request->has('start_date') && $request->has('end_date')) {
				$query->whereBetween(DB::raw('DATE(appointment_date)'), [
					$request->start_date, 
					$request->end_date
				]);
			}
			
			// Apply doctor filter if provided
			if ($request->has('doctor_id') && $request->doctor_id > 0) {
				$query->where('doctor_id', $request->doctor_id);
			}
			
			// Apply status filter if provided
			if ($request->has('status') && !empty($request->status)) {
				$query->where('status', $request->status);
			}
			
			// Get appointments with pagination
			$appointments = $query->orderBy('appointment_date', 'desc')->paginate(15);
			$this->data['appointments'] = $appointments;
			
			return view('backend.reception.appointments', $this->data);
		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}
	
	/**
	 * Show the form for creating a new appointment
	 */
	public function create()
	{
		try {
			// Get doctor list for dropdown
			$doctorList = StaffMaster::getOnlyDoctor();
			$this->doctorData = $doctorList;
			
			return view('backend.reception.create_appointment', $this->data);
		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}
	
	/**
	 * Store a newly created appointment
	 */
	public function store(Request $request)
{
    try {
        // Validate request data
        $validatedData = $request->validate([
            'patient_id' => 'required|integer|unique:patients,patient_id', // Ensure patient_id is unique
			'appointment_id' => 'required|integer',
            'name' => 'required|string',
            'phone_no' => 'required|string',
            'reference' => 'required|string',
            'type' => 'required|string',
            'case_type' => 'nullable|string',
            'doctor_id' => 'nullable|integer',
            'appointment_date' => 'nullable|date',
            'time' => 'nullable|string',
            'morning_waiting_time' => 'nullable|string',
            'evening_waiting_time' => 'nullable|string',
        ]);

		        
        // Create or find the patient
        $patient = PatientMaster::firstOrCreate(
            ['patient_id' => $request->patient_id], // Check for existing patient by patient_id
            [
				'appointment_id' => 'required|integer',
                'name' => $request->name,
                'phone_no' => $request->phone_no,
                'reference' => $request->reference,
				'type' => $request->type,
				'case_type' => $request->case_type,
				'doctor_id' => $request->doctor_id,
				'appointment_date' => $request->appointment_date,
				'time' => $request->time,
				'morning_waiting_time' => $request->morning_waiting_time,
				'evening_waiting_time' => $request->evening_waiting_time,
            ]
        );
        // Create appointment
        $appointment = Appointment::create([
            'patient_id' => $patient->id, // Use the patient's ID
			'appointment_id' => 'required|integer',
            'name' => $request->name,
            'phone_no' => $request->phone_no,
            'reference' => $request->reference,
            'type' => $request->type,
            'case_type' => $request->case_type,
            'doctor_id' => $request->doctor_id,
            'appointment_date' => $request->appointment_date,
            'time' => $request->time,
            'morning_waiting_time' => $request->morning_waiting_time,
            'evening_waiting_time' => $request->evening_waiting_time,
        ]);
        
        return redirect('reception/appointments')->with('success', 'Appointment created successfully!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', $e->getMessage());
    }
}	
	/**
	 * Display the specified appointment
	 */
	public function show($id)
	{
		try {
			$appointment = Appointment::with(['doctor', 'patient'])->findOrFail($id);
			$this->data['appointment'] = $appointment;
			
			return view('backend.reception.view_appointment', $this->data);
		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}
	
	/**
	 * Show the form for editing the specified appointment
	 */
	public function edit($id)
	{
		try {
			// Get doctor list for dropdown
			$doctorList = StaffMaster::getOnlyDoctor();
			$this->doctorData = $doctorList;
			
			// Get appointment details
			$appointment = Appointment::with('doctor')->findOrFail($id);
			
			// Get patient details if available
			$patientData = null;
			if ($appointment->patient_id) {
				$patientData = PatientMaster::find($appointment->patient_id);
			}
			
			$this->data['appointment'] = $appointment;
			$this->data['patientData'] = $patientData;
			
			return view('backend.reception.edit_appointment', $this->data);
		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}
	
	/**
	 * Update the specified appointment
	 */
	public function update(Request $request, $id)
	{
		try {
			// Find appointment
			$appointment = Appointment::findOrFail($id);
			
			// Validate request data
			$validatedData = $request->validate([
				'name' => 'required|string',
				'phone_no' => 'required|string',
				'reference' => 'required|string',
				'type' => 'required|string',
				'case_type' => 'nullable|string',
				'doctor_id' => 'nullable|integer',
				'appointment_date' => 'nullable|date',
				'time' => 'nullable|string',
				'status' => 'nullable|string',
				'remark' => 'nullable|string',
				'patient_id' => 'nullable|integer',
			]);
			
			// Update appointment
			$request->merge(['appointment_id' => $id]);
			Appointment::createAppointment($request);
			
			return redirect('reception/appointments')->with('success', 'Appointment updated successfully!');
		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}
	
	/**
	 * Remove the specified appointment
	 */
	public function destroy($id)
	{
		try {
			$appointment = Appointment::findOrFail($id);
			$appointment->delete();
			
			return redirect('reception/appointments')->with('success', 'Appointment deleted successfully!');
		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}
	
	/**
	 * Convert appointment to OPD
	 */
	public function convertToOpd(Request $request, $id)
	{
		try {
			DB::beginTransaction();
			
			// Find appointment
			$appointment = Appointment::findOrFail($id);
			
			// Create or find patient
			$patientId = $appointment->patient_id;
			if (!$patientId) {
				// Create new patient if not exists
				$patientData = [
					'name' => $appointment->name,
					'phone_no' => $appointment->phone_no,
					'reference_name' => $appointment->reference,
					// Add more fields as needed
				];
				
				$patient = PatientMaster::create($patientData);
				$patientId = $patient->id;
			}
			
			// Create OPD record
			$opdData = [
				'patient_id' => $patientId,
				'doctor_id' => $appointment->doctor_id,
				'appointment_id' => $appointment->id,
				'opd_date' => date('Y-m-d'),
				'status' => 'active',
				// Add more fields as needed
			];
			
			$opd = OpdMaster::create($opdData);
			
			// Update appointment status
			$appointment->status = 'completed';
			$appointment->save();
			
			DB::commit();
			
			return redirect('reception/opd/' . $opd->id)->with('success', 'Appointment converted to OPD successfully!');
		} catch (\Exception $e) {
			DB::rollBack();
			return redirect()->back()->with('error', $e->getMessage());
		}
	}
	
	/**
	 * Check available time slots for the selected date
	 */
	public function checkTimeAvailability(Request $request)
	{
		$date = $request->input('appointment_date');
		$bookedTimes = Appointment::where('appointment_date', $date)->get();
		$availableTimes = [];

		foreach ($bookedTimes as $time) {
			$availableTimes[] = $time->appointment_time;
		}	
		return response()->json($availableTimes);
	}
}