<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Incident;
use App\Http\Controllers\IncidentFormController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/', function () {
    return view('login');
});

Route::get('/incident-list', [IncidentFormController::class, 'index'])->name('incident.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {

    Route::get('/incident-form', [IncidentFormController::class, 'create'])
        ->name('incident.create');

    Route::post('/incident-form', [IncidentFormController::class, 'store'])
        ->name('incident.store');

    Route::get('/incident-list', [IncidentFormController::class, 'index'])
        ->name('incident.index');

    Route::get('/incident/{incident}/edit', [IncidentFormController::class, 'edit'])
        ->name('incident.edit');

    Route::put('/incident/{incident}', [IncidentFormController::class, 'update'])
        ->name('incident.update');

    Route::delete('/incident/{incident}', [IncidentFormController::class, 'destroy'])
        ->name('incident.destroy');
});


