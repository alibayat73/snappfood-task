<?php

namespace App\Http\Controllers;

use App\Http\Requests\DelayReportRequest;
use App\Models\Order;

class DelayReportController extends Controller
{
    public function store(DelayReportRequest $request, Order $order)
    {
        $trip = $order->trip()->first();
        if ($trip && $trip->isNotDeliveredYet()) {
            //New Estimation
        } else {
            //Delay Queue
        }

        $reviewed_delay_report = $order->delayReports()
            ->whereNotNull('reviewed_at')
            ->first();
        if ($reviewed_delay_report) {
            $order->delayReports()->create();
            return response('Delay has been submitted!');
        } else {
            return response('Unreviewed delay report can not be submitted again.');
        }

    }
}
