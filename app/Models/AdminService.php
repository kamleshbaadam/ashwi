<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StaffMaster;

class AdminService extends Model
{
    use HasFactory;
    protected $table = 'admin_service';
    protected $guarded = [];

    public function staff()
    {
        return $this->belongsTo(StaffMaster::class, 'assigned_to', 'id');
    }
}
