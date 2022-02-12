<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('designs')->insert([
            [
                'name' => 'Door Design',
                'url'  => 'door-design'
            ],
            [
                'name' => 'Ceiling Desgin',
                'url'  => 'ceiling-design'
            ],
            [
                'name' => 'COP & LOP Design',
                'url'  => 'cop-lop-design'
            ],
            [
                'name' => 'Handrail Design',
                'url'  => 'handrail-design'
            ],
        ]);
    }
}
