<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReceiversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('receivers')->insert([
            'full_name' => 'Rodion',
            'phone_number' => '0123456789',
            'email' => 'test@gmail.com',
            'address' => 'ggggg 123',
        ]);
    }
}
