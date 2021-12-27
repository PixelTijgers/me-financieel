<?php

// Namespacing.
namespace Database\Seeders;

// Facades.
use Illuminate\Database\Seeder;

// Import models.
use App\Models\Loan;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loans = [
            [
                'name' => 'Auto',
                'lender' => 'R.A. Elshout',
                'amount' => 2000,
            ],
            [
                'name' => 'Hypotheek Huis',
                'lender' => 'R.A. Elshout',
                'amount' => 5000
            ],
        ];

        foreach($loans as $loan)
            Loan::create($loan);
    }
}
