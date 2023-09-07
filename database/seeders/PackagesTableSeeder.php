<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('packages')->insert([
            'width' => '12.1',
            'height' => '12.3',
            'length' => '12.4',
            'weight' => '14',
            'post_id'=>'1'
        ]);
    }
}
