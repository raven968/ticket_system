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
            'company' => 'Operadores Maquiladora',
            'email' => 'servicio@operadoresmaquiladora.com',
            'is_webmaster' => 1
        ]);
    }
}
