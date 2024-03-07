<?php

namespace Database\Seeders;

use App\Enums\TripStatus;
use App\Models\Order;
use App\Models\Trip;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trip::factory()
            ->count(4)
            ->state(new Sequence(
                ['status' => TripStatus::ASSIGNED],
                ['status' => TripStatus::AT_VENDOR],
                ['status' => TripStatus::PICKED],
                ['status' => TripStatus::DELIVERED],
            ))
            ->create();
    }
}
