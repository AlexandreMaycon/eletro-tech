<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [FormController::class, 'index'])->name('index');
Route::get('/login', [FormController::class, 'login'])->name('login');
Route::post('/custom-login', [FormController::class, 'customLogin'])->name('login.custom'); 
Route::post('/custom-registration', [FormController::class, 'create'])->name('register.custom');
Route::get('/dashboard/{id}', [UserController::class, 'dashboard'])->name('dashboard');

Route::middleware('auth')->group(function(){
    Route::get('/signout', [FormController::class, 'signOut'])->name('signout');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::put('/edit/save/{id}', [UserController::class, 'update'])->name('edit.custom');
    Route::get('/feedback/{id}', [UserController::class, 'openFeedback'])->name('feedback');
    Route::post('/feedback/save', [UserController::class, 'storeFeedback'])->name('feedback.custom');
    Route::get('/plan/{id}', [PlanController::class, 'index'])->name('plan');
    Route::get('pagamento/{id}/{cod}', [PlanController::class, 'openPayment'])->name('payment');
    Route::post('/payment/save/{id}/{cod}', [PlanController::class, 'storePayment'])->name('payment.custom');
});

    