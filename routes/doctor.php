<?php

namespace App\Http\Controllers\Doctor;
use Illuminate\Support\Facades\Route;
use Auth;
use Artisan;

Route::group(['prefix' => 'doctor'], function () {
    Route::middleware(['isStaff'])->group(function ()
    {
        Route::controller(HomeController::class)->group(function () {
            Route::get('dashboard', 'dashboard');
            // Route::get('patient-list,viewAppointment');
        });
        Route::controller(OpdController::class)->group(function () {
            Route::get('opd-list','opdList');
            Route::get('view-opdAppointment/{id}','viewOpdAppointment');
            Route::POST('getdiagnosismedicine','getDiagnosisMedicine');
            Route::POST('opdFormSave','opdFormSave');
            Route::get('currunt-opd','curruntOpd');
        });
    });
});