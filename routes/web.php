<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\registrationController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Login
Route::get('/login/index', [LoginController::class,'index'])->name('login.index');
Route::post('/login/index', [LoginController::class,'valid']);

//Logout
Route::get('/logout', [LogoutController::class,'index'])->name('logout.index');

//Registration
Route::get('/registration', [registrationController::class,'index']) -> name('registration');
Route::post('/registration', [registrationController::class,'signup']) -> name('postregistration');




Route::group(['middleware'=>['sess']], function(){


//Doctor Route Start

Route::get('/doctor/index', [DoctorController::class,'index'])->name('doctor.index');

//Patient
Route::get('/doctor/Patient', [DoctorController::class,'addpatient'])->name('doctor.addpatient');
Route::post('/doctor/Patient', [DoctorController::class,'patientCreate']);

Route::get('/doctor/PatientList', [DoctorController::class,'patientlist'])->name('doctor.patientlist');

//Route::get('/search','SearchController@search')->name('search');

Route::get('/doctor/EditPatient/{sid}', [DoctorController::class,'editpact'])->name('doctor.editpatient');
Route::post('/doctor/EditPatient/{sid}', [DoctorController::class,'editPatient']);

Route::get('/doctor/PatientDelete/{sid}', [DoctorController::class,'deletepatient'])->name('doctor.deletepatient');
Route::post('/doctor/PatientDelete/{sid}', [DoctorController::class,'destroypatient']);

//Appoint
Route::get('/doctor/AppointList', [DoctorController::class,'viewappoint'])->name('doctor.viewappoint');

//Profile
Route::get('/doctor/Profile', [DoctorController::class,'profile'])->name('doctor.profile');
Route::post('/doctor/Profile', [DoctorController::class,'editProfile']);

//Change Password
Route::get('/doctor/ChangePassword', [DoctorController::class,'cngpassword'])->name('doctor.cngpassword');
Route::post('/doctor/ChangePassword', [DoctorController::class,'Password']);

//NoticeBoard
Route::get('/doctor/NoticeboardList', [DoctorController::class,'noticelist'])->name('doctor.noticelist');

//Blood
Route::get('/doctor/Blood', [DoctorController::class,'addblood'])->name('doctor.addblood');
Route::post('/doctor/Blood', [DoctorController::class,'bloodlistCreate']);

Route::get('/doctor/BloodList', [DoctorController::class,'bloodlist'])->name('doctor.bloodlist');

Route::get('/doctor/bloodDelete/{sid}', [DoctorController::class,'deleteblood'])->name('doctor.deleteblood');
Route::post('/doctor/bloodDelete/{sid}', [DoctorController::class,'destroyblood']);



//Prescription
Route::get('/doctor/Prescription', [DoctorController::class,'addprescription'])->name('doctor.addprescription');
Route::post('/doctor/Prescription', [DoctorController::class,'prescriptionCreate']);

Route::get('/doctor/PrescriptionList', [DoctorController::class,'prescriptionlist'])->name('doctor.prescriptionlist');

Route::get('/doctor/EditPrescription/{sid}', [DoctorController::class,'editprescription'])->name('doctor.editprescription');
Route::post('/doctor/EditPrescription/{sid}', [DoctorController::class,'editPrescrip']);

Route::get('/doctor/PrescriptionDelete/{sid}', [DoctorController::class,'deleteprescription'])->name('doctor.deleteprescription');
Route::post('/doctor/PrescriptionDelete/{sid}', [DoctorController::class,'destroyprescription']);

//Bed Allotment
Route::get('/doctor/BedAllotment', [DoctorController::class,'addbed'])->name('doctor.addbed');
Route::post('/doctor/BedAllotment', [DoctorController::class,'bedCreate']);

Route::get('/doctor/BedAllotmentList', [DoctorController::class,'bedlist'])->name('doctor.bedlist');

Route::get('/doctor/EditBedAllotment/{sid}', [DoctorController::class,'editbed'])->name('doctor.editbed');
Route::post('/doctor/EditBedAllotment/{sid}', [DoctorController::class,'editBedAllot']);

Route::get('/doctor/BedAllotmentDelete/{sid}', [DoctorController::class,'deletebed'])->name('doctor.deletebed');
Route::post('/doctor/BedAllotmentDelete/{sid}', [DoctorController::class,'destroybed']);

//Operation Report
Route::get('/doctor/OperationReport', [DoctorController::class,'addoperation'])->name('doctor.addoperation');
Route::post('/doctor/OperationReport', [DoctorController::class,'operationCreate']);

Route::get('/doctor/OperationReportList', [DoctorController::class,'operationlist'])->name('doctor.operationlist');

Route::get('/doctor/EditOperationReport/{sid}', [DoctorController::class,'editoperation'])->name('doctor.editoperation');
Route::post('/doctor/EditOperationReport/{sid}', [DoctorController::class,'editReport']);

Route::get('/doctor/OperationReportDelete/{sid}', [DoctorController::class,'deleteoperation'])->name('doctor.deleteoperation');
Route::post('/doctor/OperationReportDelete/{sid}', [DoctorController::class,'destroyoperation']);

//Doctor Route Ends



Route::get('/invoice/{sid}', [DoctorController::class,'generateInvoice'])->name('order.invoice');


});
