<?php

use Illuminate\Support\Facades\Route;


Route:: redirect('/', 'dashboard');

Route::get('/dashboard', function () {
    if (auth()->user()->is_admin){
        return redirect()->route('admin.dashboard');
    }
    if (auth()->user()->is_employee){
        return redirect()->route('employee.dashboard');
    }
    if (auth()->user()->is_client){
        return redirect()->route('client.dashboard');
    }
    if (auth()->user()->is_supplier){
        return redirect()->route('supplier.dashboard');
    } else {
        abort(403, 'You must be authenticated to access this page. Please Contact your Admin for help.');
    }
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', ])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

    //  Admin Routes
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', ])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('admin.dashboard');
});


    //  Employee Routes
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', ])->prefix('employee')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('employee.dashboard');
});


    //  Client Routes
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', ])->prefix('client')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('client.dashboard');
});


    //  Employee Routes
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', ])->prefix('supplier')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('supplier.dashboard');
});
