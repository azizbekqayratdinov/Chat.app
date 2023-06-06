<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Azizbek',
            'phone'=>'+998500558100',
            'password'=>Hash::make(111)
        ]);
        User::create([
            'name'=>'Dawranbek',
            'phone'=>'+998933651302',
            'password'=>Hash::make(111)
        ]);
        User::create([
            'name'=>'Abat',
            'phone'=>'+998990611470',
            'password'=>Hash::make(111)
        ]);
    }
}
