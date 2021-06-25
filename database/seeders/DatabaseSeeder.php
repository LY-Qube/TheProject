<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()
            ->hasPersonal(1)
            ->hasSocialNetwork(1)
            ->create([
                'email'     => "admin@theproject.test",
                'is_admin'  => true,
                'job_position' => "CEO"
            ]);
        $this->call(RoleSeeder::class);
    }
}
