<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicationController;



Route::get('/medications', [MedicationController::class, 'index']);
Route::post('/medications', [MedicationController::class, 'store']);
Route::put('/medications/{id}', [MedicationController::class, 'update']);
Route::delete('/medications/{id}', [MedicationController::class, 'destroy']);
