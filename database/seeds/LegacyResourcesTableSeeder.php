<?php

use Illuminate\Database\Seeder;

class LegacyResourcesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('legacy_resources')->delete();
        
        \DB::table('legacy_resources')->insert(array (
            0 => 
            array (
                'resourceid' => 'ADM7',
                'name' => 'Transportation',
                'category_name' => 'Auxiliary Services',
                'start_yr' => 2001,
                'end_yr' => 2099,
                'glevel' => 'H',
                'lastupdate' => 28,
                'data_link' => 'downloads/transportation.pdf',
            ),
            1 => 
            array (
                'resourceid' => 'ADM2',
                'name' => 'Assistant Principal',
                'category_name' => 'Area Superintendent Allotments',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 17,
                'data_link' => 'downloads/assistant_principal.pdf',
            ),
            2 => 
            array (
                'resourceid' => 'ISD10',
                'name' => 'LEP',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 17,
                'data_link' => 'downloads/limited_english_proficiency.pdf',
            ),
            3 => 
            array (
                'resourceid' => 'ADM4',
                'name' => 'Other Teacher Assistant',
                'category_name' => 'Area Superintendent Allotments',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 17,
                'data_link' => 'downloads/other_ta.pdf',
            ),
            4 => 
            array (
                'resourceid' => 'ADM5',
                'name' => 'Clerical',
                'category_name' => 'Area Superintendent Allotments',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 17,
                'data_link' => 'downloads/clerical.pdf',
            ),
            5 => 
            array (
                'resourceid' => 'ADM6',
                'name' => 'Custodians',
                'category_name' => 'Area Superintendent Allotments',
                'start_yr' => 2001,
                'end_yr' => 2007,
                'glevel' => 'A',
                'lastupdate' => 28,
                'data_link' => 'downloads/custodial.pdf',
            ),
            6 => 
            array (
                'resourceid' => 'ISD54',
                'name' => 'Targeted Enrollment Schools',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2012,
                'end_yr' => 2999,
                'glevel' => 'EML',
                'lastupdate' => 2012,
                'data_link' => 'downloads/targeted-enrollment-schs.pdf',
            ),
            7 => 
            array (
                'resourceid' => 'ADM8',
                'name' => 'Child Nutrition',
                'category_name' => 'Area Superintendent Allotments',
                'start_yr' => 2001,
                'end_yr' => 2007,
                'glevel' => 'A',
                'lastupdate' => 17,
                'data_link' => 'downloads/cns_service_allotments.pdf',
            ),
            8 => 
            array (
                'resourceid' => 'ADM13',
                'name' => '6-8',
                'category_name' => 'Area Superintendent Allotments',
                'start_yr' => 2009,
                'end_yr' => 2010,
                'glevel' => 'M',
                'lastupdate' => 2011,
                'data_link' => 'downloads/adm_teacher.pdf',
            ),
            9 => 
            array (
                'resourceid' => 'ISD15',
                'name' => 'Career & Technical Ed',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 28,
                'data_link' => 'downloads/career_tech_ed.pdf',
            ),
            10 => 
            array (
                'resourceid' => 'ADM 11',
                'name' => 'Year Round',
                'category_name' => 'Area Superintendent Allotments',
                'start_yr' => 2006,
                'end_yr' => 2007,
                'glevel' => 'A',
                'lastupdate' => 28,
                'data_link' => '',
            ),
            11 => 
            array (
                'resourceid' => 'ISD9',
                'name' => 'Title I',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 17,
                'data_link' => 'downloads/elem_title_1_k-2_%20literacy.pdf',
            ),
            12 => 
            array (
                'resourceid' => 'ISD1',
                'name' => 'Media Specialist',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 17,
                'data_link' => 'downloads/media.pdf',
            ),
            13 => 
            array (
                'resourceid' => 'ISD 22',
                'name' => 'Middle School Year Round',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2008,
                'end_yr' => 2999,
                'glevel' => 'M',
                'lastupdate' => 28,
                'data_link' => 'downloads/ms-year-round.pdf',
            ),
            14 => 
            array (
                'resourceid' => 'ISD14',
                'name' => 'Literacy',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'EML',
                'lastupdate' => 28,
                'data_link' => 'downloads/elem_k-2_literacy_alp.pdf',
            ),
            15 => 
            array (
                'resourceid' => 'ISD12',
                'name' => 'Grants',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 17,
                'data_link' => 'downloads/grants-total.pdf',
            ),
            16 => 
            array (
                'resourceid' => 'ISD6',
                'name' => 'Academically Gifted',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 17,
                'data_link' => 'downloads/ag.pdf',
            ),
            17 => 
            array (
                'resourceid' => 'ISD7',
                'name' => 'Magnet',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 17,
                'data_link' => 'downloads/magnet.pdf',
            ),
            18 => 
            array (
                'resourceid' => 'ADM3',
                'name' => 'Other Teacher',
                'category_name' => 'Area Superintendent Allotments',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 17,
                'data_link' => 'downloads/other_teacher.pdf',
            ),
            19 => 
            array (
                'resourceid' => 'ISD17',
            'name' => 'Special Education Teachers (K-12)',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 17,
                'data_link' => 'downloads/special_ed_services.pdf',
            ),
            20 => 
            array (
                'resourceid' => 'ISD18',
            'name' => 'Special Education TA (K-12)',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 17,
                'data_link' => 'downloads/special_ed_ta.pdf',
            ),
            21 => 
            array (
                'resourceid' => 'ISD 25',
                'name' => 'Special Education, Other',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2008,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 28,
                'data_link' => 'downloads/speech.pdf',
            ),
            22 => 
            array (
                'resourceid' => 'ISD13',
                'name' => 'Title 5',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2001,
                'end_yr' => 2007,
                'glevel' => 'E',
                'lastupdate' => 28,
                'data_link' => 'downloads/title_vi_grant.pdf',
            ),
            23 => 
            array (
                'resourceid' => 'ISD2',
                'name' => 'Academics Allotment',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 17,
                'data_link' => 'downloads/c&i-total.pdf',
            ),
            24 => 
            array (
                'resourceid' => 'ISD19',
                'name' => 'ALP',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2002,
                'end_yr' => 2007,
                'glevel' => 'A',
                'lastupdate' => 28,
                'data_link' => 'downloads/alp.pdf',
            ),
            25 => 
            array (
                'resourceid' => 'ISD20',
                'name' => 'Challenged Schools',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2002,
                'end_yr' => 2007,
                'glevel' => 'A',
                'lastupdate' => 28,
                'data_link' => 'downloads/challenged_schools.pdf',
            ),
            26 => 
            array (
                'resourceid' => 'ISD51',
                'name' => 'Nova-Net',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2009,
                'end_yr' => 2010,
                'glevel' => 'EML',
                'lastupdate' => 2011,
                'data_link' => 'downloads/novanet-teacher.pdf',
            ),
            27 => 
            array (
                'resourceid' => 'ISD 21',
                'name' => 'College Preparatory Success',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2006,
                'end_yr' => 2999,
                'glevel' => 'EML',
                'lastupdate' => 28,
                'data_link' => 'downloads/middle_college_prep_success.pdf',
            ),
            28 => 
            array (
                'resourceid' => 'ISD 24',
                'name' => 'Counselor',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2008,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 28,
                'data_link' => 'downloads/counselors.pdf',
            ),
            29 => 
            array (
                'resourceid' => 'ISD 26',
                'name' => 'Psychologist',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2008,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 28,
                'data_link' => 'downloads/psychologists.pdf',
            ),
            30 => 
            array (
                'resourceid' => 'ISD 27',
                'name' => 'Social Work',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2008,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 28,
                'data_link' => 'downloads/social_workers.pdf',
            ),
            31 => 
            array (
                'resourceid' => 'ISD 28',
                'name' => 'SAP Coordinator',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2008,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 28,
                'data_link' => 'downloads/saps.pdf',
            ),
            32 => 
            array (
                'resourceid' => 'SUP1',
                'name' => 'Counselor',
                'category_name' => 'Auxiliary Services',
                'start_yr' => 2001,
                'end_yr' => 2007,
                'glevel' => 'A',
                'lastupdate' => 28,
                'data_link' => 'downloads/counselors.pdf',
            ),
            33 => 
            array (
                'resourceid' => 'SUP2',
                'name' => 'Speech',
                'category_name' => 'Auxiliary Services',
                'start_yr' => 2001,
                'end_yr' => 2007,
                'glevel' => 'A',
                'lastupdate' => 28,
                'data_link' => 'downloads/speech.pdf',
            ),
            34 => 
            array (
                'resourceid' => 'SUP3',
                'name' => 'Psychologist',
                'category_name' => 'Auxiliary Services',
                'start_yr' => 2001,
                'end_yr' => 2007,
                'glevel' => 'A',
                'lastupdate' => 28,
                'data_link' => 'downloads/psychologists.pdf',
            ),
            35 => 
            array (
                'resourceid' => 'SUP4',
                'name' => 'Social Work',
                'category_name' => 'Auxiliary Services',
                'start_yr' => 2001,
                'end_yr' => 2007,
                'glevel' => 'A',
                'lastupdate' => 28,
                'data_link' => 'downloads/social_workers.pdf',
            ),
            36 => 
            array (
                'resourceid' => 'SUP5',
                'name' => 'SAP Coordinator',
                'category_name' => 'Auxiliary Services',
                'start_yr' => 2001,
                'end_yr' => 2007,
                'glevel' => 'A',
                'lastupdate' => 28,
                'data_link' => 'downloads/saps.pdf',
            ),
            37 => 
            array (
                'resourceid' => 'SUP6',
                'name' => 'Custodians',
                'category_name' => 'Auxiliary Services',
                'start_yr' => 2008,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 28,
                'data_link' => 'downloads/custodial.pdf',
            ),
            38 => 
            array (
                'resourceid' => 'SUP7',
                'name' => 'Child Nutrition',
                'category_name' => 'Auxiliary Services',
                'start_yr' => 2008,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 28,
                'data_link' => 'downloads/cns_service_allotments.pdf',
            ),
            39 => 
            array (
                'resourceid' => 'GENCOMMENTS',
                'name' => 'General Comments',
                'category_name' => 'General Comments',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'Prog',
                'lastupdate' => 17,
                'data_link' => '',
            ),
            40 => 
            array (
                'resourceid' => 'SELFALLOTTCH',
                'name' => 'Teacher Self Allotment',
                'category_name' => 'Self Allotment',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'Prog',
                'lastupdate' => 24,
                'data_link' => '',
            ),
            41 => 
            array (
                'resourceid' => 'SELFALLOTTA',
                'name' => 'Teacher Assist Self Allotment',
                'category_name' => 'Self Allotment',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'Prog',
                'lastupdate' => 24,
                'data_link' => '',
            ),
            42 => 
            array (
                'resourceid' => 'DAY10ADJTCH',
                'name' => 'Teacher 10th Day Adjustment',
                'category_name' => 'Adjustment',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'Prog',
                'lastupdate' => 24,
                'data_link' => '',
            ),
            43 => 
            array (
                'resourceid' => 'DAY10ADJTA',
                'name' => 'Teacher Assist 10th Day Adjustment',
                'category_name' => 'Adjustment',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'Prog',
                'lastupdate' => 24,
                'data_link' => '',
            ),
            44 => 
            array (
                'resourceid' => 'ADM 12',
                'name' => 'Assistant Principal Interns',
                'category_name' => 'Area Superintendent Allotments',
                'start_yr' => 2006,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 2006,
                'data_link' => 'downloads/asst_principal_inters-total.pdf',
            ),
            45 => 
            array (
                'resourceid' => 'ISD3',
                'name' => 'Sch Assistance/Athletic Director/Trainer',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'H',
                'lastupdate' => 28,
                'data_link' => 'downloads/english_planning_and_athletic_director.pdf',
            ),
            46 => 
            array (
                'resourceid' => 'ADM10',
                'name' => 'Tuition or Fund 6 Positions',
                'category_name' => 'Area Superintendent Allotments',
                'start_yr' => 2003,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 2003,
                'data_link' => 'downloads/tuition_or_fund_6-pos.pdf',
            ),
            47 => 
            array (
                'resourceid' => 'ISD 42',
                'name' => 'Middle School Foreign Language',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2011,
                'end_yr' => 2999,
                'glevel' => 'MLU',
                'lastupdate' => 2011,
                'data_link' => 'downloads/middle-foreign-language.pdf',
            ),
            48 => 
            array (
                'resourceid' => 'ISD 29',
                'name' => 'Alternative Programs',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2008,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 28,
                'data_link' => 'downloads/alt_hs_programs.pdf',
            ),
            49 => 
            array (
                'resourceid' => 'ISD53',
                'name' => 'Nova-Net ',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2009,
                'end_yr' => 2010,
                'glevel' => 'H',
                'lastupdate' => 2011,
                'data_link' => 'downloads/hs-novanet.pdf',
            ),
            50 => 
            array (
                'resourceid' => 'ISD 32',
                'name' => 'In-School Suspension',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2008,
                'end_yr' => 2010,
                'glevel' => 'A',
                'lastupdate' => 28,
                'data_link' => 'downloads/iss_teachers.pdf',
            ),
            51 => 
            array (
                'resourceid' => 'ISD8',
                'name' => 'Magnet Teacher Assistant',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 17,
                'data_link' => 'downloads/magnet_ta.pdf',
            ),
            52 => 
            array (
                'resourceid' => 'ISD16',
                'name' => 'At Risk Teacher ',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 17,
                'data_link' => 'downloads/min-comp-teacher.pdf',
            ),
            53 => 
            array (
                'resourceid' => 'ISD4',
                'name' => 'ROTC',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'H',
                'lastupdate' => 28,
                'data_link' => 'downloads/rotc.pdf',
            ),
            54 => 
            array (
                'resourceid' => 'ISD 36',
                'name' => 'Parent Liaisons',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2008,
                'end_yr' => 2011,
                'glevel' => 'A',
                'lastupdate' => 28,
                'data_link' => 'downloads/parent_liason.pdf',
            ),
            55 => 
            array (
                'resourceid' => 'ISD 31',
                'name' => 'Minimum Competency',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2008,
                'end_yr' => 2010,
                'glevel' => 'A',
                'lastupdate' => 28,
                'data_link' => 'downloads/min-comp-teacher.pdf',
            ),
            56 => 
            array (
                'resourceid' => 'ISD 34',
                'name' => 'Nova Net',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2008,
                'end_yr' => 2999,
                'glevel' => 'MH',
                'lastupdate' => 28,
                'data_link' => 'downloads/novanet-teacher.pdf',
            ),
            57 => 
            array (
                'resourceid' => 'ISD 30',
                'name' => 'Project Achieve',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2008,
                'end_yr' => 2009,
                'glevel' => 'A',
                'lastupdate' => 5,
                'data_link' => '',
            ),
            58 => 
            array (
                'resourceid' => 'ISD11',
                'name' => 'LEP Teacher Assistant',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 17,
                'data_link' => 'downloads/limited_english_proficiency_ta.pdf',
            ),
            59 => 
            array (
                'resourceid' => 'ISD 37',
                'name' => 'Special Education Teachers - Preschool',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2009,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 2009,
                'data_link' => 'downloads/preschool-special-ed-teachers.pdf',
            ),
            60 => 
            array (
                'resourceid' => 'ADM1',
                'name' => 'Principal',
                'category_name' => 'Area Superintendent Allotments',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 17,
                'data_link' => 'downloads/principal.pdf',
            ),
            61 => 
            array (
                'resourceid' => 'ISD 38',
                'name' => 'Special Education TAs - Preschool',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2009,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 2009,
                'data_link' => 'downloads/preschool-special-ed-ta.pdf',
            ),
            62 => 
            array (
                'resourceid' => 'ISD 39',
                'name' => 'Alternative Learning Centers',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2011,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 2011,
                'data_link' => 'downloads/alt-learning-center.pdf',
            ),
            63 => 
            array (
                'resourceid' => 'ISD5',
                'name' => 'Middle School Teaming',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2001,
                'end_yr' => 2999,
                'glevel' => 'MLU',
                'lastupdate' => 28,
                'data_link' => 'downloads/ms_teaming.pdf',
            ),
            64 => 
            array (
                'resourceid' => 'ISD 23',
                'name' => 'Intervention',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2008,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 28,
                'data_link' => 'downloads/intervention-total.pdf',
            ),
            65 => 
            array (
                'resourceid' => 'ADM9',
                'name' => 'Technology Assistant',
                'category_name' => 'Area Superintendent Allotments',
                'start_yr' => 2003,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 2003,
                'data_link' => 'downloads/technology_assistant.pdf',
            ),
            66 => 
            array (
                'resourceid' => 'ISD 40',
                'name' => 'Ready-to-Learn Centers',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2011,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 2011,
                'data_link' => 'downloads/rtl-centers.pdf',
            ),
            67 => 
            array (
                'resourceid' => 'ISD 41',
                'name' => 'School Collaborative Networks',
                'category_name' => 'Instructional Services Allotments',
                'start_yr' => 2011,
                'end_yr' => 2999,
                'glevel' => 'A',
                'lastupdate' => 2011,
                'data_link' => 'downloads/sch-networks.pdf',
            ),
        ));
        
        
    }
}