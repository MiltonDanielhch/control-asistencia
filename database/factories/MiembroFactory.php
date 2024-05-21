<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Miembro>
 */
class MiembroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = $this->faker->randomElement(['MASCULINO', 'FEMENINO']);
        return [
            'nombre_apellido' => fake()->name,
            'direccion' => fake()->address,
            'telefono' => random_int(7000000000, 7999999999),
            'fecha_nacimiento' => fake()->date($format='Y-m-d', $max='now'),
            'genero' => $gender,
            'email' => fake()->unique()->safeEmail(),
            'estado' => '1',
            'ministerio' => 'pastoral',
            'fotografia' => 'milton.jpg',
            'fecha_ingreso' => '2024-5-28'
        ];
    }
}
