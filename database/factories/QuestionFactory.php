<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'question' => 'Внедрение стоит недешево?',
            'answer' => 'Стоимость на внедрение CRM системы у нас начинается от N-го кол-ва тг и цена меняется в зависимости от необходимых вам изменений.'
        ];
    }
}
