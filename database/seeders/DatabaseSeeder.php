<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ModelHasRole;
use App\Models\Role;
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
            'name' => 'Super Admin',
            'email' => 'strivehub@mailinator.com',
            'password' => Hash::make('Strivehub@123!'),
        ]);
        Role::create([
            'name' => 'SuperAdmin',
            'guard_name' => 'web',
        ]);
        Role::create([
            'name' => 'User',
            'guard_name' => 'web',
        ]);
        Role::create([
            'name' => 'Customer',
            'guard_name' => 'web',
        ]);
        Role::create([
            'name' => 'Employee',
            'guard_name' => 'web',
        ]);

        ModelHasRole::create([
            'id' => 1,
            'model_type' => 'App\Models\User',
            'model_id' => 1,
        ]);
    }
}
