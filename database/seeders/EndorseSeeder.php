<?php

namespace Database\Seeders;

use App\Models\Endorse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EndorseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Endorse::factory(8)->create();
    }
}
