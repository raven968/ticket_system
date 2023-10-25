<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Aron',
            'last_name' => 'Jimenez',
            'username' => 'webmaster',
            'email' => 'aronjim96@gmail.com',
            'password' => bcrypt('android'),
            'last_access' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_by' => 0,
            'is_admin' => 1,
            'is_webmaster' => 1,
            'company_id' => 1
        ]);
    }
}
