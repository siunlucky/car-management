<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RentCarController;
use App\Http\Controllers\ManageRentalController;

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

Route::get('/rent-car', [RentCarController::class, 'index'])->name('rent-car')->middleware('auth');
Route::get('/rent-car/{office:id}/select-car', [RentCarController::class, 'selectCar'])->middleware('auth');
Route::get('/rent-car/select-car/{car:id}/form-application', [RentCarController::class, 'formApplication'])->middleware('auth');
Route::post('/rent-car/select-car/form-application/store-application', [RentCarController::class, 'storeApplication'])->middleware('auth');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/authenticate', [LoginController::class, 'authenticate']);

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/manage-rental/all-rental', [ManageRentalController::class, 'allRental'])->middleware('auth');
Route::get('/manage-rental/cancelled-rental', [ManageRentalController::class, 'cancelledRental'])->middleware('auth');
Route::get('/manage-rental/completed-rental', [ManageRentalController::class, 'completedRental'])->middleware('auth');
Route::get('/manage-rental/rental-request', [ManageRentalController::class, 'rentalRequest'])->middleware('auth');
Route::get('/manage-rental/rental-detail/{rental:id}', [ManageRentalController::class, 'rentalDetail'])->middleware('auth');
Route::get('/manage-rental/active-rental', [ManageRentalController::class, 'activeRental'])->middleware('auth');
Route::get('/manage-rental/all-rental/export', [ManageRentalController::class, 'export'])->middleware('auth');

Route::get('/manage-rental/{rental:id}/approved', [ManageRentalController::class, 'approving'])->middleware('auth');
Route::get('/manage-rental/{rental:id}/declined', [ManageRentalController::class, 'declining'])->middleware('auth');
Route::get('/manage-rental/{rental:id}/completed', [ManageRentalController::class, 'completing'])->middleware('auth');



Route::get('/history', [ManageRentalController::class, 'history'])->name('history')->middleware('auth');
Route::get('/dashboard', [ManageRentalController::class, 'dashboard'])->name('dashboard')->middleware('auth');
