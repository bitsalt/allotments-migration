<?php

use Illuminate\Database\Seeder;

class AnnouncementsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('announcements')->delete();
        
        \DB::table('announcements')->insert(array (
            0 => 
            array (
                'announcement_id' => 249,
                'announcement_text' => '&lt;p&gt;&amp;nbsp;&lt;/p&gt;
&lt;p&gt;&amp;nbsp;&lt;/p&gt;
&lt;p&gt;&amp;nbsp;&lt;/p&gt;
&lt;p&gt;&amp;nbsp;&lt;em&gt;&lt;span style=&quot;font-size: 14pt;&quot;&gt;&lt;strong&gt;Announcements 2019-2020&lt;/strong&gt;&lt;/span&gt;&lt;/em&gt;&lt;/p&gt;
&lt;p&gt;&amp;nbsp;&lt;span style=&quot;font-size: 10pt;&quot;&gt;&lt;em&gt;&lt;strong&gt;&lt;em&gt;&lt;strong&gt;All allotments for 2019-20 have been loaded to the&amp;nbsp;Allotment Application&amp;nbsp;and reconciled to Oracle.&lt;/strong&gt;&lt;/em&gt;&lt;/strong&gt;&lt;/em&gt;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&lt;span style=&quot;font-size: 10pt;&quot;&gt;To view positions for your school, run the WCS Position Report for your school cost center.&amp;nbsp; The procedure for running the report can be found on the WakeConnect Allotments workspace.&amp;nbsp;&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;&amp;nbsp;&lt;/p&gt;',
                'announcement_active' => 1,
            ),
        ));
        
        
    }
}