<?php

use Illuminate\Database\Seeder;

class MileageVarsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mileage_vars')->delete();
        
        \DB::table('mileage_vars')->insert(array (
            0 => 
            array (
                'school_year' => 2014,
                'mileage_rate' => '0.56',
                'trips' => 60,
                'bonus_trips' => 200,
                'bonus_miles' => '5.00',
            ),
            1 => 
            array (
                'school_year' => 2015,
                'mileage_rate' => '0.56',
                'trips' => 60,
                'bonus_trips' => 200,
                'bonus_miles' => '5.00',
            ),
        ));
        
        
    }
}