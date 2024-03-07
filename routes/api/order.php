<?php

use App\Http\Controllers\DelayReportController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])
    ->post('/{order}/delay-report', [DelayReportController::class, 'store']);
