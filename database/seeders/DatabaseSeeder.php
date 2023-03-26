<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // /** @var \App\Models\User $adminUser */
        // $adminUser = User::factory()->create([
        //     'email' => 'admin@example.com',
        //     'name' => 'Admin',
        //     'password' => bcrypt('admin123')
        // ]);
        
        Post::factory()->count(50)->create();
        // $adminRole = Role::create(['name' => 'admin']);
        // $adminUser->assignRole($adminRole);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
