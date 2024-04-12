<?php

namespace Database\Factories;
use App\Models\Alumno;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'primerNombre' => $this->faker->firstName,
            'segundoNombre' => $this->faker->optional()->firstName,
            'primerApellido' => $this->faker->lastName,
            'segundoApellido' => $this->faker->lastName,
            'correo' => $this->faker->unique()->email,
            'noCuenta' => $this->faker->unique()->numerify('#######'), // Garantiza un número de cuenta único y de 7 dígitos
            'estado' =>$this->faker->randomElement([0, 1]), // Genera un estado aleatorio
            'fecha_registro' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d\TH:i'), // Genera una fecha de registro dentro del último año
        ];
    }
}
