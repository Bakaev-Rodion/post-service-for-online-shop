<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Example DB::table('posts')->insert(['post_name'=>'*name of post service*']);
        DB::table('posts')->insert(['post_name'=>'Nova Poshta']);
        DB::table('posts')->insert(['post_name'=>'UkrPoshta']);
    }
}
