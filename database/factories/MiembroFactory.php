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
        return [
            'nombre_apellido' => Str::random(10),
            'direccion' => Str::random(10),
            'telefono' => random_int(7000000000, 7999999999),
            'fecha_nacimiento' => '2000-12-12',
            'genero' => 'masculino',
            'email' => Str::random(10).'@gmail.com',
            'estado' => '1',
            'ministerio' => 'pastoral',
            'fotografia' => 'milton.jpg',
            'fecha_ingreso' => '2024-5-28'
        ];
    }
}
