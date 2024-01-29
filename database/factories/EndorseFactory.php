<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Endorse>
 */
class EndorseFactory extends Factory
{
    // public $dir = public_path('uploads/endorse/');
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake()->name(),
            'major'=> fake()->jobTitle(),
            'description' => fake()->words(7,true),
            'image' => fake()->image("public_path('uploads/endorse/')" , 380, 250, 'person', true),
        ];
    }

    public function path(){

        $path = public_path('uploads/endorse/');
    
        $scanned_directory = array_diff(scandir($path), array('..', '.'));
    
        return ($scanned_directory);
      }
    
      public function randomImage(){
        $rand_value = array_rand($this->path());
    
        return $this->path()[$rand_value];
      }
}



