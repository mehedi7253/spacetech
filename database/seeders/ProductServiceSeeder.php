<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_services')->insert([
            [
                'service_name'  => 'Passenger Lift',
                'url'           => 'passenger-lift',
                'service_image' => '',
            ],
            [
                'service_name'  => 'Escalator',
                'url'           => 'escalator',
                'service_image' => '',
            ],
            [
                'service_name'  => 'Cargo Lift',
                'url'           => 'cargo-lift',
                'service_image' => '',
            ],
            [
                'service_name'  => 'Hospital Lift',
                'url'           => 'hospital-lift',
                'service_image' => '',
            ],
            [
                'service_name'  => 'Capsul Lift',
                'url'           => 'capsul-lift',
                'service_image' => '',
            ],
            [
                'service_name'  => 'Observation Lift',
                'url'           => 'observation-lift',
                'service_image' => '',
            ],
            [
                'service_name'  => 'Car Lift',
                'url'           => 'car-lift',
                'service_image' => '',
            ],
            [
                'service_name'  => 'Bed Lift',
                'url'           => 'bed-lift',
                'service_image' => '',
            ],
        ]);
    }
}
