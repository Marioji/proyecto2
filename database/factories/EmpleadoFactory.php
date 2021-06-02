<?php

namespace Database\Factories;

use App\Models\empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = empleado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $estudios =['Sin estudios',
            "ESO", "Bachillerato", "Grado Medio",
            "Grado Superior", "Universidad", "Master" , "Doctorado"];

        return [
            'dni'=>$this->faker->dni,
            'nombre'=>$this->faker->name,
            'apellidos'=>$this->faker->lastName,
            'direccion'=>$this->faker->address,
            'estudios'=>$this->faker->randomElement($estudios),
            //
        ];
    }
}
