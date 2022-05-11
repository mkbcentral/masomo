<?php

use App\Http\Controllers\DashboardController;
use App\Http\Livewire\Admin\School\SchoolCompoent;
use App\Http\Livewire\Adpin\DashboardComponent;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth'])->group(function(){
    Route::get('admin/dashboard',[DashboardController::class,'dashboard'])->name('admin.dashboard');
    Route::get('admin/school/management',[DashboardController::class,'school'])->name('admin.school');
});
