<?php

use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\LoanApplicationController;
use App\Http\Controllers\LoanApprovalController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Homecontroller;
// use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ContactController;


Route::get('/',[Homecontroller::class,'checkUserType']);
Route::get('/admin', function () {
    return view('dashboard.index');
})->name('admin.dashboard');
Route::get('/user', function () {
    return view('elms_index');
})->name('user.dashboard');
Route::get('/elms_index', function () {
    return view('elms_index');
});
Route::get('/form',[EmployeesController::class,'checkUserType'])->name('form.view');
// Route::get('/form',function(){
//     return view('form');
// })->name('form.view');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// crud
Route::prefix('employees')->group(function(){
Route::post('/store_camplain',[ContactController::class,'store'])->name('store_complain');
// Route::get('/store',[EmployeeController::class,'store'])->name('store_employee');


});


// Route::get('/', function () {
//     return view('dashboard.index');
// });

    Route::prefix('employees')->group(function(){
    Route::get('/data',[EmployeesController::class,'show'])->name('employees');
    Route::get('/add',[EmployeesController::class,'form'])->name('add');
    Route::get('/store',[EmployeesController::class,'store'])->name('store');
    Route::get('/delete/{id?}',[EmployeesController::class,'delete'])->name('delete');
    Route::get('/edit/{id}',[EmployeesController::class,'edit'])->name('edit');
    Route::get('/update',[EmployeesController::class,'update'])->name('update');

    

});

Route::prefix('Loan_application')->group(function(){
Route::get('/application',[LoanApplicationController::class,'show'])->name('application');
Route::get('/add1',[LoanApplicationController::class,'form'])->name('add1');
Route::get('/store1',[LoanApplicationController::class,'store'])->name('store1');
Route::get('/store1_for_user',[LoanApplicationController::class,'store1_for_user'])->name('store1_for_user');
Route::get('/delete1/{id?}',[LoanApplicationController::class,'destroy'])->name('delete');
Route::get('/edit1/{id}',[LoanApplicationController::class,'edit'])->name('edit1');
Route::get('/update1',[LoanApplicationController::class,'update'])->name('update');


});
Route::prefix('LoanApprovalController')->group(function(){
    Route::get('/application1',[LoanApprovalController::class,'show'])->name('application1');
    Route::get('/add2',[LoanApprovalController::class,'form'])->name('add2');
    Route::get('/store2',[LoanApprovalController::class,'store'])->name('store2');
    Route::get('/delete2/{id?}',[LoanApprovalController::class,'destroy'])->name('delete');
    Route::get('/edit2/{id}',[LoanApprovalController::class,'edit'])->name('edit');
    Route::get('/update2',[LoanApprovalController::class,'update'])->name('update2');
    
    
});

Route::prefix('contact')->group(function(){
Route::get('/application',[ContactController::class,'show'])->name('application3');
Route::get('/add1',[ContactController::class,'form'])->name('add3');
Route::get('/store1',[ContactController::class,'store'])->name('store3');
Route::get('/store1_for_user',[ContactController::class,'store_for_admin'])->name('store_for_admin');
Route::get('/delete1/{id?}',[ContactController::class,'destroy'])->name('delete');
Route::get('/edit1/{id}',[ContactController::class,'edit'])->name('edit3');
Route::get('/update1',[ContactController::class,'update'])->name('update3');


});