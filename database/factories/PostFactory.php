<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\models\Post;
use app\models\Categoria;
use app\models\User;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
   
    /**
     * Retorna el modelo correspondiente de la base de datos.
     *
     * @return \App\Models\Post
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence();
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'extract' => $this->faker->text(250),
            'body' => $this->faker->text(1000),
            'status' => $this->faker->randomElement(['1', '2']),
            'category_id' => Categoria::all()->random()->id,
            'user_id' => User::all()->random()->id,
        ];
    }
}
