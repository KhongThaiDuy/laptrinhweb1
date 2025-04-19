<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Gọi các Seeder theo thứ tự: Role -> User -> UserRole
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            UserRoleSeeder::class,
        ]);
    }
}
