<?php

namespace App\Http\Controllers\TeleCaller;

use App\Http\Controllers\Controller;
use App\Models\PatientMaster;
use App\Models\StaffMaster;
use Illuminate\Http\Request;
use App\Models\Appointment;

class HomeController extends BaseController
{
	public function dashboard(Request $request)
	{
		try {
			$doctorList = StaffMaster::getOnlyDoctor();
			$this->doctorData = $doctorList;
			$appointments = Appointment::getAllConfirmAppointment()->take(5);
			$this->data['appointments'] = $appointments;
			$outreachReport = Appointment::getoutreachReport()->take(5);
			$this->outreachData = $outreachReport;
			return view('backend.telecaller.dashboard', $this->data);
		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}


	public function viewAppointment(Request $request)
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
			return view('backend.telecaller.view_appointment', $this->data);
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
			return view('backend.telecaller.view_outreach', $this->data);
		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}

	public function storeAppointment(Request $request)
	{
		try {
			if (empty($request->appointment_id)) {
				$validatedData = $request->validate([
					'name' => 'required|string',
					'phone_no' => 'required|string',
					'reference' => 'required|string',
					'type' => 'nullable|string',
					'case_type' => 'nullable|string',
					'doctor_id' => 'nullable|integer',
					'appointment_date' => 'nullable|date',
					'time' => 'nullable|string',
					'morning_waiting_time' => 'nullable|string',
					'evening_waiting_time' => 'nullable|string',
				]);
			} else {
				$validatedData = $request->validate([
					'appointment_id' => 'required|string',
					'name' => 'required|string',
					'phone_no' => 'required|string',
					'reference' => 'required|string',
					'type' => 'nullable|string',
					'case_type' => 'nullable|string',
					'doctor_id' => 'nullable|integer',
					'appointment_date' => 'nullable|date',
					'time' => 'nullable|string',
					'status' => 'nullable|string',
					'remark' => 'nullable|string',
				]);
			}

			Appointment::createAppointment($request);
			return redirect('telecaller/dashboard')->with('success', 'Appointment Saved Successfully!');

		} catch (\Exception $e) {
			return redirect('telecaller/view-appointment')->with('error', $e->getMessage());
		}
	}
	public function deleteAppointment($id)
	{
		try {
			$appointment = Appointment::findOrFail($id);
			$appointment->delete();
			return redirect('telecaller/view-appointment')->with('success', 'Appointment Deleted Successfully.');
		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}
	public function editAppointment(Request $request, $id)
	{
		try {
			$doctorList = StaffMaster::getOnlyDoctor();
			$appointment = Appointment::findOrFail($id);
			$this->doctorData = $doctorList;
			$this->appointment = $appointment;

			return view('backend.telecaller.edit_appointment', $this->data);
		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}
	public function getPhoneSuggestions(Request $request)
	{
		$phone_no = $request->get('query');
		$suggestions = PatientMaster::getPhoneSuggestion($phone_no);
		return response()->json($suggestions);
	}
	// app/Http/Controllers/AppointmentController.php
	public function checkTimeAvailability(Request $request)
	{
		$date = $request->input('appointment_date');
		$newArr=array();
		$bookedTimes = Appointment::getAppointmentDatabyDate($date);
		if(!empty($bookedTimes))
		{
			foreach($bookedTimes as $val)
			{
				$newArr[]=$val['time'];
			}
		}

		return $newArr;
	}

}
