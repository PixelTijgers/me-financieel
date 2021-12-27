<?php

// Namespacing.
namespace Database\Seeders;

// Facades.
use Illuminate\Database\Seeder;

// Import models.
use App\Models\Account;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accounts = [
            [
                'name' => 'Betaalrekening',
                'bank_account' => 'NL94 ASNB 0785 8406 05',
            ],
            [
                'name' => 'Gedeelde Rekening',
                'bank_account' => 'NL69 ASNB 0267 4888 66',
            ],
        ];

        foreach($accounts as $account)
            Account::create($account);
    }
}
