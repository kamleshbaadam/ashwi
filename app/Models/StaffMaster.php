<?php

namespace App\Models;

use Hash;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;

class StaffMaster extends Model
{
    use HasFactory;

    protected $table = 'staff_master';
    protected $guarded = ['id'];

    public static function getAllStaff()
    {
    	return StaffMaster::orderBy('id', 'DESC')->get()->toArray();
    }

    public static function getOnlyDoctor()
    {
        return StaffMaster::where('role', 'doctor')->get()->toArray();
    }

    public static function getStaffByID($id)
    {
    	return StaffMaster::where('id', $id)->first();
    }

    public static function addNewStaff($req)
    {
        $newStaff=new StaffMaster;
        if(!empty($req->staff_id))
        {
            $newStaff=StaffMaster::find($req->staff_id);
            if(empty($newStaff->id))
            {
                return '';
            }
        }

        $newStaff->first_name=$req->first_name;
        $newStaff->last_name=$req->last_name;
        $newStaff->email=$req->email;
        $newStaff->mobile=$req->mobile;
        $newStaff->gender=$req->gender;
        $newStaff->role=$req->role;
        $newStaff->address=$req->address;
        $newStaff->status=$req->status;

        if(!empty($req->password))
        {
            $newStaff->password=Hash::make($req->password);
        }

        $newStaff->save();

        return $newStaff;
    }

    public static function getStaffByEmailID($email)
    {
        return StaffMaster::where('email', $email)->first();
    }
}
