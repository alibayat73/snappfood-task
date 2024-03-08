<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\DelayReportController;
use Illuminate\Support\Facades\Route;

//User APIs
Route::middleware(['auth:sanctum'])
    ->post('/{order}/delay-report', [DelayReportController::class, 'store']);

//Agent APIs
Route::get('assign-delay-report', [AgentController::class, 'assignDelayReport']);
