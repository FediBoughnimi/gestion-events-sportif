<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AthleteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $width=200;
        $height=200;
        $path=$this->faker->image('storage/images', $width,$height, 'person',true,true,'person',false);
        return [
            //
            'nom' => $this->faker->faker->firstName(),
            'prenom' => $this->faker->faker->lastName(),
            'photo' => $path,//$this->faker->imageUrl(360,360,true)
        ];
    }
}
