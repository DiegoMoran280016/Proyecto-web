<?php

namespace Database\Factories;
use App\Models\Local;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Local>
 */
class LocalFactory extends Factory
{   
    protected $model = Local::class;
    
    /**
     * Define the model's default state.
     * @return array
     * @var string
     */
    

    public function definition(): array
    {
        return [
            'direccion' => $this -> faker->address,
            'universidad' => $this -> faker->sentence,
            'precio' => $this -> faker->randomFloat(2, 10, 100), // Genera un número decimal con 2 decimales entre 10 y 100
            'descripcion' => $this -> faker->paragraph,
            'telefono' => $this -> faker->phoneNumber,
            'correo' => $this -> faker->unique()->safeEmail
        ];
    }
}
