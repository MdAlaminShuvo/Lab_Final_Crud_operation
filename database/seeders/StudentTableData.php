<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentTableData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => '
        // ]);  
        DB::table('students')->insert([
            'name' => 'Shahadat Hossain',
            'address' => '123 Cumilla',
            'mobile' => '1234567890'
        ]);
    }
}
