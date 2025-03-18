<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;

    protected $fillable = [
        'opd_master_id',
        'appointments_id',
        'patient_master_id',
        'billing_no',
        'taxation',
        'package',
        'account',
        'case_memo_date',
        'balance',
        'mode_of_payment',
        'ref_no',
        'overall_discount',
        'subtotal',
        'description',
    ];

    public function opdMaster()
    {
        return $this->belongsTo(OpdMaster::class, 'opd_master_id');
    }
    public function appointments()
    {
        return $this->belongsTo(Appointment::class, 'appointments_id');
    }
    public function patient()
    {
        return $this->belongsTo(PatientMaster::class, 'patient_master_id');
    }
}
