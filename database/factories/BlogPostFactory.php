<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->fake->sentence,
            'body'=>$this->fake->paragraph(30),
            'user_id'=> User ::factory()
        ];
    }
}
