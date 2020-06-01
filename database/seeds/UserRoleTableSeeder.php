<?php

use Illuminate\Database\Seeder;

class UserRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_role')->delete();
        
        \DB::table('user_role')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role' => 'user',
            ),
            1 => 
            array (
                'id' => 2,
                'role' => 'admin',
            ),
            2 => 
            array (
                'id' => 3,
                'role' => 'superadmin',
            ),
        ));
        
        
    }
}