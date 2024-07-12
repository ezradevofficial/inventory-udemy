<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Supplier;
use App\Models\Unit;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    protected $products = [
        'Hand Tools' => [
            'Claw Hammer',
            'Screwdriver Set',
            'Pliers',
            'Adjustable Wrench',
            'Chisel Set',
            'Utility Knife',
            'Hacksaw',
            'Level',
            'Tape Measure',
            'Allen Key Set'
        ],
        'Power Tools' => [
            'Electric Drill',
            'Circular Saw',
            'Angle Grinder',
            'Jigsaw',
            'Sanders',
            'Router',
            'Heat Gun',
            'Nail Gun',
            'Bench Grinder',
            'Rotary Tool'
        ],
        'Electrical Supplies' => [
            'Electrical Wire',
            'Circuit Breakers',
            'Light Switches',
            'Electrical Outlets',
            'Extension Cords',
            'Wire Connectors',
            'Electrical Tape',
            'Multimeter',
            'Cable Ties',
            'Junction Boxes'
        ],
        'Plumbing' => [
            'PVC Pipes',
            'Pipe Fittings',
            'Plunger',
            'Pipe Wrench',
            'Plumber\'s Tape',
            'Drain Snake',
            'Toilet Repair Kit',
            'Faucet',
            'Shower Head',
            'Water Heater'
        ],
        'Building Materials' => [
            'Cement',
            'Sand',
            'Gravel',
            'Bricks',
            'Timber',
            'Rebar',
            'Plywood',
            'Drywall',
            'Roofing Sheets',
            'Tiles'
        ],
        'Paints & Finishes' => [
            'Wall Paint',
            'Primer',
            'Paint Brushes',
            'Paint Rollers',
            'Paint Trays',
            'Sandpaper',
            'Wood Stain',
            'Varnish',
            'Paint Thinner',
            'Masking Tape'
        ],
        'Fasteners & Hardware' => [
            'Nails',
            'Screws',
            'Bolts',
            'Nuts',
            'Washers',
            'Anchors',
            'Hooks',
            'Hinges',
            'Door Locks',
            'Cabinet Handles'
        ],
        'Lighting' => [
            'Light Bulbs',
            'Ceiling Lights',
            'Wall Sconces',
            'Floodlights',
            'LED Strips',
            'Desk Lamps',
            'Chandeliers',
            'Outdoor Lights',
            'Light Fixtures',
            'Solar Lights'
        ],
        'Garden & Outdoor' => [
            'Garden Hose',
            'Shovel',
            'Rake',
            'Wheelbarrow',
            'Pruning Shears',
            'Lawn Mower',
            'Watering Can',
            'Garden Gloves',
            'Plant Pots',
            'Fertilizer'
        ],
        'Safety Equipment' => [
            'Safety Glasses',
            'Work Gloves',
            'Dust Masks',
            'Hard Hats',
            'Safety Vests',
            'Ear Plugs',
            'First Aid Kit',
            'Fire Extinguisher',
            'Safety Harness',
            'Steel Toe Boots'
        ],
        // Add more categories and products as needed
    ];

    protected $defaultProducts = [
        'Generic Product 1',
        'Generic Product 2',
        'Generic Product 3',
        'Generic Product 4',
        'Generic Product 5',
        'Generic Product 6',
        'Generic Product 7',
        'Generic Product 8',
        'Generic Product 9',
        'Generic Product 10'
    ];

    public function definition()
    {
        $category = Category::inRandomOrder()->first();
        $productName = $this->faker->randomElement($this->products[$category->name] ?? $this->defaultProducts);

        return [
            'name' => $productName,
            'supplier_id' => Supplier::inRandomOrder()->first()->id,
            'unit_id' => Unit::inRandomOrder()->first()->id,
            'category_id' => $category->id,
            'quantity' => $this->faker->numberBetween(0, 1000),
            'status' => $this->faker->randomElement([0, 1]),
            'created_by' => $this->faker->numberBetween(1, 5),
            'updated_by' => $this->faker->numberBetween(1, 5),
            'created_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
        ];
    }
}