<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 23,
                'username' => 'jfuller2',
                'first_name' => 'Jan',
                'last_name' => 'Fuller',
                'password' => 'iqGFmCndv7WcU',
                'salt' => '3Q5qYG3KxGL6BWyU83iq',
                'role' => 'superadmin',
                'email' => 'jfuller2@wcpss.net',
                'date_created' => '2019-03-25 10:07:04',
                'date_modified' => '2019-03-25 10:11:30',
                'passwd_reset' => 0,
            ),
            1 => 
            array (
                'id' => 4,
                'username' => 'dcomer',
                'first_name' => 'Debbie',
                'last_name' => 'Comer',
                'password' => 'OjHuHLmjeRKNE',
                'salt' => 'zLoJGqYPvLIRSCuLaOOj',
                'role' => 'superadmin',
                'email' => 'dcomer@wcpss.net',
                'date_created' => '2013-01-22 17:05:59',
                'date_modified' => '2016-05-17 10:29:02',
                'passwd_reset' => 0,
            ),
            2 => 
            array (
                'id' => 5,
                'username' => 'dmoore3',
                'first_name' => 'Donna W.',
                'last_name' => 'Moore',
                'password' => 'OjQ6c3aSZj2so',
                'salt' => 'zLoJGqYPvLIRSCuLaOOj',
                'role' => 'superadmin',
                'email' => 'dmoore3@wcpss.net',
                'date_created' => '2013-01-22 17:05:59',
                'date_modified' => '2018-05-07 10:34:14',
                'passwd_reset' => 0,
            ),
            3 => 
            array (
                'id' => 12,
                'username' => 'ederaimo',
                'first_name' => 'Erin',
                'last_name' => 'DeRaimo',
                'password' => '9Xh7ulWKzEWOk',
                'salt' => 'dF2zyeJKgp2ArGv3Fq9X',
                'role' => 'superadmin',
                'email' => 'ederaimo@wcpss.net',
                'date_created' => '2013-09-30 10:02:04',
                'date_modified' => '2014-02-05 09:35:49',
                'passwd_reset' => 0,
            ),
            4 => 
            array (
                'id' => 8,
                'username' => 'tkimzey',
                'first_name' => 'Terri',
                'last_name' => 'Kimzey',
                'password' => 'OjWgdupEs7.Eg',
                'salt' => 'zLoJGqYPvLIRSCuLaOOj',
                'role' => 'superadmin',
                'email' => 'tkimzey@wcpss.net',
                'date_created' => '2013-01-22 17:05:59',
                'date_modified' => '2019-09-23 13:28:04',
                'passwd_reset' => 0,
            ),
            5 => 
            array (
                'id' => 16,
                'username' => 'mnilsen',
                'first_name' => 'Matt',
                'last_name' => 'Nilsen',
                'password' => 'JvagLdu/xBSzw',
                'salt' => 'CmF8fKzPTftnxNqr9SJv',
                'role' => 'superadmin',
                'email' => 'mnilsen@wcpss.net',
                'date_created' => '2015-01-16 08:28:17',
                'date_modified' => '2015-01-16 09:05:50',
                'passwd_reset' => 0,
            ),
            6 => 
            array (
                'id' => 21,
                'username' => 'dcooper',
                'first_name' => 'Debbie',
                'last_name' => 'Cooper',
                'password' => 'y4DGmZyT87cSw',
                'salt' => 'y6qyxPbesNCyurcdpGy4',
                'role' => 'superadmin',
                'email' => 'dcooper@wcpss.net',
                'date_created' => '2018-02-06 11:31:36',
                'date_modified' => '2018-06-27 13:20:27',
                'passwd_reset' => 0,
            ),
            7 => 
            array (
                'id' => 18,
                'username' => 'jmoser2',
                'first_name' => 'Jeff',
                'last_name' => 'Moser',
                'password' => 'mmt1qo/Ajt7TA',
                'salt' => 'tbqYFwf6uMzK7v3Kfjmm',
                'role' => 'superadmin',
                'email' => 'jmoser2@wcpss.net',
                'date_created' => '2016-03-23 14:10:00',
                'date_modified' => '2018-12-07 11:24:55',
                'passwd_reset' => 0,
            ),
            8 => 
            array (
                'id' => 11,
                'username' => 'ehodge',
                'first_name' => 'Eva',
                'last_name' => 'Hodge',
                'password' => '2YYIjzWziYDkw',
                'salt' => 'n2QYRpYY2PG2Ja69Cn2Y',
                'role' => 'superadmin',
                'email' => 'ehodge@wcpss.net',
                'date_created' => '2013-08-19 11:25:56',
                'date_modified' => '2016-05-17 10:47:49',
                'passwd_reset' => 0,
            ),
            9 => 
            array (
                'id' => 17,
                'username' => 'sloeffler',
                'first_name' => 'Sharon',
                'last_name' => 'Loeffler',
                'password' => 'sj5U3XdzfyAdA',
                'salt' => 'uc3HHdSexM27D2ziT2sj',
                'role' => 'superadmin',
                'email' => 'sloeffler@wcpss.net',
                'date_created' => '2015-01-26 08:26:30',
                'date_modified' => '2015-01-26 08:50:08',
                'passwd_reset' => 0,
            ),
            10 => 
            array (
                'id' => 22,
                'username' => 'dpmoore',
                'first_name' => 'Donna P.',
                'last_name' => 'Moore',
                'password' => 'cJ3UUxhH1ppyg',
                'salt' => 'F6cTtVNi3AhaEDewdecJ',
                'role' => 'superadmin',
                'email' => 'dpmoore@wcpss.net',
                'date_created' => '2018-05-07 10:34:02',
                'date_modified' => '2018-05-07 10:36:25',
                'passwd_reset' => 0,
            ),
            11 => 
            array (
                'id' => 24,
                'username' => 'ssymes',
                'first_name' => 'Stacy',
                'last_name' => 'Symes',
                'password' => 'AzMAY5pSZigfk',
                'salt' => 'c9VU92rrBKukihBAARAz',
                'role' => 'superadmin',
                'email' => 'ssymes@wcpss.net',
                'date_created' => '2020-02-14 11:11:42',
                'date_modified' => '2020-02-17 08:04:31',
                'passwd_reset' => 0,
            ),
        ));
        
        
    }
}