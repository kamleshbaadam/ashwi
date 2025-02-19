<?php

namespace App\Http\Controllers\Reception;
use App\Models\{StaffMaster, OpdMaster, PatientMaster};

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends BaseController
{
	public function view_opd_appointment(Request $request)
	{
		try {
			$doctorList = StaffMaster::getOnlyDoctor();
			$this->doctorData = $doctorList;
			$query = OpdMaster::getRecordPatientMasterOpdMaster();
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
}