<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\models\Tag;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TagFactory extends Factory
{
    /**
     * Retorna el modelo correspondiente de la base de datos.
     *
     * @return \App\Models\Tag
     */
    protected $model = Tag::class;

     /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->unique()->word(20);
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'color' => $this->faker->randomElement(['red', 'blue', 'green', 'yellow', 'orange', 'purple', 'pink', 'grey']),
            
        ];
    }
}
