<?php

namespace App\Http\Controllers\Reception;
use App\Models\{StaffMaster, OpdMaster, PatientMaster};

use App\Http\Controllers\Controller;
use App\Models\Billing;
use Illuminate\Http\Request;
use App\Models\Appointment;

class HomeController extends BaseController
{
	public function dashboard(Request $request)
	{
		try {
			$appointments = Appointment::getTodayAllConfirmAppointment()->take(5);
			$opdrecord = OpdMaster::getRecordPatientMasterOpdMaster()->take(5);
			$outreachReport = Appointment::getoutreachReport()->take(5);
			$this->outreachData = $outreachReport;
			$this->opdData = $opdrecord;
			$this->appointmentData = $appointments;

			return view('backend.reception.dashboard', $this->data);
		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}

	public function viewAppointment(Request $request)
	{
		try {
			$doctorList = StaffMaster::getOnlyDoctor();
			$this->doctorData = $doctorList;
			$query = Appointment::getAllConfirmAppointment();

			if ($request->has('start_date') && $request->has('end_date')) {
				$query->whereBetween('appointment_date', [$request->start_date, $request->end_date]);
			}
			$appointments = $query;
			$this->data['appointments'] = $appointments;
			return view('backend.reception.view_appointment', $this->data);
		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}
	public function viewOutReach(Request $request)
	{
		try {
			$doctorList = StaffMaster::getOnlyDoctor();
			$this->doctorData = $doctorList;
			$query = Appointment::where('type', 'appointment')->orderBy('id', 'desc');

			if ($request->has('start_date') && $request->has('end_date')) {
				$query->whereBetween('appointment_date', [$request->start_date, $request->end_date]);
			}
			$appointments = $query->get();
			$this->data['appointments'] = $appointments;
			$outreachReport = Appointment::getoutreachReport();
			$this->outreachData = $outreachReport;
			return view('backend.reception.view_outreach', $this->data);
		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}

	public function editAppointment(Request $request, $id = null)
	{
		try {
			$patientData = array();
			$doctorList = StaffMaster::getOnlyDoctor();
			$appointment = Appointment::getAppointmentByID($id);
			if (!empty($appointment->patient_id)) {
				$patientData = PatientMaster::getPatientByID($appointment->patient_id);
				// Get first and last visit dates
				$firstVisit = Appointment::where('patient_id', $appointment->patient_id)
					->orderBy('appointment_date', 'asc')
					->first();
					
				$lastVisit = Appointment::where('patient_id', $appointment->patient_id)
					->orderBy('appointment_date', 'desc') 
					->first();
					
				$appointment->first_visit_date = $firstVisit ? $firstVisit->appointment_date : null;
				$appointment->last_visit_date = $lastVisit ? $lastVisit->appointment_date : null;
			}
			$this->opd_id = null;
			$this->appointment_id = $id;

			$this->patientData = $patientData;
			$this->doctorData = $doctorList;
			$this->appointment = $appointment;
			return view('backend.reception.edit_appointment', $this->data);
		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}
	public function editOpd(Request $request, $id = null)
	{
		try {
			$patientData = array();
			$doctorList = StaffMaster::getOnlyDoctor();
			$appointment = OpdMaster::getOpdByID($id);
			if (!empty($appointment->patient_id)) {
				$patientData = PatientMaster::getPatientByID($appointment->patient_id);
				
				// Get first and last OPD dates for this patient
				$firstOpd = OpdMaster::where('patient_id', $appointment->patient_id)
					->orderBy('appointment_date', 'asc')
					->first();
					
				$lastOpd = OpdMaster::where('patient_id', $appointment->patient_id)
					->orderBy('appointment_date', 'desc')
					->first();
					
				$appointment->first_visit_date = $firstOpd ? $firstOpd->appointment_date : null;
				$appointment->last_visit_date = $lastOpd ? $lastOpd->appointment_date : null;
			}
			
			$this->patientData = $patientData;
			$this->doctorData = $doctorList;
			$this->appointment = $appointment;

			$this->appointment_id = $appointment->appointment_id;
			$this->opd_id = $id;
			return view('backend.reception.edit_appointment', $this->data);
		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}

	public function viewAddAppointmentForm(Request $request)
	{
		$doctorList = StaffMaster::getOnlyDoctor();
		$this->doctorData = $doctorList;
		return view('backend.reception.add_appointment', $this->data);
	}
	public function addAppointment(Request $request)
	{

		if ($request->isMethod('post')) {
			if (empty($request->patient_id)) {
				$validatedData = $request->validate(
					[
						'reference_name' => 'nullable',
						'name_prefix' => 'nullable',
						'first_name' => 'required',
						'middle_name' => 'required',
						'last_name' => 'required',
						'gender' => 'required',
						'dob' => 'required',
						'age' => 'required',
						'blood_group' => 'nullable',
						'phone_no' => 'required',
						'email' => 'nullable|email',
						'appointment_id' => 'nullable',
						'address' => 'required',
						'pincode' => 'nullable',
						'area' => 'nullable',
						'city' => 'nullable',
						'district' => 'nullable',
						'state' => 'nullable',
						'country' => 'nullable',
						'case_type' => 'required',
						'payment_method' => 'required',
						'appointment_date' => 'required',
						'appointment_time' => 'required',
						'doctor_id' => 'required',
						'remarks' => 'nullable|string',
						'mediclaim' => 'required',
					]
					// ,
					// [
					// 	'reference_name.required' => 'Reference Required',
					// 	'name_prefix.required' => 'Name Prefix Required',
					// 	'first_name.required' => 'first_name Required',
					// 	'middle_name.required' => 'middle_name Required',
					// 	'last_name.required' => 'last_name Required',
					// 	'gender.required' => 'gender Required',
					// 	'dob.required' => 'dob Required',
					// 	'age.required' => 'age Required',
					// 	'blood_group.required' => 'blood_group Required',
					// 	'phone_no.required' => 'phone_no Required',
					// 	'email.required' => 'email Required',
					// 	'address.required' => 'address Required',
					// 	'pincode.required' => 'pincode Required',
					// 	'area.required' => 'area Required',
					// 	'city.required' => 'city Required',
					// 	'district.required' => 'district Required',
					// 	'state.required' => 'state Required',
					// 	'country.required' => 'country Required',
					// 	'other_address.required' => 'other_address Required',
					// 	'case_type.required' => 'case_type Required',
					// 	'payment_method.required' => 'payment_method Required',
					// 	'appointment_date.required' => 'appointment_date Required',
					// 	'appointment_time.required' => 'appointment_time Required',
					// 	'doctor_id.required' => 'doctor_id Required',
					// 	'remarks.required' => 'remarks Required',
					// ]
				);
			} else {
				$validatedData = $request->validate([
					'case_type' => 'required',
					'appointment_id' => 'nullable',
					'payment_method' => 'required',
					'appointment_date' => 'required',
					'appointment_time' => 'required',
					'doctor_id' => 'required',
					'mediclaim' => 'required',
					'remarks' => 'nullable',
				]);
			}
			try {

				$id = $request->appointment_id;
				$opd_id = $request->opd_id;
				$patient_id = $request->patient_id;
				$patient = PatientMaster::createPatient($request);
				$patient_id = $patient->id;
				$request->patient_id = $patient_id;
				$opd=OpdMaster::createAppointment($request);
				Billing::create([
					'patient_master_id' => $patient_id,
					'opd_master_id' => $opd->id,
					'appointments_id' => $id,
					]);
				// return $id;
				if (!empty($id)) {
					$status = 'finalized';
					$appointment = Appointment::find($id);

					if ($appointment) {
						Appointment::updateStatus($id, $status);
					} else {
						return redirect()->back()->with('error', 'Appointment not found');
					}
				}
				return redirect('reception/dashboard')->with('success', 'Appointment added successfully');
			} catch (\Exception $e) {
				return redirect()->back()->with('error', $e->getMessage());
			}
		}
	}
	public function viewPatientList(Request $request)
	{
		try {
			$patient = PatientMaster::getAllPatient();
			$this->patientData = $patient;
			return view('backend.reception.viewPatientList', $this->data);
		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}
}