<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/signup', function(){
    return view('signup');
});

Route::controller(LoginController::class)->group(function(){
    Route::get('/login','index')->name('login');
    Route::post('/register','store');
    Route::post('/login', 'authenticate');
    Route::get('/logout','logout');
});

Route::middleware(['auth'])->prefix('admin')->group(function(){
    Route::get('/home', [AdminController::class, 'adminHome']);
    
    Route::get('/new-order', [AdminController::class, 'adminNewOrder']);

    Route::get('/new-order-people', [AdminController::class, 'adminNewOrderPeople']);

    Route::get('/new-order-object', [AdminController::class, 'adminNewOrderObject']);
    
    Route::get('/monitoring', [AdminController::class, 'adminMonitoring']);
    
    Route::get('/new-vehicle', [AdminController::class, 'adminNewVehicle']);
    
    Route::get('/new-driver', [AdminController::class, 'adminNewDriver']);
    
    Route::get('/list-driver', [AdminController::class, 'adminListDriver']);
    
    Route::get('/list-approver', [AdminController::class, 'adminListApprover']);

    Route::get('/list-vehicle', [AdminController::class, 'adminListVehicle']);
});

Route::middleware(['auth'])->prefix('user')->group(function(){
    Route::get('/monitoring', [UserController::class, 'userMonitoring']);
    
    Route::get('/manajemen', [UserController::class, 'userManajemen']);
});