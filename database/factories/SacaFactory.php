<?php

namespace Database\Factories;

use App\Models\Saca;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SacaFactory extends Factory
{
    protected $model = Saca::class;

    public function definition()
    {
        return [
			'ejemplar_id' => $this->faker->name,
			'usuario_id' => $this->faker->name,
			'fecha_devolucion' => $this->faker->name,
			'fecha_prestamo' => $this->faker->name,
        ];
    }
}
