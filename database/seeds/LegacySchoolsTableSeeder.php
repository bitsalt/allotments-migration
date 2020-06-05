<?php

use Illuminate\Database\Seeder;

class LegacySchoolsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('legacy_schools')->delete();
        
        \DB::table('legacy_schools')->insert(array (
            0 => 
            array (
                'schoolid' => 543,
                'schoolname' => 'Richland Creek Elementary',
                'start_yr' => 2012,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '2012-02-09',
            ),
            1 => 
            array (
                'schoolid' => 474,
                'schoolname' => 'Lake Myra Elementary',
                'start_yr' => 2008,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '2009-02-11',
            ),
            2 => 
            array (
                'schoolid' => 304,
                'schoolname' => 'Adams Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            3 => 
            array (
                'schoolid' => 586,
                'schoolname' => 'Wake Young Womens Leadership Academy',
                'start_yr' => 2012,
                'end_yr' => 2999,
                'gradelevel' => 'U',
                'type' => 'YR',
                'lastupdate' => '2012-02-09',
            ),
            4 => 
            array (
                'schoolid' => 398,
                'schoolname' => 'Durant Rd. Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            5 => 
            array (
                'schoolid' => 308,
                'schoolname' => 'Apex Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            6 => 
            array (
                'schoolid' => 440,
                'schoolname' => 'Green Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            7 => 
            array (
                'schoolid' => 320,
                'schoolname' => 'Aversboro Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            8 => 
            array (
                'schoolid' => 454,
                'schoolname' => 'Heritage Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            9 => 
            array (
                'schoolid' => 441,
                'schoolname' => 'Green Hope High',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            10 => 
            array (
                'schoolid' => 453,
                'schoolname' => 'Jones Dairy Elementary',
                'start_yr' => 2004,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '2004-03-25',
            ),
            11 => 
            array (
                'schoolid' => 592,
                'schoolname' => 'Wake Forest-Rolesville Middle',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            12 => 
            array (
                'schoolid' => 544,
                'schoolname' => 'Rolesville Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            13 => 
            array (
                'schoolid' => 504,
                'schoolname' => 'Morrisville Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            14 => 
            array (
                'schoolid' => 522,
                'schoolname' => 'Oak Grove Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            15 => 
            array (
                'schoolid' => 570,
                'schoolname' => 'Timber Dr. Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            16 => 
            array (
                'schoolid' => 626,
                'schoolname' => 'Yates Mill Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            17 => 
            array (
                'schoolid' => 413,
                'schoolname' => 'Forestville Elementary',
                'start_yr' => 2004,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '2004-03-25',
            ),
            18 => 
            array (
                'schoolid' => 302,
                'schoolname' => 'River Bend Elementary',
                'start_yr' => 2006,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '2006-03-21',
            ),
            19 => 
            array (
                'schoolid' => 588,
                'schoolname' => 'Wake Forest-Rolesville High',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            20 => 
            array (
                'schoolid' => 571,
                'schoolname' => 'Turner Creek Elementary',
                'start_yr' => 2004,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '2004-03-25',
            ),
            21 => 
            array (
                'schoolid' => 402,
                'schoolname' => 'East Cary Middle',
                'start_yr' => 2006,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'YR',
                'lastupdate' => '2007-02-01',
            ),
            22 => 
            array (
                'schoolid' => 584,
                'schoolname' => 'Wake Forest Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            23 => 
            array (
                'schoolid' => 415,
                'schoolname' => 'Fox Rd. Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            24 => 
            array (
                'schoolid' => 616,
                'schoolname' => 'Wilburn Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            25 => 
            array (
                'schoolid' => 564,
                'schoolname' => 'Stough Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            26 => 
            array (
                'schoolid' => 488,
                'schoolname' => 'Lynn Rd. Elementary',
                'start_yr' => 2002,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            27 => 
            array (
                'schoolid' => 340,
                'schoolname' => 'Briarcliff Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            28 => 
            array (
                'schoolid' => 342,
                'schoolname' => 'Brier Creek Elementary',
                'start_yr' => 2006,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '2006-03-21',
            ),
            29 => 
            array (
                'schoolid' => 594,
                'schoolname' => 'Wakefield Middle',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            30 => 
            array (
                'schoolid' => 444,
                'schoolname' => 'Heritage Middle',
                'start_yr' => 2003,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'YR',
                'lastupdate' => '2003-04-01',
            ),
            31 => 
            array (
                'schoolid' => 568,
                'schoolname' => 'Swift Creek Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            32 => 
            array (
                'schoolid' => 595,
                'schoolname' => 'Wakefield High',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            33 => 
            array (
                'schoolid' => 512,
                'schoolname' => 'North Garner Middle',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            34 => 
            array (
                'schoolid' => 394,
                'schoolname' => 'Dillard Dr. Middle',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            35 => 
            array (
                'schoolid' => 473,
                'schoolname' => 'Leesville Rd. High',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            36 => 
            array (
                'schoolid' => 466,
                'schoolname' => 'Knightdale High',
                'start_yr' => 2004,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'TR',
                'lastupdate' => '2004-03-25',
            ),
            37 => 
            array (
                'schoolid' => 358,
                'schoolname' => 'Carpenter Elementary',
                'start_yr' => 2006,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '2006-03-21',
            ),
            38 => 
            array (
                'schoolid' => 449,
                'schoolname' => 'Holly Ridge Elementary',
                'start_yr' => 2003,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '2003-03-26',
            ),
            39 => 
            array (
                'schoolid' => 450,
                'schoolname' => 'Holly Ridge Middle',
                'start_yr' => 2003,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'TR',
                'lastupdate' => '2003-03-10',
            ),
            40 => 
            array (
                'schoolid' => 400,
                'schoolname' => 'Reedy Creek Middle',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            41 => 
            array (
                'schoolid' => 324,
                'schoolname' => 'Longview School',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'OP',
                'lastupdate' => '18-DEC-02',
            ),
            42 => 
            array (
                'schoolid' => 369,
                'schoolname' => 'Cedar Fork Elementary',
                'start_yr' => 2005,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '2005-04-06',
            ),
            43 => 
            array (
                'schoolid' => 417,
                'schoolname' => 'Forest Pines Elementary',
                'start_yr' => 2005,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '2005-04-06',
            ),
            44 => 
            array (
                'schoolid' => 457,
                'schoolname' => 'Holly Grove Elementary',
                'start_yr' => 2006,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '2006-03-21',
            ),
            45 => 
            array (
                'schoolid' => 597,
                'schoolname' => 'Wakelon Elementary',
                'start_yr' => 2005,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '2005-04-06',
            ),
            46 => 
            array (
                'schoolid' => 455,
                'schoolname' => 'Holly Springs High',
                'start_yr' => 2006,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'TR',
                'lastupdate' => '2006-03-21',
            ),
            47 => 
            array (
                'schoolid' => 700,
                'schoolname' => 'East Wake School of Health Science',
                'start_yr' => 2005,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'TR',
                'lastupdate' => '2005-04-14',
            ),
            48 => 
            array (
                'schoolid' => 528,
                'schoolname' => 'Phillips',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'OP',
                'lastupdate' => '18-DEC-02',
            ),
            49 => 
            array (
                'schoolid' => 508,
                'schoolname' => 'Mount Vernon',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'OP',
                'lastupdate' => '18-DEC-02',
            ),
            50 => 
            array (
                'schoolid' => 393,
                'schoolname' => 'Dillard Dr. Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            51 => 
            array (
                'schoolid' => 460,
                'schoolname' => 'Kingswood Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            52 => 
            array (
                'schoolid' => 376,
                'schoolname' => 'Combs Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            53 => 
            array (
                'schoolid' => 495,
                'schoolname' => 'Middle Creek High',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            54 => 
            array (
                'schoolid' => 526,
                'schoolname' => 'Panther Creek High',
                'start_yr' => 2006,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'TR',
                'lastupdate' => '2006-03-21',
            ),
            55 => 
            array (
                'schoolid' => 329,
                'schoolname' => 'Barwell Road Elementary',
                'start_yr' => 2006,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '2006-03-21',
            ),
            56 => 
            array (
                'schoolid' => 336,
                'schoolname' => 'Brentwood Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            57 => 
            array (
                'schoolid' => 424,
                'schoolname' => 'Fuquay-Varina Middle',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            58 => 
            array (
                'schoolid' => 390,
                'schoolname' => 'Davis Dr. Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            59 => 
            array (
                'schoolid' => 411,
                'schoolname' => 'East Wake High',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            60 => 
            array (
                'schoolid' => 540,
                'schoolname' => 'Rand Rd. Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            61 => 
            array (
                'schoolid' => 470,
                'schoolname' => 'Lead Mine Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            62 => 
            array (
                'schoolid' => 452,
                'schoolname' => 'Jeffreys Grove Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            63 => 
            array (
                'schoolid' => 560,
                'schoolname' => 'Smith Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            64 => 
            array (
                'schoolid' => 530,
                'schoolname' => 'Penny Rd. Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            65 => 
            array (
                'schoolid' => 701,
                'schoolname' => 'East Wake School of Integrated Tech.',
                'start_yr' => 2006,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'TR',
                'lastupdate' => '2006-03-21',
            ),
            66 => 
            array (
                'schoolid' => 442,
                'schoolname' => 'Hilburn Academy',
                'start_yr' => 2012,
                'end_yr' => 2999,
                'gradelevel' => 'L',
                'type' => 'TR',
                'lastupdate' => '2012-05-31',
            ),
            67 => 
            array (
                'schoolid' => 545,
                'schoolname' => 'Rolesville Middle',
                'start_yr' => 2012,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'YR',
                'lastupdate' => '2012-02-09',
            ),
            68 => 
            array (
                'schoolid' => 601,
                'schoolname' => 'Wendell Middle',
                'start_yr' => 2006,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'TR',
                'lastupdate' => '2007-02-01',
            ),
            69 => 
            array (
                'schoolid' => 403,
                'schoolname' => 'East Garner Elementary',
                'start_yr' => 2006,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '2007-02-01',
            ),
            70 => 
            array (
                'schoolid' => 628,
                'schoolname' => 'York Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            71 => 
            array (
                'schoolid' => 318,
                'schoolname' => 'Athens Dr. High',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            72 => 
            array (
                'schoolid' => 391,
                'schoolname' => 'Davis Dr. Middle',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            73 => 
            array (
                'schoolid' => 428,
                'schoolname' => 'Fuquay-Varina High',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            74 => 
            array (
                'schoolid' => 468,
                'schoolname' => 'Lacy Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            75 => 
            array (
                'schoolid' => 520,
                'schoolname' => 'Northwoods Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            76 => 
            array (
                'schoolid' => 552,
                'schoolname' => 'Sanderson High',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            77 => 
            array (
                'schoolid' => 443,
                'schoolname' => 'Highcroft Drive Elementary',
                'start_yr' => 2004,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '2004-04-13',
            ),
            78 => 
            array (
                'schoolid' => 598,
                'schoolname' => 'Weatherstone Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            79 => 
            array (
                'schoolid' => 608,
                'schoolname' => 'West Millbrook Middle',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            80 => 
            array (
                'schoolid' => 606,
                'schoolname' => 'West Lake Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            81 => 
            array (
                'schoolid' => 514,
                'schoolname' => 'North Forest Pines Elementary',
                'start_yr' => 2006,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '2007-02-01',
            ),
            82 => 
            array (
                'schoolid' => 554,
                'schoolname' => 'Sanford Creek Elementary',
                'start_yr' => 2006,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '2007-02-01',
            ),
            83 => 
            array (
                'schoolid' => 388,
                'schoolname' => 'Daniels Middle',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            84 => 
            array (
                'schoolid' => 327,
                'schoolname' => 'Ballentine Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            85 => 
            array (
                'schoolid' => 399,
                'schoolname' => 'Durant Rd. Middle',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            86 => 
            array (
                'schoolid' => 484,
                'schoolname' => 'Lufkin Middle',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            87 => 
            array (
                'schoolid' => 703,
                'schoolname' => 'East Wake School of Engineering',
                'start_yr' => 2006,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'TR',
                'lastupdate' => '2007-02-01',
            ),
            88 => 
            array (
                'schoolid' => 580,
                'schoolname' => 'Vandora Springs Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            89 => 
            array (
                'schoolid' => 500,
                'schoolname' => 'Millbrook High',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            90 => 
            array (
                'schoolid' => 316,
                'schoolname' => 'Apex High',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            91 => 
            array (
                'schoolid' => 368,
                'schoolname' => 'Cary High',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            92 => 
            array (
                'schoolid' => 607,
                'schoolname' => 'West Lake Middle',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            93 => 
            array (
                'schoolid' => 439,
                'schoolname' => 'Green Hope Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            94 => 
            array (
                'schoolid' => 312,
                'schoolname' => 'Apex Middle',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            95 => 
            array (
                'schoolid' => 360,
                'schoolname' => 'Carroll Middle',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            96 => 
            array (
                'schoolid' => 384,
                'schoolname' => 'Creech Rd. Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            97 => 
            array (
                'schoolid' => 604,
                'schoolname' => 'West Cary Middle',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            98 => 
            array (
                'schoolid' => 326,
                'schoolname' => 'Baileywick Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            99 => 
            array (
                'schoolid' => 702,
                'schoolname' => 'EW Sch of Arts, Ed. and Global Studies',
                'start_yr' => 2006,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'TR',
                'lastupdate' => '2007-02-01',
            ),
            100 => 
            array (
                'schoolid' => 364,
                'schoolname' => 'Cary Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            101 => 
            array (
                'schoolid' => 334,
                'schoolname' => 'Brassfield Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            102 => 
            array (
                'schoolid' => 516,
                'schoolname' => 'North Ridge Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            103 => 
            array (
                'schoolid' => 344,
                'schoolname' => 'Brooks Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            104 => 
            array (
                'schoolid' => 618,
                'schoolname' => 'Wildwood Forest Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '19-DEC-02',
            ),
            105 => 
            array (
                'schoolid' => 451,
                'schoolname' => 'Harris Creek Elementary',
                'start_yr' => 2005,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '2005-04-06',
            ),
            106 => 
            array (
                'schoolid' => 420,
                'schoolname' => 'Fuquay-Varina Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            107 => 
            array (
                'schoolid' => 542,
                'schoolname' => 'Reedy Creek Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            108 => 
            array (
                'schoolid' => 438,
                'schoolname' => 'River Oaks Middle',
                'start_yr' => 2005,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'OP',
                'lastupdate' => '2005-04-06',
            ),
            109 => 
            array (
                'schoolid' => 446,
                'schoolname' => 'Hodge Rd. Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            110 => 
            array (
                'schoolid' => 447,
                'schoolname' => 'Holly Springs Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            111 => 
            array (
                'schoolid' => 303,
                'schoolname' => 'Abbotts Creek Elementary',
                'start_yr' => 2012,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '2012-02-09',
            ),
            112 => 
            array (
                'schoolid' => 380,
                'schoolname' => 'Conn Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            113 => 
            array (
                'schoolid' => 480,
                'schoolname' => 'Lockhart Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            114 => 
            array (
                'schoolid' => 494,
                'schoolname' => 'Middle Creek Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            115 => 
            array (
                'schoolid' => 523,
                'schoolname' => 'Olive Chapel Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            116 => 
            array (
                'schoolid' => 531,
                'schoolname' => 'Pleasant Union Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            117 => 
            array (
                'schoolid' => 585,
                'schoolname' => 'Wake Young Mens Leadership Academy',
                'start_yr' => 2012,
                'end_yr' => 2999,
                'gradelevel' => 'U',
                'type' => 'YR',
                'lastupdate' => '2012-02-09',
            ),
            118 => 
            array (
                'schoolid' => 550,
                'schoolname' => 'Salem Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            119 => 
            array (
                'schoolid' => 576,
                'schoolname' => 'Vance Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            120 => 
            array (
                'schoolid' => 593,
                'schoolname' => 'Wakefield Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            121 => 
            array (
                'schoolid' => 624,
                'schoolname' => 'Willow Springs Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            122 => 
            array (
                'schoolid' => 410,
                'schoolname' => 'East Wake Middle',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            123 => 
            array (
                'schoolid' => 524,
                'schoolname' => 'Olds Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            124 => 
            array (
                'schoolid' => 551,
                'schoolname' => 'Salem Middle',
                'start_yr' => 2004,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'YR',
                'lastupdate' => '2004-03-25',
            ),
            125 => 
            array (
                'schoolid' => 352,
                'schoolname' => 'Bugg Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            126 => 
            array (
                'schoolid' => 306,
                'schoolname' => 'Herbert Akins Elementary',
                'start_yr' => 2008,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '2009-02-11',
            ),
            127 => 
            array (
                'schoolid' => 467,
                'schoolname' => 'Laurel Park Elementary',
                'start_yr' => 2008,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '2008-03-20',
            ),
            128 => 
            array (
                'schoolid' => 362,
                'schoolname' => 'Carver Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            129 => 
            array (
                'schoolid' => 569,
                'schoolname' => 'Sycamore Creek Elementary',
                'start_yr' => 2008,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '2008-03-20',
            ),
            130 => 
            array (
                'schoolid' => 325,
                'schoolname' => 'Banks Road Elementary',
                'start_yr' => 2008,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '2009-02-11',
            ),
            131 => 
            array (
                'schoolid' => 307,
                'schoolname' => 'Alston Ridge Elementary',
                'start_yr' => 2010,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '2010-03-04',
            ),
            132 => 
            array (
                'schoolid' => 328,
                'schoolname' => 'Baucom Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            133 => 
            array (
                'schoolid' => 464,
                'schoolname' => 'Knightdale Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            134 => 
            array (
                'schoolid' => 458,
                'schoolname' => 'Holly Grove Middle',
                'start_yr' => 2010,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'YR',
                'lastupdate' => '2010-03-04',
            ),
            135 => 
            array (
                'schoolid' => 502,
                'schoolname' => 'Mills Park Middle',
                'start_yr' => 2010,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'TR',
                'lastupdate' => '2010-03-04',
            ),
            136 => 
            array (
                'schoolid' => 445,
                'schoolname' => 'Heritage High',
                'start_yr' => 2010,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'TR',
                'lastupdate' => '2010-03-04',
            ),
            137 => 
            array (
                'schoolid' => 501,
                'schoolname' => 'Mills Park Elementary',
                'start_yr' => 2008,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '2008-03-20',
            ),
            138 => 
            array (
                'schoolid' => 469,
                'schoolname' => 'Leesville Rd. Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            139 => 
            array (
                'schoolid' => 471,
                'schoolname' => 'Leesville Middle',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            140 => 
            array (
                'schoolid' => 525,
                'schoolname' => 'Partnership Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'YR',
                'lastupdate' => '18-DEC-02',
            ),
            141 => 
            array (
                'schoolid' => 396,
                'schoolname' => 'Douglas Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            142 => 
            array (
                'schoolid' => 414,
                'schoolname' => 'Farmington Wds. Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            143 => 
            array (
                'schoolid' => 416,
                'schoolname' => 'Fuller Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            144 => 
            array (
                'schoolid' => 448,
                'schoolname' => 'Hunter Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            145 => 
            array (
                'schoolid' => 456,
                'schoolname' => 'Joyner Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            146 => 
            array (
                'schoolid' => 476,
                'schoolname' => 'Lincoln Hts. Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
            147 => 
            array (
                'schoolid' => 496,
                'schoolname' => 'Millbrook Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            148 => 
            array (
                'schoolid' => 532,
                'schoolname' => 'Poe Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            149 => 
            array (
                'schoolid' => 536,
                'schoolname' => 'Powell Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            150 => 
            array (
                'schoolid' => 572,
                'schoolname' => 'Underwood Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            151 => 
            array (
                'schoolid' => 600,
                'schoolname' => 'Wendell Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            152 => 
            array (
                'schoolid' => 620,
                'schoolname' => 'Wiley Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            153 => 
            array (
                'schoolid' => 632,
                'schoolname' => 'Zebulon Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            154 => 
            array (
                'schoolid' => 596,
                'schoolname' => 'Washington Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            155 => 
            array (
                'schoolid' => 348,
                'schoolname' => 'Broughton High',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            156 => 
            array (
                'schoolid' => 436,
                'schoolname' => 'Garner High',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            157 => 
            array (
                'schoolid' => 562,
                'schoolname' => 'Southeast Raleigh High',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'YR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            158 => 
            array (
                'schoolid' => 583,
                'schoolname' => 'Wake Early College of Health and Science',
                'start_yr' => 2006,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'YR',
                'lastupdate' => '2006-03-21',
            ),
            159 => 
            array (
                'schoolid' => 356,
                'schoolname' => 'Carnage Middle',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            160 => 
            array (
                'schoolid' => 370,
                'schoolname' => 'Centennial Middle',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'YR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            161 => 
            array (
                'schoolid' => 404,
                'schoolname' => 'East Garner Middle',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            162 => 
            array (
                'schoolid' => 408,
                'schoolname' => 'East Millbrook Middle',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            163 => 
            array (
                'schoolid' => 472,
                'schoolname' => 'Ligon Middle',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            164 => 
            array (
                'schoolid' => 492,
                'schoolname' => 'Martin Middle',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            165 => 
            array (
                'schoolid' => 506,
                'schoolname' => 'Moore Sq Middle',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'YR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            166 => 
            array (
                'schoolid' => 636,
                'schoolname' => 'Zebulon Middle',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'M',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            167 => 
            array (
                'schoolid' => 412,
                'schoolname' => 'Enloe High',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'TR-MG',
                'lastupdate' => '18-DEC-02',
            ),
            168 => 
            array (
                'schoolid' => 599,
                'schoolname' => 'Walnut Creek Elementary',
                'start_yr' => 2011,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '2011-03-08',
            ),
            169 => 
            array (
                'schoolid' => 582,
                'schoolname' => 'Wake NC State STEM Early College',
                'start_yr' => 2011,
                'end_yr' => 2999,
                'gradelevel' => 'H',
                'type' => 'YR',
                'lastupdate' => '2011-03-08',
            ),
            170 => 
            array (
                'schoolid' => 548,
                'schoolname' => 'Root Elementary',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'gradelevel' => 'E',
                'type' => 'TR',
                'lastupdate' => '18-DEC-02',
            ),
        ));
        
        
    }
}