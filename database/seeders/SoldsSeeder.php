<?php

namespace Database\Seeders;

use App\Models\Solde;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $soldes = [
            [
                "companyName" => "Sofamel",
                "solde" => 1004780,
            ],
            [
                "companyName" => "Bitmar",
                "solde" => 100000,
            ],
            [
                "companyName" => "Lux Lighting",
                "solde" => 100700,
            ],
            [
                "companyName" => "Marcont",
                "solde" => 190000,
            ],
            [
                "companyName" => "Madin Technologies",
                "solde" => 1000770,
            ],
            [
                "companyName" => "Madin Immobilier",
                "solde" => 254000,
            ],
            [
                "companyName" => "Neoplus",
                "solde" => 568900,
            ],
            [
                "companyName" => "Switch Electric",
                "solde" => 147850,
            ],
            [
                "companyName" => "PEC Group",
                "solde" => 145980,
            ],
        ];

        foreach ($soldes as $sold) {
            Solde::create($sold);
        }
    }
}
