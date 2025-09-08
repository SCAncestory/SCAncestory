<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Peerage;
use App\Models\RegaliaType;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // load in the list of peerages and regalia types
        Peerage::factory()->create([
            'peerage' => 'Laurel',
        ]);
        Peerage::factory()->create([
            'peerage' => 'Pelican',
        ]);
        Peerage::factory()->create([
            'peerage' => 'Chivalry',
        ]);
        Peerage::factory()->create([
            'peerage' => 'Defense',
        ]);
        Peerage::factory()->create([
            'peerage' => 'Mark',
        ]);

        RegaliaType::factory()->create([
            'type' => 'Belt',
        ]);
        RegaliaType::factory()->create([
            'type' => 'Medalian',
        ]);
        RegaliaType::factory()->create([
            'type' => 'Chain',
        ]);
        RegaliaType::factory()->create([
            'type' => 'Spurs',
        ]);
        RegaliaType::factory()->create([
            'type' => 'Collar',
        ]);
        RegaliaType::factory()->create([
            'type' => 'Bracers',
        ]);
    }
}
