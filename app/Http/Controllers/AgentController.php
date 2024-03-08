<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\DelayReport;
use Illuminate\Database\Eloquent\Builder;

class AgentController extends Controller
{
    /**
     * This method assigns a delay report to a free agent.
     *
     * @throws \Throwable
     */
    public function assignDelayReport()
    {
        $oldest_unreviewed_without_agent_delay_report = DelayReport::query()
            ->oldest()
            ->unreviewed()
            ->withoutAgent()
            ->first();

        $free_agent = Agent::query()->inRandomOrder() //If we had authentication for agents, this part would be something like auth()->user
            ->whereDoesntHave('delayReports', fn(Builder $query) => $query->unreviewed())
            ->first();

        $oldest_unreviewed_without_agent_delay_report->update(['agent_id' => $free_agent->id]);

        return response([
            'data' => null,
            'message' => 'An unreviewed delay report has been assigned to you successfully.',
        ]);
    }
}
