<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::updateOrCreate(
            ['username' => 'admin'], // unique field check
            [
                'password'   => Hash::make('12345678'), // hashed password
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                    ]
                );
        }
}

