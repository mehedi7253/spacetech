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
            'description' => 'SPACETECH ELEVATORS being one of the reputable global leaders in elevator & escalator industry has successfully introduced the concept of combining advanced lift technology from Europe with Standard & Luxury design elements, achieving a high standard performance at a competitive price. As per quality SPACE TECH works absolutely like Brand Elevator.
            World class elevator component technologies employed by SPACETECH over the years have proven their compatibility, in particular with regards to size, speed, power efficiency, proper installation and noiseless performance. With safety features second to none in the industry, these technical liaisons have put SPACETECH in position to offer local developers and architects new elevator design such as the "Gear-Less Concept". which allows a better utilization of commercial building space and thus better return on investment.'
        ]);
    }
}
