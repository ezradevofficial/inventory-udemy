<?php

namespace Database\Factories;

use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;

class UnitFactory extends Factory
{
    protected $model = Unit::class;

    public $units = [
        // Count units
        'Piece',
        'Pair',
        'Dozen',
        'Set',
        'Pack',
        'Box',
        'Carton',
        'Bundle',

        // Length units
        'Meter',
        'Centimeter',
        'Inch',
        'Foot',
        'Yard',

        // Area units
        'Square Meter',
        'Square Foot',

        // Volume units
        'Liter',
        'Milliliter',
        'Gallon',
        'Cubic Meter',
        'Cubic Foot',

        // Weight units
        'Kilogram',
        'Gram',
        'Pound',
        'Ounce',
        'Ton',

        // Time units (for services or rentals)
        'Hour',
        'Day',
        'Week',
        'Month',

        // Electrical units
        'Watt',
        'Kilowatt',
        'Volt',
        'Ampere',

        // Pressure units
        'PSI',
        'Bar',

        // Temperature units
        'Degree Celsius',
        'Degree Fahrenheit',

        // Specific units for construction materials
        'Bag',
        'Sheet',
        'Roll',
        'Bucket',

        // Specific units for fasteners
        'Gross',
        'Thousand Pieces',

        // Specific units for paint
        'Quart',
        'Pint',

        // Specific units for timber
        'Board Foot',

        // Generic units
        'Unit',
        'Item'
    ];

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->randomElement($this->units),
            'status' => $this->faker->randomElement([0, 1]),
            'created_by' => $this->faker->numberBetween(1, 5),
            'updated_by' => $this->faker->numberBetween(1, 5),
            'created_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
        ];
    }
}