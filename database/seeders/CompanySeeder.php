<?php

// Namespacing.
namespace Database\Seeders;

// Facades.
use Illuminate\Database\Seeder;

// Import models.
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [
            [
                'name' => 'Amazon Eu Sarl',
                'type' => 'subscription',
            ],
            [
                'name' => 'ASN Bank',
                'type' => 'subscription',
            ],
            [
                'name' => 'Belastingdienst',
                'type' => 'tax',
            ],
            [
                'name' => 'CZ Groep Zorgverzekeraar',
                'type' => 'insurance',
            ],
            [
                'name' => 'Dela Natura- en Levensverzekering',
                'type' => 'insurance',
            ],
            [
                'name' => 'Evides Waterbedrijf',
                'type' => 'water',
            ],
            [
                'name' => 'Greenchoice',
                'type' => 'energy',
            ],
            [
                'name' => 'KPN Mobiel',
                'type' => 'subscription',
            ],
            [
                'name' => 'KPN Thuis',
                'type' => 'internet',
            ],
            [
                'name' => 'NLziet Door Buckaroo',
                'type' => 'subscription',
            ],
            [
                'name' => 'Spotify',
                'type' => 'subscription',
            ],
            [
                'name' => 'Stichting Hypotheken Incasso',
                'type' => 'mortgage',
            ],
            [
                'name' => 'Zlm Verzekeringen',
                'type' => 'insurance',
            ],
        ];

        foreach($companies as $company)
            Company::create($company);
    }
}
