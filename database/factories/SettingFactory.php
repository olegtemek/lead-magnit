<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'number' => '+7 708 986 76 27',
            'number_whatsapp' => '+7 708 986 76 27',
            'address' => 'Казахстан, г. Алматы,<br> 
            ул. Ади-шарипова 92,офис 35',
            'map' => 'https://goo.gl/maps/ztE4UgwDW4Xi8Dt87'
        ];
    }
}
