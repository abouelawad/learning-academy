<?php

namespace Database\Seeders;

use App\Models\Trainer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trainer::factory(3)->create();
        // Trainer::Create([
        //     'name' => 'kareem',
        //     'specialty' => 'instructor',
        //     'phone' => '02565458',
        //     'email' => 'a@a.com',
        //     'image' => '1.png',
        // ]);
        // Trainer::Create([
        //     'name' => 'Sayed',
        //     'specialty' => 'gamer',
        //     'phone' => '0254545458',
        //     'email' => 'b@a.com',
        //     'image' => '2.png',
        // ]);
        // Trainer::Create([
        //     'name' => 'Fahmy',
        //     'specialty' => 'player',
        //     'phone' => '025475464',
        //     'email' => 'c@a.com',
        //     'image' => '3.png',
        // ]);
        // Trainer::Create([
        //     'name' => 'Omar',
        //     'specialty' => 'stroller',
        //     'phone' => '025468564',
        //     'email' => 'd@a.com',
        //     'image' => '4.png',
        // ]);
        // Trainer::Create([
        //     'name' => 'Hussein',
        //     'specialty' => 'dental',
        //     'phone' => '02545664',
        //     'email' => 'e@a.com',
        //     'image' => '5.png',
        // ]);
    }
}
