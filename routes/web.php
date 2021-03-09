<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::get('/reservation', [\App\Http\Controllers\ReservationFormController::class, 'show'])->name('contact.form');

Route::post('/reservation', [\App\Http\Controllers\ReservationFormController::class, 'send'])->name('contact.send');

Route::get('/confirmation/{token}', [\App\Http\Controllers\ConfirmationController::class, 'show'])->name('confirmation');

Route::get('/reservation/annulation/{token}', [\App\Http\Controllers\AnnulationController::class, 'delete'])->name('annulation_token');

Route::post('/annulation/{token}', [\App\Http\Controllers\AnnulationController::class, 'annulation'])->name('annulation');


