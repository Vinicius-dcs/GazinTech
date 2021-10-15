<?php

namespace Database\Factories;

use App\Models\Desenvolvedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class DesenvolvedorFactory extends Factory
{
    protected $model = Desenvolvedor::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'sexo' => $this->faker->randomElement($array = ['M', 'F']),
            'idade' => $this->faker->biasedNumberBetween($min = 18, $max = 50),
            'hobby' => $this->faker->text($maxNbChars = 40),
            'dataNascimento' => $this->faker->date()
        ];
    }
}