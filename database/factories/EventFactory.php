<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $width=640;
        $height=800;
        $path=$this->faker->image('storage/images', $width,$height, 'sport',true,true,'sport',false);
        return [
            //
            'nom' => $this->faker->faker->sentence(),
            'description' => $this->faker->faker->words(2,true),
            'lieu' => $this->faker->state(),            
            'poster' => $path,//$this->faker->imageUrl(360,360,true)
            'dateDebut' => $this->faker->date(),
            'datefin' => $this->faker->date(),
        ];
    }
}
