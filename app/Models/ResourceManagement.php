<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResourceManagement extends Model
{
    use HasFactory;
    protected $table = 'resource_management';
    
    protected $fillable = [
        'name',
        'uses',
        'maintainance_date',
        'amount',
        'quantity',
    ];
}
