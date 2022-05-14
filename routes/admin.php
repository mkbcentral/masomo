<?php

use App\Http\Livewire\Admin\Dashboard\UserCounterComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\School\SchoolComponent;

Route::middleware(['auth',('admin')])->group(function(){
    Route::get('/dashboard',UserCounterComponent::class)->name('dashboard');
    Route::get('/school/management',SchoolComponent::class)->name('school');
});
