<?php

namespace Database\Factories;

use App\Models\TableList;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TableList>
 */
class TableListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'style' => '(' . rand(1, 255) . ',' . rand(1, 255) . ',' . rand(1, 255) . ')',
            'text' => $this->faker->company(),
            'parent_id'  => function () {
                echo TableList::get()->count() . "\n";
                if (TableList::get()->count() > 0 and rand(0, 1)) {
                    return TableList::inRandomOrder()->first()->id;
                } else {
                    return 0;
                }
            },
        ];
    }
}
