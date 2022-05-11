<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Livewire\Admin\School\SchoolCompoent;
use App\Http\Livewire\Adpin\DashboardComponent;

Route::middleware(['auth',('admin')])->group(function(){
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::get('/school/management',[DashboardController::class,'school'])->name('school');
});
