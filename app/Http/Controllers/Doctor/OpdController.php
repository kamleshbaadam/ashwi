<?php

namespace App\Http\Controllers\Doctor;
use App\Models\{DiagnosticMaster, OpdMaster, PatientMaster,MedicineMaster,DiagnosticsMedicineMaster, OPDMedicine, OPDDiagnosis, OPDReport};

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;
class OpdController extends BaseController
{
	public function atd(Request $request)
	{
		try {
			return view('backend.drpanel.atd', $this->data);
		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}
	public function viewOpdAppointment($id)
	{
		try {
			$opdData = OpdMaster::getRecordByID($id);
			$patientData = PatientMaster::getPatientByID($opdData['patient_id']);
			$diagnosticsData = DiagnosticMaster::getActiveDiagnosticsByID();
			$medicineData = MedicineMaster::getActiveMedicineByID();
			$opdDiagData=OPDDiagnosis::getDiagnosisByOpdID($id);
			$opdMedicine=OPDMedicine::getMedicineByOpdID($id);
			$opdReport=OPDReport::getReportByOpdID($id);
			$historyData=OpdMaster::getHistoryByOPDIdandPatientId($opdData['patient_id'],$id);
			$this->patientData = $patientData;
			$this->opdData = $opdData;
            $this->diagnosticsData = $diagnosticsData;
            $this->medicineData = $medicineData;
            $this->opdDiagData = $opdDiagData;
            $this->opdMedicine = $opdMedicine;
            $this->opdReport = $opdReport;
            $this->historyData = $historyData;
			return view('backend.drpanel.view_opd_appointment', $this->data);

		} catch (\Exception $e) {
			return redirect()->back()->with('error',  $e->getMessage());
		}
	}

	public function getDiagnosisMedicine(Request $request)
	{
		try
		{
			$diagnosis_id=$request->id;
			$diagnosisData=DiagnosticsMedicineMaster::getMedicineByDiagnosisID($diagnosis_id);

			$medicine=null;

			if(!empty($diagnosisData))
			{
				foreach($diagnosisData as $value)
				{
					if(empty($medicine))
					{
						$medicine=$value['medicine_id'];
					}
					else
					{
						$medicine.=','.$value['medicine_id'];
					}
				}
			}

			$medicineArr=array();

			if(!empty($medicine))
			{
				$medicineArr=explode(',', $medicine);
			}

			$medicineData=MedicineMaster::getMedicineByArrID($medicineArr);

			return response()->json(['status' => true, 'message' => "Get Medicine Successfully", 'data' => $medicineData]);
		}
		catch(\Exception $e)
		{
			return array(['status' => false, 'message' => $e->getMessage(), 'data' => array()]);
		}
	}

	public function opdFormSave(Request $request)
	{
		try
		{
			$checkOpd=OpdMaster::getRecordByID($request->opd_id);
			if(empty($checkOpd))
			{
				return redirect('doctor/dashboard')->with('error', 'OPD Record Not Found');
			}

			$opd_id=$request->opd_id;
			
			$opdData=OpdMaster::updateOPD($request);

			$diagnosiscnt=0;
			if(!empty($request->diagnosis_id)){
				$diagnosiscnt=count($request->diagnosis_id) ?? 0;
			}

			if($diagnosiscnt>0)
			{
				OPDDiagnosis::removeDiagnosisByOpdID($opd_id);
				$i=0;
				while($i<$diagnosiscnt)
				{
					$newArr=array();
					$newArr['opd_id']=$opd_id;

					$newArr['diagnosis_id']=$request->diagnosis_id[$i];
					$newArr['diagnosis_name']=$request->diagnosis_name[$i];

					OPDDiagnosis::addOpdDiagnosis($newArr);
					$i++;
				}
			}

			$medicinecnt=0;
			if(!empty($request->medicine_id)){
				$medicinecnt=count($request->medicine_id) ?? 0;
			}

			if($medicinecnt>0)
			{
				OPDMedicine::removeMedicineByOpdID($opd_id);
				$i=0;
				while($i<$medicinecnt)
				{
					$newArr=array();
					$newArr['opd_id']=$opd_id;

					$newArr['medicine_id']=$request->medicine_id[$i];
					$newArr['medicine_name']=$request->medicine_name[$i];
					$newArr['medicine_description']=$request->medicine_description[$i];
					$newArr['unit']=$request->unit[$i];
					$newArr['days']=$request->days[$i];
					$newArr['qty']=$request->qty[$i];

					OPDMedicine::addOpdMedicine($newArr);
					$i++;
				}
			}
			$reportcnt=0;
			if(!empty($request->report_id)){
				$reportcnt=count($request->report_id) ?? 0;
			}

			if($reportcnt>0)
			{
				OPDReport::removeReportByOpdID($opd_id);
				$i=0;
				while($i<$reportcnt)
				{
					$newArr=array();
					$newArr['opd_id']=$opd_id;

					$newArr['report_id']=$request->report_id[$i];
					$newArr['report_name']=$request->report_name[$i];
					$newArr['report_description']=$request->report_description[$i];

					OPDReport::addOpdReport($newArr);
					$i++;
				}
			}

			return redirect('doctor/view-opdAppointment/'.$opd_id)->with('success', 'OPD Data Submitted Successfully');
		}
		catch(\Exception $e)
		{
			return redirect()->back()->with('error', $e->getMessage());
		}
	}
	public function curruntOpd()
	{
		try {
			$opdrecord = OpdMaster::getRecordPatientMasterOpdMaster($this->user_id);

			$this->opdData = $opdrecord;

			return view('backend.drpanel.opd', $this->data);
		} catch (\Exception $e) {
			return redirect()->back()->with('error', $e->getMessage());
		}
	}
}