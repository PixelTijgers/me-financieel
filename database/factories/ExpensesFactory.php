<?php

// Factory namespacing.
namespace Database\Factories;

// Facades.
use Illuminate\Database\Eloquent\Factories\Factory;

// Models.
use App\Models\Expenses;

class ExpensesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Expenses::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'account_id'    => \Arr::random([1,2]),
            'company_id'    => \Arr::random([1,2]),
            'cost'          => $this->faker->randomFloat(2, 1, 500),
            'type'          => $this->faker->randomElement(
                [
                    'fixed',
                    'variable'
                ])
        ];
    }
}
