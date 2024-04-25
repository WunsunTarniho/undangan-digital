<?php

namespace Database\Seeders;

use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use App\Models\Invitation;
use Illuminate\Support\Str;
use App\Models\TypeInvitation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Wunsun Tarniho',
            'password' => 'wunsun#1234',
            'level' => 'Admin',
        ]);

        User::factory()->create([
            'name' => 'Dwi Syafitri',
            'password' => 'dwi12345',
            'level' => 'User',
        ]);

        Category::factory()->create([
            "name" => "Birthday Party Invitation",
        ]);

        Category::factory()->create([
            "name" => "Formal Invitation",
        ]);

        Category::factory()->create([
            "name" => "Wedding Invitation",
        ]);
    }
}
