<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $table = 'appointments';
    protected $fillable = [
        'name',
        'phone_no',
        'reference',
        'type',
        'case_type',
        'doctor_id',
        'appointment_date',
        'morning_waiting_time',
        'evening_waiting_time',
        'status',
        'remark',
    ];
    public static function createAppointment($request)
    {
        if (!empty($request->time)) {
            $request->appointment_date = $request->appointment_date . ' ' . $request->time;
        }
        if (!empty($request->morning_waiting_time)) {
            $request->appointment_date = $request->appointment_date . ' ' . $request->morning_waiting_time;
        }
        if (!empty($request->evening_waiting_time)) {
            $request->appointment_date = $request->appointment_date . ' ' . $request->evening_waiting_time;
        }
        
        unset($request->time);
        $appointmentArr = new Appointment();
        if (!empty($request->appointment_id)) {
            $appointmentArr = Appointment::find($request->appointment_id);
            if (!isset($appointmentArr->id)) {
                return '';
            }
        }
        if(!empty($request->patient_id)){
            $appointmentArr->patient_id = $request->patient_id;
        }
        $appointmentArr->name = $request->name;
        $appointmentArr->phone_no = $request->phone_no;
        $appointmentArr->reference = $request->reference;
        $appointmentArr->type = $request->type;
        $appointmentArr->case_type = $request->case_type;
        $appointmentArr->doctor_id = $request->doctor_id;
        $appointmentArr->appointment_date = $request->appointment_date;
        $appointmentArr->morning_waiting_time = $request->morning_waiting_time;
        $appointmentArr->evening_waiting_time = $request->evening_waiting_time;
        if(!empty($request->status))
        {
            $appointmentArr->status = $request->status;
        }
        $appointmentArr->remark = $request->remark;
        $appointmentArr->save();
        return $appointmentArr;

    }
    public static function updateStatus($id, $status)
    {
        $appointment = Appointment::find($id);
        $appointment->status = $status;
        $appointment->save();
        return $appointment;
    }
    public function doctor()
    {
        return $this->belongsTo(StaffMaster::class, 'doctor_id');
    }

    public static function getAllConfirmAppointment()
    {
        return Appointment::selectRaw('appointments.*, staff_master.first_name,staff_master.last_name ')
            ->leftJoin('staff_master', 'staff_master.id', '=', 'appointments.doctor_id')
            ->where('appointments.type', 'appointment')
            // ->whereDate('appointments.appointment_date', date('Y-m-d')) 
            ->orderBy('appointments.id', 'desc')->get();
    }

    public static function getoutreachReport()
    {
        return Appointment::selectRaw('appointments.*, staff_master.first_name,staff_master.last_name ')
            ->leftJoin('staff_master', 'staff_master.id', '=', 'appointments.doctor_id')
            ->where('type', '!=', 'appointment')
            ->orderBy('appointments.id', 'desc')->get();
    }



    public static function getAppointmentByID($id)
    {
        return Appointment::find($id);
    }

    public static function updateOpdIDByAppointmentID($appointment_id, $opd_id)
    {
        $newArr = Appointment::find($appointment_id);
        return $newArr;
    }

    public static function getTodayAllConfirmAppointment()
    {
        $date = date('Y-m-d');
        return Appointment::selectRaw('appointments.*, staff_master.first_name,staff_master.last_name ')
            ->leftJoin('staff_master', 'staff_master.id', '=', 'appointments.doctor_id')
            ->where('appointments.type', 'appointment')
            ->where('appointments.status', '!=', 'finalized')
            ->whereDate('appointments.appointment_date', $date)
            ->orderBy('appointments.id', 'desc')->get();
    }
    public static function getAppointmentDatabyID($id)
    {
        return Appointment::where('id', $id)->first();
    }
    public static function getAppointmentDatabyDate($date)
    {
        return Appointment::selectRaw('DISTINCT DATE_FORMAT(appointment_date, "%H:%i") as time')
        ->whereDate('appointment_date', $date)
        ->get()
        ->toArray();
    }
}
