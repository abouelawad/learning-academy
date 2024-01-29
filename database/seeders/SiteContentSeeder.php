<?php

namespace Database\Seeders;

use App\Models\SiteContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        SiteContent::create(
            ['name' => 'banner',
             'content'=> json_encode([
                'title'=> 'Every Student yearns to learn',
                'subtitle'=> 'new information about the learning process',
                'description'=> fake()->words(20, true) , 
             ]),           
            ]
        );
    }
}


