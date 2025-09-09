<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Peerage;
use App\Models\Regaliatype;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

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

        Regaliatype::factory()->create([
            'type' => 'Belt',
        ]);
        Regaliatype::factory()->create([
            'type' => 'Medalion',
        ]);
        Regaliatype::factory()->create([
            'type' => 'Chain',
        ]);
        Regaliatype::factory()->create([
            'type' => 'Spurs',
        ]);
        Regaliatype::factory()->create([
            'type' => 'Collar',
        ]);
        Regaliatype::factory()->create([
            'type' => 'Bracers',
        ]);
    }
}
