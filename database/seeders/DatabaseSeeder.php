<?php

// Namespacing.
namespace Database\Seeders;

// Facades.
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Call Seeders.
        $this->call([

            AccountSeeder::class,
            CompanySeeder::class,
            LoanSeeder::class,

        ]);

        // Only run factories on local or staging env.
        if (\App::environment(['local', 'staging'])) {

            // Call factories.
            \App\Models\CreditcardExpenses::factory()->count(50)->create();
            \App\Models\Deposit::factory()->count(10)->create();
            \App\Models\Expenses::factory()->count(20)->create();
            \App\Models\LoanPayment::factory()->count(30)->create();
        }
    }
}
