<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StaffMaster;

class Instrument extends Model
{
    use HasFactory;
    protected $table = 'instrument';
    
    protected $fillable = [
        'area',
        'name',
        'assigned_to',
        'period',
        'condition',
        'last_check_date',
        'given_for',
        'name_of_given',
        'date_of_given',
    ];

    public function staff()
    {
        return $this->belongsTo(StaffMaster::class, 'assigned_to', 'id');
    }
}
