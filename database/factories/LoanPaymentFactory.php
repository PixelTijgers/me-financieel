<?php

// Factory namespacing.
namespace Database\Factories;

// Facades.
use Illuminate\Database\Eloquent\Factories\Factory;

// Models.
use App\Models\LoanPayment;

class LoanPaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LoanPayment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'loan_id'       => \Arr::random([1,2]),
            'cost'          => $this->faker->randomFloat(2, 1, 500),
        ];
    }
}
