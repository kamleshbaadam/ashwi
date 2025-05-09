<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientMaster extends Model
{
    use HasFactory;
    protected $table = 'patient_master';
    
    public static function generatePatientId()
    {
        $lastPatient = self::count();
        $newId = 'AHP' . str_pad($lastPatient+1, 6, '0', STR_PAD_LEFT);
        return $newId;
    }

    public static function createPatient($request)
    {
        // If we're editing, get the existing patient
        if (!empty($request->patient_id)) {
            $patientArr = PatientMaster::find($request->patient_id);

            if (!isset($patientArr->id)) {
                return ''; // If patient not found, return empty
            }
        } else {
            // If we're inserting, generate a new patient ID
            $patientArr = new PatientMaster();
            $patientArr->patient_id = self::generatePatientId(); // Generate new ID for new patient
        }

        // Fill the fields with the request data
        $patientArr->reference_name = $request->reference_name;
        $patientArr->name_prefix = $request->name_prefix;
        $patientArr->first_name = $request->first_name;
        $patientArr->middle_name = $request->middle_name;
        $patientArr->last_name = $request->last_name;
        $patientArr->gender = $request->gender;
        $patientArr->dob = $request->dob;
        $patientArr->age = $request->age;
        $patientArr->blood_group = $request->blood_group;
        $patientArr->phone_no = $request->phone_no;
        $patientArr->email = $request->email;
        $patientArr->address = $request->address;
        $patientArr->pincode = $request->pincode;
        $patientArr->area = $request->area;
        $patientArr->city = $request->city;
        $patientArr->district = $request->district;
        $patientArr->state = $request->state;
        $patientArr->country = $request->country;
        $patientArr->mediclaim = $request->mediclaim;
        
        // Save the patient data (either new or updated)
        $patientArr->save();

        return $patientArr;
    }


    public static function getPatientByID($id)
    {
        return PatientMaster::where('id', $id)->first();
    }
    public static function getAllPatient()
    {
        return PatientMaster::orderBy('id', 'Desc')->get()->toArray();
    }

    public static function getPhoneSuggestion($phone_no)
    {
        return PatientMaster::selectRaw('patient_master.*, concat(patient_master.first_name," ",patient_master.middle_name, " ", patient_master.last_name) as name')
            ->where('phone_no', 'LIKE', "%{$phone_no}%")
            ->get();
    }

}
