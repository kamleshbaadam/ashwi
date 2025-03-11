<?php

namespace App\Http\Controllers\TeleCaller;

use App\Http\Controllers\Controller;
use App\Models\PatientMaster;
use App\Models\StaffMaster;
use Illuminate\Http\Request;
use App\Models\Appointment;

class HomeController extends BaseController
{
	/**
	 * Display the telecaller dashboard
	 * 
	 * @param Request $request
	 * @return \Illuminate\View\View
	 */
	public function dashboard(Request $request)
	{
		try {
			// Get doctor list for dropdown
			$doctorList = StaffMaster::getOnlyDoctor();
			$this->doctorData = $doctorList;
			
			// Get recent appointments and outreach records
			$appointments = Appointment::getAllConfirmAppointment()->take(5);
			$outreachReport = Appointment::getoutreachReport()->take(5);
			
			// Set data for view
			$this->data['appointments'] = $appointments;
			$this->outreachData = $outreachReport;
			
			return view('backend.telecaller.dashboard', $this->data);
		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}

	/**
	 * Display appointment list page
	 * 
	 * @param Request $request
	 * @return \Illuminate\View\View
	 */
	public function viewAppointment(Request $request)
	{
		try {
			// Get doctor list for dropdown
			$doctorList = StaffMaster::getOnlyDoctor();
			$this->doctorData = $doctorList;
			
			// Build query with filters
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

	/**
	 * Display outreach list page
	 * 
	 * @param Request $request
	 * @return \Illuminate\View\View
	 */
	public function viewOutReach(Request $request)
	{
		try {
			// Get doctor list for dropdown
			$doctorList = StaffMaster::getOnlyDoctor();
			$this->doctorData = $doctorList;
			
			// Build query with filters
			$query = Appointment::where('type', 'appointment')->orderBy('id', 'desc');

			if ($request->has('start_date') && $request->has('end_date')) {
				$query->whereBetween('appointment_date', [$request->start_date, $request->end_date]);
			}
			
			$appointments = $query->get();
			$outreachReport = Appointment::getoutreachReport();
			
			// Set data for view
			$this->data['appointments'] = $appointments;
			$this->outreachData = $outreachReport;
			
			return view('backend.telecaller.view_outreach', $this->data);
		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}

	/**
	 * Store new appointment or update existing one
	 * 
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function storeAppointment(Request $request)
	{
		try {
			// Validate request data based on whether this is an update or new record
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

	/**
	 * Delete an appointment
	 * 
	 * @param int $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
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

	/**
	 * Show edit appointment form
	 * 
	 * @param Request $request
	 * @param int $id
	 * @return \Illuminate\View\View
	 */
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

	/**
	 * Get phone number suggestions for autocomplete
	 * 
	 * @param Request $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function getPhoneSuggestions(Request $request)
	{
		$phone_no = $request->get('query');
		$suggestions = PatientMaster::getPhoneSuggestion($phone_no);
		return response()->json($suggestions);
	}

	/**
	 * Check time availability for appointments
	 * 
	 * @param Request $request
	 * @return array
	 */
	public function checkTimeAvailability(Request $request)
	{
		$date = $request->input('appointment_date');
		$newArr = [];
		$bookedTimes = Appointment::getAppointmentDatabyDate($date);
		
		if(!empty($bookedTimes)) {
			foreach($bookedTimes as $val) {
				$newArr[] = $val['time'];
			}
		}

		return $newArr;
	}
}
