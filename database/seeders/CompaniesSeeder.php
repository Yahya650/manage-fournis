<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
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
                'company' => 'Sofamel',
                'reference' => '123456789',
                'founded_out' => '2000',
            ],
            [
                'company' => 'Bitmar',
                'reference' => '12345679',
                'founded_out' => '2000',
            ],
            [
                'company' => 'Lux Lighting',
                'reference' => '12345789',
                'founded_out' => '2000',
            ],
            [
                'company' => 'Marcont',
                'reference' => '12345689',
                'founded_out' => '2000',
            ],
            [
                'company' => 'Madin Technologies',
                'reference' => '12346789',
                'founded_out' => '2000',
            ],
            [
                'company' => 'Madin Immobilier',
                'reference' => '12356789',
                'founded_out' => '2000',
            ],
            [
                'company' => 'Neoplus',
                'reference' => '12456789',
                'founded_out' => '2000',
            ],
            [
                'company' => 'Switch Electric',
                'reference' => '13456789',
                'founded_out' => '2000',
            ],
            [
                'company' => 'PEC Group',
                'reference' => '23456789',
                'founded_out' => '2000',
            ],
        ];

        foreach ($companies as $company) {
            \App\Models\Company::create($company);
        }
    }
}
