<?php

use App\Http\Controllers\DelayReportController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])
    ->post('/{order}/delay-report', [DelayReportController::class, 'store']);

Route::get('assign-delay-report', [DelayReportController::class, 'assignDelayReport']);

Route::get('{vendor}/delay-report', [DelayReportController::class, 'vendorsDelayReport']);
