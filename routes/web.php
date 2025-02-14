<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function ()
{
    return view('backend.index');
});

Route::controller(LoginController::class)->group(function()
{
    Route::POST('login', 'login');
    Route::get('logout', 'logout');
    Route::get('staffLogout', 'staffLogout');
});


Route::get('login', function () {
    return view('backend.login');
})->name('login');

Route::get('/index', function () {
    return view('backend.index');
})->name('index');

//s-drPanel
Route::get('/drpanel', function () {
    return view('backend.drpanel.dr_panel');
});
Route::get('/drpanel/add-new-opdpage', function () {
    return view('backend.drpanel.add_new_opdpage');
});
Route::get('/drpanel/ipd-patient-details', function () {
    return view('backend.drpanel.ipd_patient_details');
});
Route::get('/drpanel/add-diagnosis', function () {
    return view('backend.drpanel.add_diagnosis');
});
Route::get('/drpanel/add-consultant-instruction', function () {
    return view('backend.drpanel.add_consultant_instruction');
});
Route::get('/drpanel/add-operations', function () {
    return view('backend.drpanel.add_operations');
});
Route::get('/drpanel/add-charges', function () {
    return view('backend.drpanel.add_charges');
});
Route::get('/drpanel/add-prescriptions', function () {
    return view('backend.drpanel.add_prescriptions');
});
Route::get('/drpanel/add-payments', function () {
    return view('backend.drpanel.add_payments');
});
Route::get('/drpanel/add-opd-newpage', function () {
    return view('backend.drpanel.add_opd_newpage');
});
Route::get('/drpanel/old-patients', function () {
    return view('backend.drpanel.old_patients');
});
Route::get('/drpanel/opd', function () {
    return view('backend.drpanel.opd');
});
Route::get('/drpanel/opd-patients', function () {
    return view('backend.drpanel.opd_patients');
});
Route::get('/drpanel/ipd-list', function () {
    return view('backend.drpanel.ipd_list');
});
Route::get('/drpanel/ot-management', function () {
    return view('backend.drpanel.ot_management');
});
Route::get('/drpanel/ot-schedule', function () {
    return view('backend.drpanel.ot_schedule');
});
Route::get('/drpanel/add-new-opd', function () {
    return view('backend.drpanel.add_new_opd');
});
Route::get('/drpanel/temporary-appointment', function () {
    return view('backend.drpanel.temporary_appointment');
});
Route::get('/drpanel/patients', function () {
    return view('backend.drpanel.patients');
});
//e-drPanel


Route::get('/nursing', function () {
    return view('backend.nursing.ipd_patient_details');
});

//s-admin

Route::get('register', [UserController::class, 'RegisterForm'])->name('register');
Route::post('register-store', [UserController::class, 'register'])->name('register.store');

Route::get('/admin/staff-create', function () {
    return view('backend.admin.staff_create');
});
Route::get('/admin/opd', function () {
    return view('backend.admin.opd');
});
Route::get('/admin/add-opd-newpage', function () {
    return view('backend.admin.add_opd_newpage');
});
Route::get('/admin/add-opd', function () {
    return view('backend.admin.add_opd');
});
Route::get('/admin/patients', function () {
    return view('backend.admin.patients');
});
Route::get('/admin/add-prescreption', function () {
    return view('backend.admin.add_prescreption');
});
Route::get('/admin/ipd-report', function () {
    return view('backend.admin.ipd_report');
});
//e-admin



Route::get('/accounting', function () {
    return view('backend.accounting.dashboard');
});

Route::get('/bedmanager', function () {
    return view('backend.bedmanager.add_bed');
});

Route::get('/clinic', function () {
    return view('backend.clinic.dashboard');
});

Route::get('/evaluation', function () {
    return view('backend.evaluation.dashboard');
});


//s-reception
// Route::get('/reception', function () {
//     return view('backend.reception.dashboard');
// });
Route::get('/appointment', function () {
    return view('backend.reception.appointments');
});
Route::get('/add-new-opd', function () {
    return view('backend.reception.add_new_opd');
});
Route::get('/old-patients', function () {
    return view('backend.reception.old_patients');
});
Route::get('/temporary-appointment', function () {
    return view('backend.reception.temporary_appointment');
});
Route::get('/ot-management', function () {
    return view('backend.reception.ot_management');
});
Route::get('/ot-schedule', function () {
    return view('backend.reception.ot_schedule');
});
Route::get('/opd-patients', function () {
    return view('backend.reception.opd_patients');
});
Route::get('/ipd-patients', function () {
    return view('backend.reception.ipd_patients');
});
Route::get('/deluxe-ward', function () {
    return view('backend.reception.deluxe_ward');
});
Route::get('/atd', function () {
    return view('backend.reception.atd');
});
Route::get('/ward', function () {
    return view('backend.reception.ward');
});
Route::get('/add-ward', function () {
    return view('backend.reception.add_ward');
});
Route::get('/add-bed', function () {
    return view('backend.reception.add_bed');
});
Route::get('/bed-list', function () {
    return view('backend.reception.bed_list');
});
Route::get('/bed-assign', function () {
    return view('backend.reception.bed_assign');
});
Route::get('/bed-assign-list', function () {
    return view('backend.reception.bed_assign_list');
});
Route::get('/out-patient-invoice', function () {
    return view('backend.reception.out_patient_invoice');
});
Route::get('/out-patient-receipt', function () {
    return view('backend.reception.out_patient_receipt');
});
Route::get('/inpatients-advance', function () {
    return view('backend.reception.inpatients_advance');
});
Route::get('/in-patient-case-memo', function () {
    return view('backend.reception.inpatient_case_memo');
});
Route::get('/add-ipd-advance', function () {
    return view('backend.reception.add_ipd_advance');
});
Route::get('/3c-report', function () {
    return view('backend.reception.3c_report');
});
Route::get('/ipd-report', function () {
    return view('backend.reception.ipd_report');
});
Route::get('/collection-report', function () {
    return view('backend.reception.collection_report');
});
Route::get('/daily-collection', function () {
    return view('backend.reception.daily_collection');
});
Route::get('/billing-overall-report', function () {
    return view('backend.reception.billing_overall_report');
});
Route::get('/master-date', function () {
    return view('backend.reception.master_date');
});
//e-reception

Route::get('/ipd-reception', function () {
    return view('backend.ipd-reception.ipd-list');
});

Route::get('/staff-login', function () {
    return view('backend.staff-login.dashboard');
});

Route::get('/telecaller/view-appointment', function () {
    return view('backend.telecaller.view_appointment');
});
//e-telecaller

Route::get('/dr-panel-2', function () {
    return view('backend.telecaller.telecaller');
});

require __DIR__ . '/admin.php';
require __DIR__ . '/telecaller.php';
require __DIR__ . '/reception.php';
require __DIR__ . '/doctor.php';