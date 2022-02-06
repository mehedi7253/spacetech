<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert(
        [
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi in qui facere voluptatem aliquid excepturi quaerat voluptates, nemo exercitationem adipisci repudiandae eum dolores aperiam fugiat laboriosam? Eum iste explicabo optio?'
        ]);
    }
}
