<?php

namespace Database\Seeders;

use App\Models\profile;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        profile::create([
            'FirstName' => 'Yahya',
            'LastName' => 'Hamdy',
            'Username' => "yahya650",
            'Phone' => "0608602353",
            'email' => "yh@skaydi.ma",
            'password' => Hash::make('12345678'),
        ]);
        profile::create([
            'FirstName' => 'Saad',
            'LastName' => 'Asraoui',
            'Username' => "saad650",
            'Phone' => "0608123456",
            'email' => "admin@gmail.com",
            'password' => Hash::make('12345678'),
        ]);
    }
}
