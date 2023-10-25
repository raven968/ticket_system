<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Company::create([
            'company' => 'Raven Tec',
            'email' => 'ravenweb968@gmail.com',
            'is_webmaster' => 1
        ]);
    }
}
