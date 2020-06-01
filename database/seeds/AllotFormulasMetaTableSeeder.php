<?php

use Illuminate\Database\Seeder;

class AllotFormulasMetaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('allot_formulas_meta')->delete();
        
        \DB::table('allot_formulas_meta')->insert(array (
            0 => 
            array (
                'id' => 1,
                'description' => 'Assistant Principal',
                'salary_nonsalary_ind' => 'S',
            ),
            1 => 
            array (
                'id' => 2,
                'description' => 'Clerical',
                'salary_nonsalary_ind' => 'S',
            ),
            2 => 
            array (
                'id' => 3,
                'description' => 'Academics Allotment',
                'salary_nonsalary_ind' => 'S',
            ),
            3 => 
            array (
                'id' => 4,
                'description' => 'Counselor',
                'salary_nonsalary_ind' => 'S',
            ),
            4 => 
            array (
                'id' => 5,
                'description' => 'Media Specialist',
                'salary_nonsalary_ind' => 'S',
            ),
            5 => 
            array (
                'id' => 6,
                'description' => 'SAP Coordinator',
                'salary_nonsalary_ind' => 'S',
            ),
            6 => 
            array (
                'id' => 7,
                'description' => 'Instructional Supplies',
                'salary_nonsalary_ind' => 'N',
            ),
            7 => 
            array (
                'id' => 8,
                'description' => 'Instructional Supplies, Copier, Athletic Funds, Band Equipment Repair',
                'salary_nonsalary_ind' => 'N',
            ),
        ));
        
        
    }
}