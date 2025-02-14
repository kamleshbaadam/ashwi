<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'role';

    public static function getAllRole()
    {
    	return Role::orderBy('id', 'ASC')->get()->toArray();
    }
}
