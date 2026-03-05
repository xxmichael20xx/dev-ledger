<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::factory()->create([
            'first_name' => 'Admin',
            'last_name' => 'Domain',
            'email' => 'admin@domain.com',
            'password' => Hash::make('admin123')
        ]);
    }
}
