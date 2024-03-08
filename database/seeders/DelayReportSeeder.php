<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Agent;
use App\Models\DelayReport;
use Illuminate\Database\Seeder;

class DelayReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DelayReport::factory()
            ->count(3)
            ->sequence(
                ['agent_id' => null, 'reviewed_at' => null, 'created_at' => now()],
                ['agent_id' => Agent::query()->latest('id')->first()->id, 'reviewed_at' => null, 'created_at' => now()->subDay()],
                ['agent_id' => Agent::query()->oldest('id')->first()->id, 'reviewed_at' => now()->addDay(), 'created_at' => now()->subDays(2)],
            )
            ->create();
    }
}
