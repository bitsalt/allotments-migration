<?php

use Illuminate\Database\Seeder;

class SpecificReportsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('specific_reports')->delete();
        
        \DB::table('specific_reports')->insert(array (
            0 => 
            array (
                'report_id' => 2,
                'user_id' => 1,
                'app_id' => 0,
                'database' => '',
                'report_name' => '',
                'file_name' => '',
            'report_queries' => '$sql="SELECT selections.school, selections.school_name, selections.category_name,                 selections.allotment_prog_code, selections.allotment_prog_desc,                selections.allotment_type_id,                allotments.moe, allotments.conversions,  allotments.comments FROM (SELECT DISTINCT c.category_name, c.display_order,                sc.id as school_id, sc.school , sc.school_name, gr.grade_level_name,               at.id as allotment_type_id, at.allotment_prog_code, at.allotment_prog_desc, sc.school_year FROM schools sc, allotment_types at, categories c, allot_grade_levels ag, grade_levels gr WHERE at.category_id = c.category_id   AND sc.id IN ($school_str)    AND at.id IN (89, 51, 83, 79)    AND ag.allotment_type_id = at.id   AND ag.grade_level_id = gr.id   AND gr.id = sc.school_grade_level_id) AS selections LEFT OUTER JOIN allotments ON selections.allotment_type_id = allotments.allotment_type_id                        AND selections.school_id = allotments.school_id ORDER BY selections.display_order, selections.allotment_prog_code";',
            'report_code' => 'if(is_array($school_id)) { $school_str=implode(\',\',$school_id); }
$eval_2=eval($rep_data[\'report_queries\']);
$final_data=$this->db->query($sql)->fetchAll();

$this->view->final_data=$final_data;',
                'report_params' => 'school_id,year',
                'get_session_vars' => 'n',
                'q_or_c' => 'c',
                'return_as' => 'html',
                'view' => 'report/example_1.phtml',
                'created' => '2012-12-27',
            ),
            1 => 
            array (
                'report_id' => 3,
                'user_id' => 0,
                'app_id' => 0,
                'database' => 'specific_reports',
                'report_name' => 'Test Report Two',
                'file_name' => '',
                'report_queries' => '$sql="SELECT grade_levels.grade_level_name, schools.id, schools.school, 
school_name, magnet_ind, school_type.school_type_name
FROM schools
JOIN grade_levels ON schools.school_grade_level_id = grade_levels.id
JOIN school_type ON schools.school_type_id = school_type.id
WHERE schools.school_year = 2012 
AND schools.school_type_id IN ($school_type_str)  
AND schools.school_grade_level_id IN  (1,2,3,4,5)
ORDER BY grade_levels.grade_level_name, school_name LIMIT 10";',
            'report_code' => '$school_type_list=$this->req->getParam(\'school_type_id\');
if(is_array($school_type_list)) 
{ $school_type_str=implode(\',\', $school_type_list); }

# Get and generate the query string
$eval_2=eval($rep_data[\'report_queries\']);

# Now request the data from the database
$final_data=$this->db->query($sql)->fetchAll();


',
                'report_params' => 'school_type_id',
                'get_session_vars' => 'n',
                'q_or_c' => 'c',
                'return_as' => 'json',
                'view' => 'report/example_2.phtml',
                'created' => '2013-01-02',
            ),
            2 => 
            array (
                'report_id' => 4,
                'user_id' => 0,
                'app_id' => 0,
                'database' => 'allotment',
                'report_name' => 'Show Individual Resources',
                'file_name' => 'individual_with_moe',
                'report_queries' => '$sql=array
(
0=>"
SELECT selections.allotment_prog_desc, selections.grade_level_name, 
selections.school_id, selections.school, selections.school_name, 
selections.allotment_type_id, allotments.moe, allotments.conversions, allotments.comments
FROM (SELECT DISTINCT c.category_name, c.display_order as category_display_order, 
sc.id as school_id, sc.school, sc.school_name, gr.grade_level_name,
gr.display_order as grade_level_order,
at.id as allotment_type_id, at.allotment_prog_desc, sc.school_year
FROM schools sc, allotment_types at, categories c, allot_grade_levels ag, grade_levels gr
WHERE at.category_id = c.category_id
AND sc.id IN ($selectedSchool) 
AND at.id IN ($selectedResources) 
AND ag.allotment_type_id = at.id
AND ag.grade_level_id = gr.id
AND gr.school_year = $selectedYear 
AND gr.id = sc.school_grade_level_id) AS selections
LEFT OUTER JOIN allotments ON selections.allotment_type_id = allotments.allotment_type_id
AND selections.school_id = allotments.school_id 
ORDER BY selections.category_display_order, selections.allotment_prog_desc, selections.grade_level_order, selections.school_name
",

1=>"SELECT sc.id,
$day_string
FROM schools sc
WHERE sc.id IN ($selectedSchool)"
);
',
                'report_code' => '# Since it looks like we are dealing with multiple data sets here, make final multi-dim
$final_data=array(0=>array(), 1=>array(), \'mem_totals\'=>array(), \'display_str\'=>\'\');

# Correct the formatting of the $selectedSchool param
$selectedSchool=str_replace(\'-\', \',\', $selectedSchool);

# Correct the formatting of the $selectedResources param
$selectedResources=str_replace(\'-\', \',\', $selectedResources);

# Correct the formatting of the $selectedSchool param                                     // Line 10
$selectedNonSalAllotments=str_replace(\'-\', \',\', $selectedNonSalAllotments);

$go_sql="SELECT grade_level_name, display_order FROM grade_levels WHERE school_year = $selectedYear ORDER BY display_order ASC";
$order_array=$this->db->query($go_sql)->fetchAll();

# Now let\'s spend time tweaking the 2nd query. We need to generate an adequate string based on the days selected by the user.
// echo \'<pre>\'; print_r($day_select); echo \'</pre>\'; exit;
if($day_select!=\'E\')
{
$ds=\'\'; $ds_cntr=1;
$boom_size=count( ($boom=explode(\'-\', $day_select)) );
--$boom_size; array_pop($boom);
foreach($boom as $dy)                                                                     // Line 20
{
switch ($dy)
{
case \'PA\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'PA\') AS Planning"; break; }
case \'01\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'01\') AS Day1";   break; }
case \'05\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'05\') AS Day5";   break; }
case \'07\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'07\') AS Day7";   break; }
case \'10\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'10\') AS Day10";  break; }
}

# Add the commas, else the syntax will be borked!
if($ds_cntr<$boom_size) { $ds.=", \\n"; }
else                    { $ds.=""; }
++$ds_cntr;
}
$day_string=&$ds;
$this->view->show_student_totals=1;
}
else
{
$day_string=\' \'; 
$this->view->show_student_totals=0; 
}

# Grab the queries, run \'em, and grab the data we need  // Line 38
$eval_out=eval($rep_data[\'report_queries\']);
foreach($sql as $k=>$query)                                                               // Line 40
{
if($day_select==\'E\' && $k==1) { continue; }
$final_data[$k]=$this->db->query($query)->fetchAll(); 
}
$final_data[\'year\']=$selectedYearDisplay;

# Tweak the output of the second array into something a tad bit easier to use
foreach($final_data[1] as $k=>$v)
{ $final_data[\'mem_totals\'][$v[\'id\']]=$v; }                                           // Line 45
$this->view->final_data=$final_data;

$final_data[\'display_str\']=$this->view->render($rep_data[\'view\']);
unset($final_data[0], $final_data[1], $final_data[\'mem_totals\']);

# Set the year we need in the view
$this->view->selectedYearDisplay=$selectedYearDisplay;

# Before bugging out to the controller, check if the rt_ovverride prop is set and if it\'s PDF
if($rt_override==\'pdf\')
{
$this->view->rt_override=$rt_override;
$this->view->pdf=$this->pdf;
$stylesheet=file_get_contents(\'../public/css/application_pdf.css\');
}
',
                'report_params' => 'day_select',
                'get_session_vars' => 'y',
                'q_or_c' => 'c',
                'return_as' => 'json',
                'view' => 'adminreports/resources_with_comments.phtml',
                'created' => '2013-01-10',
            ),
            3 => 
            array (
                'report_id' => 5,
                'user_id' => 0,
                'app_id' => 0,
                'database' => 'allotment',
                'report_name' => 'Show all resources by school',
                'file_name' => 'resource_by_school',
                'report_queries' => '$sql=array
(
0=>"
SELECT selections.allotment_prog_desc, selections.grade_level_name, 
selections.school_id, selections.school, selections.school_name, selections.category_name, 
selections.allotment_type_id, allotments.moe, allotments.conversions, allotments.comments
FROM (SELECT DISTINCT c.category_name, c.display_order as category_display_order, 
sc.id as school_id, sc.school, sc.school_name, gr.grade_level_name,
gr.display_order as grade_level_order,
at.id as allotment_type_id, at.allotment_prog_desc, sc.school_year
FROM schools sc, allotment_types at, categories c, allot_grade_levels ag, grade_levels gr
WHERE at.category_id = c.category_id
AND sc.id IN ($selectedSchool) 
AND at.id IN ($selectedResources) 
AND ag.allotment_type_id = at.id
AND ag.grade_level_id = gr.id
AND gr.school_year = $selectedYear 
AND gr.id = sc.school_grade_level_id) AS selections
LEFT OUTER JOIN allotments ON selections.allotment_type_id = allotments.allotment_type_id
AND selections.school_id = allotments.school_id 
/* ORDER BY selections.school, selections.category_name */
ORDER BY selections.grade_level_order, selections.school_name, selections.category_display_order, selections.allotment_prog_desc
",

1=>"SELECT sc.id,
$day_string
FROM schools sc
WHERE sc.id IN ($selectedSchool)"
);


/* The first query is going to need updating so that we are grouping or ordering our results ALSO by allotment tpes */',
                'report_code' => '# Since it looks like we are dealing with multiple data sets here, make final multi-dim
$final_data=array(0=>array(), 1=>array(), \'mem_totals\'=>array(), \'display_str\'=>\'\');

# Correct the formatting of the $selectedSchool param
$selectedSchool=str_replace(\'-\', \',\', $selectedSchool);

# Correct the formatting of the $selectedResources param
$selectedResources=str_replace(\'-\', \',\', $selectedResources);

# Correct the formatting of the $selectedSchool param                                     // Line 10
$selectedNonSalAllotments=str_replace(\'-\', \',\', $selectedNonSalAllotments);

$go_sql="SELECT grade_level_name, display_order FROM grade_levels WHERE school_year = $selectedYear ORDER BY display_order ASC";
$order_array=$this->db->query($go_sql)->fetchAll();

# Now let\'s spend time tweaking the 2nd query. We need to generate an adequate string based on the days selected by the user.
if($day_select!=\'E\')
{
$ds=\'\'; $ds_cntr=1;
$boom_size=count( ($boom=explode(\'-\', $day_select)) );
--$boom_size; array_pop($boom);
foreach($boom as $dy)                                                                     // Line 20
{
switch ($dy)
{
case \'PA\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'PA\') AS Planning"; break; }
case \'01\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'01\') AS Day1";   break; }
case \'05\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'05\') AS Day5";   break; }
case \'07\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'07\') AS Day7";   break; }
case \'10\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'10\') AS Day10";  break; }
}

# Add the commas, else the syntax will be borked!
if($ds_cntr<$boom_size) { $ds.=", \\n"; }
else                    { $ds.=""; }
++$ds_cntr;
}
$day_string=&$ds;
$this->view->show_student_totals=1;
}
else
{
$day_string=\' \'; 
$this->view->show_student_totals=0; 
}

# Grab the queries, run \'em, and grab the data we need  // Line 38
$eval_out=eval($rep_data[\'report_queries\']);
// echo \'<pre>\'; print_r($sql); echo \'</pre>\'; exit;
foreach($sql as $k=>$query)                                                               // Line 40
{
if($day_select==\'E\' && $k==1) { continue; }
$final_data[$k]=$this->db->query($query)->fetchAll(); 
}

# Tweak the output of the second array into something a tad bit easier to use
foreach($final_data[1] as $k=>$v)
{ $final_data[\'mem_totals\'][$v[\'id\']]=$v; }                                           // Line 45

# Don\'t forget to set the year for the view
$final_data[\'year\']=$selectedYearDisplay;

# Load up the view with yet more data
$this->view->final_data=$final_data;
$final_data[\'display_str\']=$this->view->render($rep_data[\'view\']);

# Now get rid of the luggage
foreach(array(0, 1, \'mem_totals\') as $die)
{ unset($final_data[$die]); }

# Before bugging out to the controller, check if the rt_ovverride prop is set and if it\'s PDF
if($rt_override==\'pdf\')
{
$this->view->rt_override=$rt_override;
$this->view->pdf=$this->pdf;
$stylesheet=file_get_contents(\'../public/css/application_pdf.css\');
}
',
                'report_params' => 'day_select',
                'get_session_vars' => 'y',
                'q_or_c' => 'c',
                'return_as' => 'json',
                'view' => 'adminreports/resources_by_school.phtml',
                'created' => '2013-01-19',
            ),
            4 => 
            array (
                'report_id' => 6,
                'user_id' => 0,
                'app_id' => 1,
                'database' => 'allotment1',
                'report_name' => 'teacher_allotment_school',
                'file_name' => 'teacher_allotment_school',
                'report_queries' => '$sql=array(
\'full\'=>"
SELECT gr.display_order, gr.grade_level_name, sc.school, 
sc.school_name,d.day_order, d.report_days,

/* New */
IFNULL(ROUND((TRUNCATE(SUM(m.studentcount/
/* new for 2013: replace g.moe_divisor with override1 
when school is multi-track year-round
from school_type table  */
(CASE WHEN 
(SELECT override1 FROM school_type
WHERE id = sc.school_type_id) = \'Y\'
THEN g.moe_divisor_override1
ELSE g.moe_divisor
END)),0))
* (SELECT parm_num FROM newparms 
WHERE parm_name = \'Teacher MOE multiplier\'AND school_year = $selectedYear),2),0) 
AS teacher_moe

/* Old */
/* *******************************************************************
IFNULL(ROUND((TRUNCATE(SUM(m.studentcount/g.moe_divisor),0))
* (SELECT parm_num FROM newparms 
WHERE parm_name = \'Teacher MOE multiplier\'),2),0) 
AS teacher_moe
******************************************************************* */

FROM schools sc 

LEFT OUTER JOIN (SELECT order_id as day_order, report_days 
FROM reporting_days
WHERE school_year = $selectedYear
UNION SELECT -1 AS day_order, \'PA\' AS report_days FROM DUAL) d 
ON d.report_days IN (\'PA\',\'01\', \'05\', \'07\', \'10\')


LEFT OUTER JOIN membership m ON sc.id = m.school_id  
AND m.day_proj_plan_ind = d.report_days
AND m.school_year = $selectedYear 
LEFT OUTER JOIN grades g ON g.grade = m.grade
AND m.school_year = g.school_year
LEFT OUTER JOIN grade_levels gr ON gr.id = sc.school_grade_level_id
WHERE sc.id IN ($selectedSchool) /*selected schools*/
GROUP BY gr.display_order, gr.grade_level_name, sc.school, sc.school_name, d.day_order, d.report_days
UNION 
SELECT gr.display_order, gr.grade_level_name, sc.school, sc.school_name, 0, 
\'SA\' AS day_proj_plan_ind,  IFNULL(a.moe,0) as moe
FROM schools sc 
LEFT OUTER JOIN allotment_types atp ON atp.allotment_prog_code = \'SELFALLOTTCH\'
AND atp.school_year = $selectedYear  /*selected year*/
LEFT OUTER JOIN allotments a ON sc.id = a.school_id  
AND a.allotment_type_id = atp.id 
LEFT OUTER JOIN grade_levels gr on gr.id = sc.school_grade_level_id
WHERE sc.id IN ($selectedSchool)          /*selected schools*/
ORDER BY display_order, school_name, day_order", 

\'assist\'=>"
SELECT gr.display_order, gr.grade_level_name, sc.school, sc.school_name, d.day_order, d.report_days,
IFNULL(ROUND((TRUNCATE(SUM(m.studentcount/
/* new for 2013: replace g.ta_divisor with override1 
when school is multi-track year-round
from school_type table  */
(CASE WHEN 
(SELECT override1 FROM school_type
WHERE id = sc.school_type_id) = \'Y\'
THEN g.ta_divisor_override1
ELSE g.ta_divisor
END) ),0))
* (SELECT parm_num FROM newparms
WHERE parm_name = \'TA MOE multiplier\'
AND school_year = $selectedYear),2),0) 
AS ta_moe
FROM schools sc
LEFT OUTER JOIN (SELECT order_id as day_order, report_days 
FROM reporting_days
WHERE school_year = $selectedYear
UNION SELECT -1 AS day_order, \'PA\' AS report_days FROM DUAL) d 
ON d.report_days IN (\'PA\',\'01\', \'05\', \'07\', \'10\')
LEFT OUTER JOIN membership m ON sc.id = m.school_id 
AND m.day_proj_plan_ind = d.report_days
AND m.school_year = $selectedYear
LEFT OUTER JOIN grades g ON g.grade = m.grade
AND m.school_year = g.school_year
LEFT OUTER JOIN grade_levels gr ON gr.id = sc.school_grade_level_id
WHERE sc.id IN ($selectedSchool)  /*selected schools*/
GROUP BY gr.display_order, gr.grade_level_name, sc.school, sc.school_name, d.day_order, d.report_days
UNION
SELECT gr.display_order, gr.grade_level_name, sc.school, sc.school_name, 0,
\'SA\' AS day_proj_plan_ind, IFNULL(a.moe,0) as moe
FROM schools sc
LEFT OUTER JOIN allotment_types atp ON atp.allotment_prog_code = \'SELFALLOTTA\'
AND atp.school_year = $selectedYear  /*selected year*/
LEFT OUTER JOIN allotments a ON sc.id = a.school_id 
AND a.allotment_type_id = atp.id
LEFT OUTER JOIN grade_levels gr on gr.id = sc.school_grade_level_id
WHERE sc.id IN ($selectedSchool)              /*selected schools*/
ORDER BY display_order, school_name, day_order",

\'student_mem\'=>
"SELECT sc.id,
$day_string
FROM schools sc WHERE sc.id IN ($selectedSchool)"
);


/*
SELECT gr.display_order, gr.grade_level_name, sc.school, 
sc.school_name,d.day_order, d.report_days, 
IFNULL(ROUND((TRUNCATE(SUM(m.studentcount/g.moe_divisor),0))
* (SELECT parm_num FROM newparms 
WHERE parm_name = \'Teacher MOE multiplier\'
AND school_year = 2012),2),0) 
AS teacher_moe
FROM schools sc 
LEFT OUTER JOIN (SELECT order_id as day_order, report_days 
FROM reporting_days
WHERE school_year = 2012
UNION SELECT -1 AS day_order, \'PA\' AS report_days FROM DUAL) d 
ON d.report_days IN (\'PA\',\'01\', \'05\', \'07\', \'10\')
LEFT OUTER JOIN membership m ON sc.id = m.school_id  
AND m.day_proj_plan_ind = d.report_days
AND m.school_year = 2012
LEFT OUTER JOIN grades g ON g.grade = m.grade
AND m.school_year = g.school_year
LEFT OUTER JOIN grade_levels gr ON gr.id = sc.school_grade_level_id
WHERE sc.id IN (3)
GROUP BY gr.display_order, gr.grade_level_name, sc.school, sc.school_name, d.day_order, d.report_days
*/
',
                        'report_code' => '# Since it looks like we are dealing with multiple data sets here, make final multi-dim
$final_data=array(\'mem_totals\'=>array(), \'display_str\'=>\'\');

# Correct the formatting of the $selectedSchool param
$selectedSchool=str_replace(\'-\', \',\', $selectedSchool);

# Correct the formatting of the $selectedResources param
$selectedResources=str_replace(\'-\', \',\', $selectedResources);

# Correct the formatting of the $selectedSchool param
$selectedNonSalAllotments=str_replace(\'-\', \',\', $selectedNonSalAllotments);

# Now let\'s spend time tweaking the 2nd query. We need to generate an adequate string based on the days selected by the user.
if($day_select!=\'E\')
{
$ds=\'\'; $ds_cntr=1;
$boom_size=count( ($boom=explode(\'-\', $day_select)) );
--$boom_size; array_pop($boom);
foreach($boom as $dy)
{
switch ($dy)
{
case \'PA\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'PA\') AS Planning"; break; }
case \'01\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'01\') AS Day1";   break; }
case \'05\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'05\') AS Day5";   break; }
case \'07\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'07\') AS Day7";   break; }
case \'10\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'10\') AS Day10";  break; }
}

# Add the commas, else the syntax will be borked!
if($ds_cntr<$boom_size) { $ds.=", \\n"; }
else                    { $ds.=""; }
++$ds_cntr;
}
$day_string=&$ds;
$this->view->show_student_totals=1;
}
else
{
$day_string=\' \';
$this->view->show_student_totals=0;
}

# Grab the queries, run \'em, and grab the data we need
$eval_out=eval($rep_data[\'report_queries\']);

$final_data[$teach_type]=$this->db->query($sql[$teach_type])->fetchAll();

// JM - Add in schedule assistance hours as necessary
if($teach_type == \'full\') {
$scheduleAssistArr = array();
$reportDaysWithScheduleAssistance = array(\'PA\',\'01\',\'05\',\'07\',\'10\');
foreach($final_data[\'full\'] as $id => $data) {
if(empty($scheduleAssistArr[$data[\'school\']])) {
$scheduleAssistArr[$data[\'school\']] = Application_Model_School::getScheduleAssistanceHoursBySchoolNum($data[\'school\']);
}

if(in_array($data[\'report_days\'], $reportDaysWithScheduleAssistance)) {

$final_data[\'full\'][$id][\'teacher_moe\'] += $scheduleAssistArr[$data[\'school\']];
}
}
}

if($day_string!==\' \')
{ $final_data[\'student_mem\']=$this->db->query($sql[\'student_mem\'])->fetchAll(); }

// JM - intercept school years after 2015, replace data in \'assist\' block
if(is_array($final_data[\'assist\'])) {
//$currYear = $this->schoolYearModel->getCurrentSchoolYear();
if($selectedYear > 2015) {
$tmpArr = $final_data[\'assist\'];
foreach($tmpArr as $key => $tmp) {
$schoolId = $this->schoolModel->getSchoolId($tmp[\'school\'], $selectedYear);
$moe = $this->memModel->getNewTA($selectedYear, $schoolId, $tmp[\'report_days\']);
$final_data[\'assist\'][$key][\'ta_moe\'] = $moe[0][\'moe\'];
}
}
}

# One more query to run since school id wasn\'t included in the main query
$legend_sql="SELECT id, school FROM `schools` sc WHERE sc.id IN($selectedSchool)";
foreach(($this->db->query($legend_sql)->fetchAll()) as $k=>$v)
{ $final_data[\'school_legend\'][$v[\'school\']]=$v[\'id\']; }

# Tweak the output of the \'sutdent_mem\' data set into something more useable
if($day_string!==\' \')
{
foreach($final_data[\'student_mem\'] as $k=>$v)  { $final_data[\'mem_totals\'][$v[\'id\']]=$v; }
unset($final_data[\'student_mem\']);
}

# Don\'t forget to set the year for the view
$final_data[\'year\']=$selectedYearDisplay;

# Load up the view with yet more data
$this->view->final_data=$final_data;
$final_data[\'display_str\']=$this->view->render($rep_data[\'view\']);

# Since we don\'t need the mem_totals element anymore, let...
unset($final_data[\'mem_totals\']);

# Before bugging out to the controller, check if the rt_ovverride prop is set and if it\'s PDF
if($rt_override==\'pdf\')
{
$this->view->rt_override=$rt_override;
$this->view->pdf=$this->pdf;
$stylesheet=file_get_contents(\'../public/css/application_pdf.css\');
}',
                        'report_params' => 'teach_type,day_select',
                        'get_session_vars' => 'y',
                        'q_or_c' => 'c',
                        'return_as' => 'JSON',
                        'view' => 'adminreports/allotments_for_teachers.phtml',
                        'created' => '2013-01-28',
                    ),
                    5 => 
                    array (
                        'report_id' => 7,
                        'user_id' => 0,
                        'app_id' => 1,
                        'database' => 'allotments',
                        'report_name' => 'Non-Salary Allotment Report by School',
                        'file_name' => 'non_sal_allot_rep_by_school',
                        'report_queries' => '$sql=array
(
"primary"=>"SELECT gr.display_order, gr.grade_level_name, sc.school_name, 
sc.school,
IFNULL(ROUND((TRUNCATE(SUM(m.studentcount/
/* new for 2013: replace g.moe_divisor with override1 
when school is multi-track year-round
from school_type table  */
(CASE WHEN 
(SELECT override1 FROM school_type
WHERE id = sc.school_type_id) = \'Y\'
THEN g.moe_divisor_override1
ELSE g.moe_divisor
END)
),0))
* (SELECT parm_num FROM newparms 
WHERE parm_name = \'Teacher MOE multiplier\'
AND school_year = $selectedYear),0),0) 
AS teacher_moe,
IFNULL(ROUND((TRUNCATE(SUM(m.studentcount/
/* new for 2013: replace g.ta_divisor with override1 
when school is multi-track year-round
from school_type table  */
(CASE WHEN 
(SELECT override1 FROM school_type
WHERE id = sc.school_type_id) = \'Y\'
THEN g.ta_divisor_override1
ELSE g.ta_divisor
END)	
),0))
* (SELECT parm_num FROM newparms 
WHERE parm_name = \'TA MOE multiplier\'
AND school_year = $selectedYear),2),0) 
AS ta_moe
FROM schools sc 
LEFT OUTER JOIN membership m ON sc.id = m.school_id  
AND m.day_proj_plan_ind = \'PA\'
LEFT OUTER JOIN grades g ON m.grade = g.grade
AND g.school_year = $selectedYear
LEFT OUTER JOIN grade_levels gr ON gr.id = sc.school_grade_level_id
WHERE sc.id IN ($selectedSchool)          /*selected schools*/
GROUP BY gr.display_order, gr.grade_level_name, sc.school_name, sc.school", 

\'student_mem\'=>
"SELECT sc.id,
$day_string
FROM schools sc WHERE sc.id IN ($selectedSchool)"
);

/*
"primary"=>"SELECT gr.display_order, gr.grade_level_name, sc.school, 
sc.school_name,
IFNULL(ROUND((TRUNCATE(SUM(m.studentcount/g.moe_divisor),0))
* (SELECT parm_num FROM newparms 
WHERE parm_name = \'Teacher MOE multiplier\'),0),0) 
AS teacher_moe,
IFNULL(ROUND((TRUNCATE(SUM(m.studentcount/g.ta_divisor),0))
* (SELECT parm_num FROM newparms 
WHERE parm_name = \'TA MOE multiplier\'),2),0) 
AS ta_moe
FROM schools sc 
LEFT OUTER JOIN membership m ON sc.id = m.school_id  
AND m.day_proj_plan_ind = \'PA\'
LEFT OUTER JOIN grades g ON m.grade = g.grade
LEFT OUTER JOIN grade_levels gr ON gr.id = sc.school_grade_level_id
WHERE sc.id IN ($selectedSchool)
GROUP BY gr.display_order, gr.grade_level_name, sc.school, sc.school_name", 

*/',
                        'report_code' => '# Since it looks like we are dealing with multiple data sets here, make final multi-dim
$final_data=array(\'mem_totals\'=>array(), \'display_str\'=>\'\');

# Correct the formatting of the $selectedSchool param
$selectedSchool=str_replace(\'-\', \',\', $selectedSchool);

# Correct the formatting of the $selectedResources param
$selectedResources=str_replace(\'-\', \',\', $selectedResources);

# Correct the formatting of the $selectedSchool param
$selectedNonSalAllotments=str_replace(\'-\', \',\', $selectedNonSalAllotments);

# Now let\'s spend time tweaking the 2nd query. We need to generate an adequate string based on the days selected by the user.
if($day_select!=\'E\')
{
$ds=\'\'; $ds_cntr=1;
$boom_size=count( ($boom=explode(\'-\', $day_select)) );
--$boom_size; array_pop($boom);
foreach($boom as $dy)
{
switch ($dy)
{
case \'PA\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'PA\') AS Planning"; break; }
case \'01\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'01\') AS Day1";   break; }
case \'05\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'05\') AS Day5";   break; }
case \'07\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'07\') AS Day7";   break; }
case \'10\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'10\') AS Day10";  break; }
}

# Add the commas, else the syntax will be borked!
if($ds_cntr<$boom_size) { $ds.=", \\n"; }
else                    { $ds.=""; }
++$ds_cntr;
}
$day_string=&$ds;
$this->view->show_student_totals=1;
}
else
{
$day_string=\' \';
$this->view->show_student_totals=0;
}

# Grab the queries, run \'em, and grab the data we need
$eval_out=eval($rep_data[\'report_queries\']);

if($selectedYear > 2015) {
# JM - edit report data before sending it to the view
$report_data=$this->db->query($sql[\'primary\'])->fetchAll();

# JM - create school model object for use below
$schoolModel = new Application_Model_Schools();

# JM - create an array to store TA data for each day used and drop into final data array
# JM - Day indicator (3rd arg) is a dummy value, but is required by this process.
foreach($report_data as $rid => $resource) {
$sid = $schoolModel->getSchoolId($resource[\'school\'], $selectedYear);
$report_data[$rid] = $this->memModel->getModTAConversionSummary($selectedYear, $sid, \'00\', $resource, 1);
}

// JM - Add in schedule assistance hours as necessary
foreach($report_data as $id => $data) {
$scheduleAssistArr[$data[\'school\']] = Application_Model_School::getScheduleAssistanceHoursBySchoolNum($data[\'school\']);
$report_data[$id][\'teacher_moe\'] += $scheduleAssistArr[$data[\'school\']];
}

$this->view->report_data = $report_data;
}
else {
$this->view->report_data = $this->db->query($sql[\'primary\'])->fetchAll();
}

if($day_string!==\' \')
{
$final_data[\'student_mem\']=$this->db->query($sql[\'student_mem\'])->fetchAll();

// JM - Add in schedule assistance hours as necessary
if($teach_type == \'full\') {
$scheduleAssistArr = array();
$reportDaysWithScheduleAssistance = array(\'PA\',\'01\',\'05\',\'07\',\'10\');
foreach($final_data[\'full\'] as $id => $data) {
if(empty($scheduleAssistArr[$data[\'school\']])) {
$scheduleAssistArr[$data[\'school\']] = Application_Model_School::getScheduleAssistanceHoursBySchoolNum($data[\'school\']);
}

if(in_array($data[\'report_days\'], $reportDaysWithScheduleAssistance)) {

$final_data[\'full\'][$id][\'teacher_moe\'] += $scheduleAssistArr[$data[\'school\']];
}
}
}
# One more query to run since school id wasn\'t included in the main query
$legend_sql="SELECT id, school FROM `schools` sc WHERE sc.id IN($selectedSchool)";
foreach(($this->db->query($legend_sql)->fetchAll()) as $k=>$v)
{
$final_data[\'school_legend\'][$v[\'school\']]=$v[\'id\'];
}

# Tweak the output of the \'sutdent_mem\' data set into something more useable
foreach($final_data[\'student_mem\'] as $k=>$v)
{ $final_data[\'mem_totals\'][$v[\'id\']]=$v; }
unset($final_data[\'student_mem\']);
}

# Don\'t forget to set the year for the view
$final_data[\'year\']=$selectedYearDisplay;

# Load up the view with yet more data
$this->view->final_data=$final_data;
$final_data[\'display_str\']=$this->view->render($rep_data[\'view\']);

# Get rid of the mem_totals element
unset($final_data[\'mem_totals\']);

# Before bugging out to the controller, check if the rt_ovverride prop is set and if it\'s PDF
if($rt_override==\'pdf\')
{
$this->view->rt_override=$rt_override;
$this->view->pdf=$this->pdf;
$stylesheet=file_get_contents(\'../public/css/application_pdf.css\');
}',
                        'report_params' => 'day_select',
                        'get_session_vars' => 'y',
                        'q_or_c' => 'c',
                        'return_as' => 'json',
                        'view' => 'adminreports/teacher_allotment_summary.phtml',
                        'created' => '2013-02-09',
                    ),
                    6 => 
                    array (
                        'report_id' => 8,
                        'user_id' => 0,
                        'app_id' => 0,
                        'database' => 'allotments',
                        'report_name' => 'Variance Summary Report',
                        'file_name' => 'variance_summary_report',
                        'report_queries' => '$sql=array(
0=>"SELECT lv.display_order, lv.grade_level_name, sc.school, sc.school_name, \'00\' as report_days,
(IFNULL(plan.teacher_moe,0) + IFNULL(satch.moe,0) + IFNULL(d10tch.moe,0)) AS teacher_allot,
(IFNULL(plan.ta_moe,0) + IFNULL(sata.moe,0) + IFNULL(d10ta.moe,0)) AS ta_allot,
IFNULL(d10tch.moe,0) AS teacher_var,
IFNULL(d10ta.moe,0) AS ta_var
FROM schools sc
LEFT OUTER JOIN grade_levels lv ON sc.school_grade_level_id = lv.id
LEFT OUTER JOIN 
(SELECT m.school_id,
IFNULL(ROUND((TRUNCATE(SUM(m.studentcount/
(CASE WHEN 
(SELECT override1 FROM school_type
WHERE id = (SELECT school_type_id FROM schools  
WHERE id = m.school_id)) = \'Y\'
THEN g.moe_divisor_override1
ELSE g.moe_divisor
END)
),0))
* (SELECT parm_num FROM newparms 
WHERE parm_name = \'Teacher MOE multiplier\'
AND school_year = $selectedYear),0),0) 
AS teacher_moe,
IFNULL(ROUND((TRUNCATE(SUM(m.studentcount/
(CASE WHEN 
(SELECT override1 FROM school_type
WHERE id = (SELECT school_type_id FROM schools  
WHERE id = m.school_id)) = \'Y\'
THEN g.ta_divisor_override1
ELSE g.ta_divisor
END)
),0))
* (SELECT parm_num FROM newparms 
WHERE parm_name = \'TA MOE multiplier\'
AND school_year = $selectedYear),2),0) 
AS ta_moe
FROM membership m 
LEFT OUTER JOIN grades g ON m.grade = g.grade
AND g.school_year = $selectedYear
WHERE m.day_proj_plan_ind = \'PA\'
AND m.school_id IN ($selectedSchool) /*selected schools*/
AND m.school_year = $selectedYear 
GROUP BY m.school_id) AS plan ON plan.school_id = sc.id
LEFT OUTER JOIN 
(SELECT a.school_id, ap.id, a.moe
FROM allotments a
JOIN allotment_types ap ON ap.id = a.allotment_type_id
AND allotment_prog_code = \'SELFALLOTTCH\'
WHERE a.school_id IN ($selectedSchool) /*selected schools*/) 
AS satch ON satch.school_id = sc.id
LEFT OUTER JOIN 
(SELECT a.school_id, ap.id, a.moe
FROM allotments a
JOIN allotment_types ap ON ap.id = a.allotment_type_id
AND allotment_prog_code = \'SELFALLOTTA\'
WHERE a.school_id IN ($selectedSchool) /*selected schools*/) 
AS sata ON sata.school_id = sc.id
LEFT OUTER JOIN 
(SELECT a.school_id, ap.id, a.moe
FROM allotments a
JOIN allotment_types ap ON ap.id = a.allotment_type_id
AND allotment_prog_code = \'DAY10TCH\'
WHERE a.school_id IN ($selectedSchool) /*selected schools*/) 
AS d10tch ON d10tch.school_id = sc.id
LEFT OUTER JOIN 
(SELECT a.school_id, ap.id, a.moe
FROM allotments a
JOIN allotment_types ap ON ap.id = a.allotment_type_id
AND allotment_prog_code = \'DAY10TA\'
WHERE a.school_id IN ($selectedSchool) /*selected schools*/) 
AS d10ta ON d10ta.school_id = sc.id
WHERE sc.id IN ($selectedSchool) /*selected schools*/
UNION
SELECT lv.display_order, lv.grade_level_name, sc.school, sc.school_name, r.report_days,
IFNULL(days.teacher_moe,0) AS teacher_allot,
IFNULL(days.ta_moe,0) AS ta_allot, 
(IFNULL(days.teacher_moe,0)- IFNULL(plan.teacher_moe,0) - IFNULL(satch.moe,0) - IFNULL(d10tch.moe,0)) AS teacher_var,
(IFNULL(days.ta_moe,0) - IFNULL(plan.ta_moe,0) - IFNULL(sata.moe,0) - IFNULL(d10ta.moe,0)) AS ta_var
FROM schools sc
RIGHT JOIN reporting_days r ON r.school_year = $selectedYear
LEFT OUTER JOIN grade_levels lv ON sc.school_grade_level_id = lv.id
LEFT OUTER JOIN 
(SELECT m.school_id,
IFNULL(ROUND((TRUNCATE(SUM(m.studentcount/
(CASE WHEN 
(SELECT override1 FROM school_type
WHERE id = (SELECT school_type_id FROM schools  
WHERE id = m.school_id)) = \'Y\'
THEN g.moe_divisor_override1
ELSE g.moe_divisor
END)
),0))
* (SELECT parm_num FROM newparms 
WHERE parm_name = \'Teacher MOE multiplier\' AND school_year = \'$selectedYear\'),0),0) 
AS teacher_moe,
IFNULL(ROUND((TRUNCATE(SUM(m.studentcount/
(CASE WHEN 
(SELECT override1 FROM school_type
WHERE id = (SELECT school_type_id FROM schools  
WHERE id = m.school_id)) = \'Y\'
THEN g.ta_divisor_override1
ELSE g.ta_divisor
END)
),0))
* (SELECT parm_num FROM newparms 
WHERE parm_name = \'TA MOE multiplier\' AND school_year = $selectedYear),2),0) 
AS ta_moe
FROM membership m 
LEFT OUTER JOIN grades g ON m.grade = g.grade
AND g.school_year = $selectedYear
WHERE m.day_proj_plan_ind = \'PA\'
AND m.school_id IN ($selectedSchool) /*selected schools*/
AND m.school_year = $selectedYear
GROUP BY m.school_id) AS plan ON plan.school_id = sc.id
LEFT OUTER JOIN 
(SELECT a.school_id, ap.id, a.moe
FROM allotments a
JOIN allotment_types ap ON ap.id = a.allotment_type_id
AND allotment_prog_code = \'SELFALLOTTCH\'
WHERE a.school_id IN ($selectedSchool) /*selected schools*/) 
AS satch ON satch.school_id = sc.id
LEFT OUTER JOIN 
(SELECT a.school_id, ap.id, a.moe
FROM allotments a
JOIN allotment_types ap ON ap.id = a.allotment_type_id
AND allotment_prog_code = \'SELFALLOTTA\'
WHERE a.school_id IN ($selectedSchool) /*selected schools*/) 
AS sata ON sata.school_id = sc.id
LEFT OUTER JOIN 
(SELECT a.school_id, ap.id, a.moe
FROM allotments a
JOIN allotment_types ap ON ap.id = a.allotment_type_id
AND allotment_prog_code = \'DAY10TCH\'
WHERE a.school_id IN ($selectedSchool) /*selected schools*/) 
AS d10tch ON d10tch.school_id = sc.id
LEFT OUTER JOIN 
(SELECT a.school_id, ap.id, a.moe
FROM allotments a
JOIN allotment_types ap ON ap.id = a.allotment_type_id
AND allotment_prog_code = \'DAY10TA\'
WHERE a.school_id IN ($selectedSchool) /*selected schools*/) 
AS d10ta ON d10ta.school_id = sc.id
LEFT OUTER JOIN 
(SELECT m.school_id, m.day_proj_plan_ind,
IFNULL(ROUND((TRUNCATE(SUM(m.studentcount/
(CASE WHEN 
(SELECT override1 FROM school_type
WHERE id = (SELECT school_type_id FROM schools  
WHERE id = m.school_id)) = \'Y\'
THEN g.moe_divisor_override1
ELSE g.moe_divisor
END)
),0))
* (SELECT parm_num FROM newparms 
WHERE parm_name = \'Teacher MOE multiplier\' AND school_year = \'$selectedYear\'),0),0) 
AS teacher_moe,
IFNULL(ROUND((TRUNCATE(SUM(m.studentcount/
(CASE WHEN 
(SELECT override1 FROM school_type
WHERE id = (SELECT school_type_id FROM schools  
WHERE id = m.school_id)) = \'Y\'
THEN g.ta_divisor_override1
ELSE g.ta_divisor
END)
),0))
* (SELECT parm_num FROM newparms 
WHERE parm_name = \'TA MOE multiplier\' AND school_year = \'$selectedYear\'),2),0) 
AS ta_moe
FROM membership m
LEFT OUTER JOIN grades g ON m.grade = g.grade
AND g.school_year = $selectedYear
WHERE m.school_id IN ($selectedSchool) /*selected schools*/
AND m.day_proj_plan_ind IN (\'01\', \'05\', \'07\', \'10\')
AND m.school_year = $selectedYear
GROUP BY m.school_id, m.day_proj_plan_ind) AS days ON days.school_id = sc.id
AND days.day_proj_plan_ind = r.report_days
WHERE sc.id IN ($selectedSchool) /*selected schools*/
ORDER BY display_order, school_name, report_days",

1=>"SELECT sc.id,
(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'PA\') AS Planning, 
(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'01\') AS Day1, 
(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'05\') AS Day5, 
(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'07\') AS Day7, 
(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'10\') AS Day10 
FROM schools sc
WHERE sc.id IN ($selectedSchool)", 

2=>"SELECT school, id FROM schools WHERE school_year = $selectedYear"
);',
                                                                                'report_code' => '# Since it looks like we are dealing with multiple data sets here, make final multi-dim
$final_data=array(0=>array(), 1=>array(), 2=>array(), \'mem_totals\'=>array(), \'display_str\'=>\'\');

# Correct the formatting of the $selectedSchool param
$selectedSchool=str_replace(\'-\', \',\', $selectedSchool);

# Correct the formatting of the $selectedResources param
$selectedResources=str_replace(\'-\', \',\', $selectedResources);

# Correct the formatting of the $selectedSchool param                                     // Line 10
$selectedNonSalAllotments=str_replace(\'-\', \',\', $selectedNonSalAllotments);


# Massage the selected day info into something we can use
if($day_select!=\'E\')
{
$boom=explode(\'-\', $day_select);
array_pop($boom);
$this->view->selected_days=$boom;
foreach($boom as $bit) { $selectedDays.="\'$bit\',";}
$selectedDays=substr($selectedDays, 0, strlen($selectedDays)-1);
$this->view->selectedDays=$selectedDays;
}
else
{ $this->view->selectedDays=0; }

# Grab the queries, run \'em, and grab the data we need
$eval_out=eval($rep_data[\'report_queries\']);
foreach($sql as $k=>$query)
{ $final_data[$k]=$this->db->query($query)->fetchAll(); }
$final_data[\'year\']=$selectedYearDisplay;

# Tweak the output of the second array into something a tad bit easier to use
foreach($final_data[1] as $k=>$v)
{ $final_data[\'mem_totals\'][$v[\'id\']]=$v; }

# Let\'s also tweak the 3rd query results
foreach($final_data[2] as $k=>$v)
{ $final_data[\'legend\'][$v[\'school\']]=$v[\'id\']; }

if($selectedYear > 2015) {
# JM - create school model object for use below
$schoolModel = new Application_Model_Schools();

# JM - create an array to store TA data for each day used and drop into final data array
$taDayArray = array(\'01\',\'05\',\'07\',\'10\');
foreach($final_data[0] as $rid => $resource) {
$sid = $schoolModel->getSchoolId($resource[\'school\'], $selectedYear);
if(in_array($resource[\'report_days\'], $taDayArray)) {
$final_data[0][$rid] = $this->memModel->getModTA($selectedYear, $sid, $resource[\'report_days\'], $resource);
}
else if($resource[\'report_days\'] == \'00\') {
$final_data[0][$rid] = $this->memModel->getModTA($selectedYear, $sid, $resource[\'report_days\'], $resource, 1);
}
}
}

// JM - Add in schedule assistance hours as necessary
$scheduleAssistArr = array();
$reportDaysWithScheduleAssistance = array(\'00\',\'01\',\'05\',\'07\',\'10\');
foreach($final_data[0] as $id => $data) {
if(empty($scheduleAssistArr[$data[\'school\']])) {
$scheduleAssistArr[$data[\'school\']] = Application_Model_School::getScheduleAssistanceHoursBySchoolNum($data[\'school\']);
}

if(in_array($data[\'report_days\'], $reportDaysWithScheduleAssistance)) {
$final_data[0][$id][\'teacher_allot\'] += $scheduleAssistArr[$data[\'school\']];
}
}

# Stuff the goods into the view
$this->view->final_data=$final_data;

$final_data[\'display_str\']=$this->view->render($rep_data[\'view\']);

# Clean up things we don\'t need to send off to the browser
unset($final_data[0], $final_data[1], $final_data[2], $final_data[\'mem_totals\']);

# Set the year we need in the view
$this->view->selectedYearDisplay=$selectedYearDisplay;

# Before bugging out to the controller, check if the rt_ovverride prop is set and if it\'s PDF
if($rt_override==\'pdf\')
{
$this->view->rt_override=$rt_override;
$this->view->pdf=$this->pdf;
$stylesheet=file_get_contents(\'../public/css/application_pdf.css\');
}',
                                                                                'report_params' => 'day_select',
                                                                                'get_session_vars' => 'y',
                                                                                'q_or_c' => 'c',
                                                                                'return_as' => 'JSON',
                                                                                'view' => 'adminreports/variance_summary_report.phtml',
                                                                                'created' => '2013-03-14',
                                                                            ),
                                                                            7 => 
                                                                            array (
                                                                                'report_id' => 9,
                                                                                'user_id' => 0,
                                                                                'app_id' => 0,
                                                                                'database' => 'allotments',
                                                                                'report_name' => 'Teacher T/A Conversion',
                                                                                'file_name' => 'teacher_ta_conversion_summary',
                                                                                'report_queries' => '$sql="SELECT gr.display_order, gr.grade_level_name, sc.school_name, 
sc.school, IFNULL(m.day_proj_plan_ind,0) as report_day,
IFNULL(ROUND((TRUNCATE(SUM(m.studentcount/
/* new for 2013: replace g.moe_divisor with override1 
when school is multi-track year-round
from school_type table  */
(CASE WHEN 
(SELECT override1 FROM school_type
WHERE id = sc.school_type_id) = \'Y\'
THEN g.moe_divisor_override1
ELSE g.moe_divisor
END)	   
),0))
* (SELECT parm_num FROM newparms 
WHERE parm_name = \'Teacher MOE multiplier\'
AND school_year = $selectedYear ),0),0) 
AS teacher_moe,
IFNULL(ROUND((TRUNCATE(SUM(m.studentcount/
/* new for 2013: replace g.moe_divisor with override1 
when school is multi-track year-round
from school_type table  */
(CASE WHEN 
(SELECT override1 FROM school_type
WHERE id = sc.school_type_id) = \'Y\'
THEN g.ta_divisor_override1
ELSE g.ta_divisor
END)	   
),0))
* (SELECT parm_num FROM newparms 
WHERE parm_name = \'TA MOE multiplier\'
AND school_year = $selectedYear),2),0) 
AS ta_moe, 
convtch.moe as teacher_conv_moe,
convta.moe as ta_conv_moe
FROM schools sc 
LEFT OUTER JOIN grade_levels gr ON gr.id = sc.school_grade_level_id
LEFT OUTER JOIN membership m ON sc.id = m.school_id  
AND m.school_year = $selectedYear
AND m.day_proj_plan_ind = 
IFNULL((SELECT max(day_proj_plan_ind) FROM membership m2
WHERE m2.school_id = m.school_id 
AND m2.day_proj_plan_ind IN (\'01\', \'05\', \'07\', \'10\')),\'PA\')
LEFT OUTER JOIN grades g ON m.grade = g.grade
AND g.school_year = $selectedYear
LEFT OUTER JOIN 
(SELECT a.school_id, ap.id, a.moe
FROM allotments a
JOIN allotment_types ap ON ap.id = a.allotment_type_id
AND allotment_prog_code = \'CONVTCH\'
WHERE a.school_id IN ($selectedSchool) /*selected schools*/) 
AS convtch ON convtch.school_id = sc.id
LEFT OUTER JOIN 
(SELECT a.school_id, ap.id, a.moe
FROM allotments a
JOIN allotment_types ap ON ap.id = a.allotment_type_id
AND allotment_prog_code = \'CONVTA\'
WHERE a.school_id IN ($selectedSchool) /*selected schools*/) 
AS convta ON convta.school_id = sc.id
WHERE sc.id IN ($selectedSchool)          /*selected schools*/
GROUP BY gr.display_order, gr.grade_level_name, sc.school_name,sc.school";',
                                                                                        'report_code' => '# Since it looks like we are dealing with multiple data sets here, make final multi-dim
$final_data=array(\'0\'=>\'\', \'mem_totals\'=>array(), \'display_str\'=>\'\');

# Correct the formatting of the $selectedSchool param
$selectedSchool=str_replace(\'-\', \',\', $selectedSchool);

# Correct the formatting of the $selectedResources param
$selectedResources=str_replace(\'-\', \',\', $selectedResources);

# Grab the query and run it.
$eval_out=eval($rep_data[\'report_queries\']);
$final_data[0]=$this->db->query($sql)->fetchAll();

# Don\'t forget to set the year for the view
$final_data[\'year\']=$selectedYearDisplay;

if($selectedYear > 2015) {
# JM - create school model object for use below
$schoolModel = new Application_Model_Schools();

# JM - create an array to store TA data for each day used and drop into final data array
foreach($final_data[0] as $rid => $resource) {
$sid = $schoolModel->getSchoolId($resource[\'school\'], $selectedYear);
$final_data[0][$rid] = $this->memModel->getModTAConversionSummary($selectedYear, $sid, $resource[\'report_days\'], $resource, 1);
}
}

// JM - Add in schedule assistance hours as necessary
$scheduleAssistArr = array();
$reportDaysWithScheduleAssistance = array(\'10\');
foreach($final_data[0] as $id => $data) {
if(empty($scheduleAssistArr[$data[\'school\']])) {
$scheduleAssistArr[$data[\'school\']] = Application_Model_School::getScheduleAssistanceHoursBySchoolNum($data[\'school\']);
}

$final_data[0][$id][\'teacher_moe\'] += $scheduleAssistArr[$data[\'school\']];
}

# Load up the view with yet more data
$this->view->final_data=$final_data;
$final_data[\'display_str\']=$this->view->render($rep_data[\'view\']);

# Before bugging out to the controller, check if the rt_ovverride prop is set and if it\'s PDF
if($rt_override==\'pdf\')
{
$this->view->rt_override=$rt_override;
$this->view->pdf=$this->pdf;
$stylesheet=file_get_contents(\'../public/css/application_pdf.css\');
}',
                                                                                        'report_params' => 'day_select',
                                                                                        'get_session_vars' => 'y',
                                                                                        'q_or_c' => 'c',
                                                                                        'return_as' => 'JSON',
                                                                                        'view' => 'adminreports/teacher_ta_conversion.phtml',
                                                                                        'created' => '2013-02-11',
                                                                                    ),
                                                                                    8 => 
                                                                                    array (
                                                                                        'report_id' => 10,
                                                                                        'user_id' => 0,
                                                                                        'app_id' => 0,
                                                                                        'database' => 'allotments',
                                                                                        'report_name' => 'Non Salary Allotments by School',
                                                                                        'file_name' => 'non_salary_by_school',
                                                                                        'report_queries' => '$sql=array
(
0=>"
SELECT selections.allotment_prog_code, selections.allotment_prog_desc, selections.grade_level_name, 
selections.category_name,
selections.school_id, selections.school, selections.school_name, selections.category_name, 
selections.allotment_type_id, allotments.moe, allotments.conversions, allotments.comments, allotments.carryover
FROM (SELECT DISTINCT c.category_name, c.display_order as category_display_order, 
sc.id as school_id, sc.school, sc.school_name, gr.grade_level_name,
gr.display_order as grade_level_order,
at.id as allotment_type_id, at.allotment_prog_code, at.allotment_prog_desc, sc.school_year
FROM schools sc, allotment_types at, categories c, allot_grade_levels ag, grade_levels gr
WHERE at.category_id = c.category_id
AND sc.id IN ($selectedSchool) 
AND at.id IN ($selectedNonSalAllotments) 
AND ag.allotment_type_id = at.id
AND ag.grade_level_id = gr.id
AND gr.school_year = $selectedYear 
AND gr.id = sc.school_grade_level_id) AS selections
LEFT OUTER JOIN allotments ON selections.allotment_type_id = allotments.allotment_type_id
AND selections.school_id = allotments.school_id 
/* ORDER BY selections.school, selections.category_name */
/* ORDER BY selections.grade_level_order, selections.school, selections.category_display_order, selections.allotment_prog_desc */
ORDER BY selections.grade_level_order, selections.school_name, selections.category_display_order, selections.allotment_prog_code
",

1=>"SELECT sc.id,
$day_string
FROM schools sc
WHERE sc.id IN ($selectedSchool)"
);',
                                                                                        'report_code' => '# Since it looks like we are dealing with multiple data sets here, make final multi-dim
$final_data=array(0=>array(), 1=>array(), \'mem_totals\'=>array(), \'display_str\'=>\'\');

# Correct the formatting of the $selectedSchool param
$selectedSchool=str_replace(\'-\', \',\', $selectedSchool);

# Correct the formatting of the $selectedResources param
$selectedResources=str_replace(\'-\', \',\', $selectedResources);

# Correct the formatting of the $selectedSchool param
$selectedNonSalAllotments=str_replace(\'-\', \',\', $selectedNonSalAllotments);

$go_sql="SELECT grade_level_name, display_order FROM grade_levels WHERE school_year = $selectedYear ORDER BY display_order ASC";
$order_array=$this->db->query($go_sql)->fetchAll();

# Now let\'s spend time tweaking the 2nd query. We need to generate an adequate string based on the days selected by the user.
if($day_select!=\'E\')
{
$ds=\'\'; $ds_cntr=1;
$boom_size=count( ($boom=explode(\'-\', $day_select)) );
--$boom_size; array_pop($boom);
foreach($boom as $dy)                                                                     // Line 20
{
switch ($dy)
{
case \'PA\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'PA\') AS Planning"; break; }
case \'01\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'01\') AS Day1";   break; }
case \'05\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'05\') AS Day5";   break; }
case \'07\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'07\') AS Day7";   break; }
case \'10\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'10\') AS Day10";  break; }
}

# Add the commas, else the syntax will be borked!
if($ds_cntr<$boom_size) { $ds.=", \\n"; }
else                    { $ds.=""; }
++$ds_cntr;
}
$day_string=&$ds;
$this->view->show_student_totals=1;
}
else
{
$day_string=\' \'; 
$this->view->show_student_totals=0; 
}

# Grab the queries, run \'em, and grab the data we need  // Line 38
$eval_out=eval($rep_data[\'report_queries\']);
// echo \'<pre>\'; print_r($sql); echo \'</pre>\'; // exit;
foreach($sql as $k=>$query)
{
if($day_select==\'E\' && $k==1) { continue; }
$final_data[$k]=$this->db->query($query)->fetchAll(); 
}
$final_data[\'year\']=$selectedYearDisplay;

# Tweak the output of the second array into something a tad bit easier to use
foreach($final_data[1] as $k=>$v)
{ $final_data[\'mem_totals\'][$v[\'id\']]=$v; }                                           // Line 45
$this->view->final_data=$final_data;
$final_data[\'display_str\']=$this->view->render($rep_data[\'view\']);

# As before, so do now
foreach(array(0, 1, \'mem_totals\') as $die)
{ unset($final_data[$die]); }

# Set the year we need in the view
$this->view->selectedYearDisplay=$selectedYearDisplay;

# Before bugging out to the controller, check if the rt_ovverride prop is set and if it\'s PDF
if($rt_override==\'pdf\')
{
$this->view->rt_override=$rt_override;
$this->view->pdf=$this->pdf;
$stylesheet=file_get_contents(\'../public/css/application_pdf.css\');
}
',
                                                                                        'report_params' => 'day_select',
                                                                                        'get_session_vars' => 'y',
                                                                                        'q_or_c' => 'c',
                                                                                        'return_as' => 'json',
                                                                                        'view' => 'adminreports/non_salary_by_school.phtml',
                                                                                        'created' => '2013-02-11',
                                                                                    ),
                                                                                    9 => 
                                                                                    array (
                                                                                        'report_id' => 11,
                                                                                        'user_id' => 0,
                                                                                        'app_id' => 0,
                                                                                        'database' => 'allotments',
                                                                                        'report_name' => 'Non Salary Allotment Summary Report',
                                                                                        'file_name' => 'non_salary_alltoment_summary',
                                                                                        'report_queries' => '$sql=array
(
/*
"old"=>"
SELECT selections.allotment_prog_desc, selections.grade_level_name, 
selections.school_id, selections.school, selections.school_name, 
selections.allotment_type_id, allotments.moe, allotments.conversions, allotments.comments
FROM (SELECT DISTINCT c.category_name, c.display_order as category_display_order, 
sc.id as school_id, sc.school, sc.school_name, gr.grade_level_name,
gr.display_order as grade_level_order,
at.id as allotment_type_id, at.allotment_prog_desc, sc.school_year
FROM schools sc, allotment_types at, categories c, allot_grade_levels ag, grade_levels gr
WHERE at.category_id = c.category_id
AND sc.id IN ($selectedSchool) 
AND at.id IN ($selectedNonSalAllotments) 
AND ag.allotment_type_id = at.id
AND ag.grade_level_id = gr.id
AND gr.id = sc.school_grade_level_id) AS selections
LEFT OUTER JOIN allotments ON selections.allotment_type_id = allotments.allotment_type_id
AND selections.school_id = allotments.school_id 
ORDER BY selections.category_display_order, selections.allotment_prog_desc, selections.grade_level_order, selections.school_name
",
*/

0=>"
SELECT selections.allotment_prog_code, selections.allotment_prog_desc, selections.grade_level_name, 
selections.school_id, selections.school, selections.school_name, selections.category_name, 
selections.allotment_type_id, allotments.moe, allotments.conversions, allotments.comments, allotments.carryover
FROM (SELECT DISTINCT c.category_name, c.display_order as category_display_order, 
sc.id as school_id, sc.school, sc.school_name, gr.grade_level_name,
gr.display_order as grade_level_order,
at.id as allotment_type_id, at.allotment_prog_code, at.allotment_prog_desc, sc.school_year
FROM schools sc, allotment_types at, categories c, allot_grade_levels ag, grade_levels gr
WHERE at.category_id = c.category_id
AND sc.id IN ($selectedSchool) 
AND at.id IN ($selectedNonSalAllotments) 
AND ag.allotment_type_id = at.id
AND ag.grade_level_id = gr.id
AND gr.school_year = $selectedYear 
AND gr.id = sc.school_grade_level_id) AS selections
LEFT OUTER JOIN allotments ON selections.allotment_type_id = allotments.allotment_type_id
AND selections.school_id = allotments.school_id 
/* ORDER BY selections.category_display_order, selections.allotment_prog_desc, selections.grade_level_order, selections.school */
ORDER BY selections.category_display_order, selections.allotment_prog_code, selections.grade_level_order, selections.school_name
",

1=>"SELECT sc.id,
$day_string
FROM schools sc
WHERE sc.id IN ($selectedSchool)"
);',
                                                                                        'report_code' => '# Since it looks like we are dealing with multiple data sets here, make final multi-dim
$final_data=array(0=>array(), 1=>array(), \'mem_totals\'=>array(), \'display_str\'=>\'\');

# Correct the formatting of the $selectedSchool param
$selectedSchool=str_replace(\'-\', \',\', $selectedSchool);

# Correct the formatting of the $selectedResources param
$selectedResources=str_replace(\'-\', \',\', $selectedResources);

# Correct the formatting of the $selectedSchool param                                     // Line 10
$selectedNonSalAllotments=str_replace(\'-\', \',\', $selectedNonSalAllotments);

$go_sql="SELECT grade_level_name, display_order FROM grade_levels WHERE school_year = $selectedYear ORDER BY display_order ASC";
$order_array=$this->db->query($go_sql)->fetchAll();

# Now let\'s spend time tweaking the 2nd query. We need to generate an adequate string based on the days selected by the user.
if($day_select!=\'E\')
{
$ds=\'\'; $ds_cntr=1;
$boom_size=count( ($boom=explode(\'-\', $day_select)) );
--$boom_size; array_pop($boom);
foreach($boom as $dy)                                                                     // Line 20
{
switch ($dy)
{
case \'PA\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'PA\') AS Planning"; break; }
case \'01\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'01\') AS Day1";   break; }
case \'05\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'05\') AS Day5";   break; }
case \'07\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'07\') AS Day7";   break; }
case \'10\': { $ds.="\\t(SELECT sum(studentcount) FROM membership WHERE school_id= sc.id AND day_proj_plan_ind = \'10\') AS Day10";  break; }
}

# Add the commas, else the syntax will be borked!
if($ds_cntr<$boom_size) { $ds.=", \\n"; }
else                    { $ds.=""; }
++$ds_cntr;
}
$day_string=&$ds;
$this->view->show_student_totals=1;
}
else
{
$day_string=\' \'; 
$this->view->show_student_totals=0; 
}

# Grab the queries, run \'em, and grab the data we need  // Line 38
$eval_out=eval($rep_data[\'report_queries\']);
foreach($sql as $k=>$query)
{
if($day_select==\'E\' && $k==1) { continue; }
$final_data[$k]=$this->db->query($query)->fetchAll(); 
}
$final_data[\'year\']=$selectedYearDisplay;

# Tweak the output of the second array into something a tad bit easier to use
foreach($final_data[1] as $k=>$v)
{ $final_data[\'mem_totals\'][$v[\'id\']]=$v; }                                           // Line 45
$this->view->final_data=$final_data;
$final_data[\'display_str\']=$this->view->render($rep_data[\'view\']);

# These mooks need to be erased!
foreach(array(0, 1, \'mem_totals\') as $its_curtains)
{ unset($final_data[$its_curtains]); }

# Set the year we need in the view
$this->view->selectedYearDisplay=$selectedYearDisplay;

# Before bugging out to the controller, check if the rt_ovverride prop is set and if it\'s PDF
if($rt_override==\'pdf\')
{
$this->view->rt_override=$rt_override;
$this->view->pdf=$this->pdf;
$stylesheet=file_get_contents(\'../public/css/application_pdf.css\');
}
',
                                                                                        'report_params' => 'day_select',
                                                                                        'get_session_vars' => 'y',
                                                                                        'q_or_c' => 'c',
                                                                                        'return_as' => 'json',
                                                                                        'view' => 'adminreports/non_salary_allotments.phtml',
                                                                                        'created' => '2013-02-13',
                                                                                    ),
                                                                                    10 => 
                                                                                    array (
                                                                                        'report_id' => 12,
                                                                                        'user_id' => 1,
                                                                                        'app_id' => 1,
                                                                                        'database' => 'allotment',
                                                                                        'report_name' => 'Show and compare students per school',
                                                                                        'file_name' => 'show_and_compare_students_per_school',
                                                                                        'report_queries' => '$sql=array(
0=>"SELECT lv.display_order, lv.grade_level_name, sc.school, sc.school_name, d.report_days,
IFNULL(SUM(m.studentcount),0) AS studentcount
FROM schools sc
LEFT OUTER JOIN (SELECT order_id as day_order, report_days FROM reporting_days
UNION SELECT 0 AS day_order, \'PA\' AS report_days FROM DUAL) d ON 
/* d.report_days IN (\'PA\',\'01\', \'05\', \'07\', \'10\') */
d.report_days IN ($selectedDays)
LEFT OUTER JOIN grade_levels lv ON sc.school_grade_level_id = lv.id
LEFT OUTER JOIN membership m ON m.school_id = sc.id
AND m.day_proj_plan_ind = d.report_days
WHERE sc.id IN ($selectedSchool)  /*selected schools*/
AND lv.school_year = $selectedYear 
GROUP BY lv.display_order, lv.grade_level_name, sc.school, sc.school_name, d.report_days
ORDER BY lv.display_order, sc.school, d.day_order"
);',
                                                                                        'report_code' => '# Since it looks like we are dealing with multiple data sets here, make final multi-dim
$final_data=array(0=>array(), 1=>array(), \'display_str\'=>\'\');

# Correct the formatting of the $selectedSchool param
$selectedSchool=str_replace(\'-\', \',\', $selectedSchool);

$go_sql="SELECT grade_level_name, display_order FROM grade_levels WHERE school_year = $selectedYear ORDER BY display_order ASC";
$order_array=$this->db->query($go_sql)->fetchAll();

# Massage the selected day info into something we can use
if($day_select!=\'E\')
{
$boom=explode(\'-\', $day_select);
array_pop($boom);
$this->view->selected_days=$boom;
foreach($boom as $bit) { $selectedDays.="\'$bit\',"; }
$selectedDays=substr($selectedDays, 0, strlen($selectedDays)-1);
}

# Grab the queries, run \'em, and grab the data we need
$eval_out=eval($rep_data[\'report_queries\']); 
foreach($sql as $k=>$query)
{
$final_data[$k]=$this->db->query($query)->fetchAll(); 
}
$final_data[\'year\']=$selectedYearDisplay;

# Tweak the output of the second array into something a tad bit easier to use_
foreach($final_data[1] as $k=>$v)
{ $final_data[\'mem_totals\'][$v[\'id\']]=$v; }
$this->view->final_data=$final_data;
$final_data[\'display_str\']=$this->view->render($rep_data[\'view\']);

# These mooks need to be erased!
foreach(array(0, 1, \'mem_totals\') as $its_curtains)
{ if($final_data[$its_curtains]) { unset($final_data[$its_curtains]); } }

# Set the year we need in the view
$this->view->selectedYearDisplay=$selectedYearDisplay;

# Before bugging out to the controller, check if the rt_ovverride prop is set and if it\'s PDF
if($rt_override==\'pdf\')
{
$this->view->rt_override=$rt_override;
$this->view->pdf=$this->pdf;
$stylesheet=file_get_contents(\'../public/css/application_pdf.css\');
}
',
                                                                                        'report_params' => 'day_select',
                                                                                        'get_session_vars' => 'y',
                                                                                        'q_or_c' => 'c',
                                                                                        'return_as' => 'JSON',
                                                                                        'view' => 'adminreports/show_and_compare_students_per_school.phtml',
                                                                                        'created' => '2013-04-01',
                                                                                    ),
                                                                                    11 => 
                                                                                    array (
                                                                                        'report_id' => 13,
                                                                                        'user_id' => 0,
                                                                                        'app_id' => 1,
                                                                                        'database' => 'allotment',
                                                                                        'report_name' => 'Show Schools Not Reporting',
                                                                                        'file_name' => 'schools_not_reporting',
                                                                                        'report_queries' => '$sql=array(
0=>"SELECT gr.grade_level_name, sc.school, sc.school_name 
FROM schools sc
LEFT OUTER JOIN grade_levels gr ON sc.school_grade_level_id = gr.id
WHERE sc.school_year = $selectedYear             /*selected school year */
AND NOT EXISTS 
(SELECT * FROM membership m
WHERE m.school_id = sc.id 
AND m.school_year = $selectedYear           /*selected school year */ 
AND m.day_proj_plan_ind = \'$final_day_string\'     /*(selected day*/)
ORDER BY gr.display_order, sc.school_name"
);',
                                                                                            'report_code' => '# Since it looks like we are dealing with multiple data sets here, make final multi-dim
$final_data=array(0=>array(), 1=>array(), \'display_str\'=>\'\');

# Correct the formatting of the $selectedSchool param
$selectedSchool=str_replace(\'-\', \',\', $selectedSchool);

# Correct the formatting of the $selectedResources param
$selectedResources=str_replace(\'-\', \',\', $selectedResources);

# Correct the formatting of the $selectedSchool param
$selectedNonSalAllotments=str_replace(\'-\', \',\', $selectedNonSalAllotments);

# Now let\'s spend time tweaking the 2nd query. We need to generate an adequate string based on the days selected by the user.
if($day_select!=\'E\')
{
$ds=\'\'; $ds_cntr=1;
$boom_size=count( ($boom=explode(\'-\', $day_select)) );
--$boom_size; array_pop($boom);
$final_day_string=$boom[0];
}
else
{ $final_day_string=\'01\'; }
$this->view->final_day_string=$final_day_string;

# Grab the queries, run \'em, and grab the data we need
$eval_out=eval($rep_data[\'report_queries\']);
foreach($sql as $k=>$query)                           
{ $final_data[$k]=$this->db->query($query)->fetchAll(); }
$final_data[\'year\']=$selectedYearDisplay;
$this->view->final_data=$final_data;

$final_data[\'display_str\']=$this->view->render($rep_data[\'view\']);
unset($final_data[0], $final_data[1]);

# Set the year we need in the view
$this->view->selectedYearDisplay=$selectedYearDisplay;

# Before bugging out to the controller, check if the rt_ovverride prop is set and if it\'s PDF
if($rt_override==\'pdf\')
{
$this->view->rt_override=$rt_override;
$this->view->pdf=$this->pdf;
$stylesheet=file_get_contents(\'../public/css/application_pdf.css\');
}
',
                                                                                            'report_params' => 'day_select',
                                                                                            'get_session_vars' => 'y',
                                                                                            'q_or_c' => 'c',
                                                                                            'return_as' => 'JSON',
                                                                                            'view' => 'adminreports/schools_not_reporting.phtml',
                                                                                            'created' => '2013-03-19',
                                                                                        ),
                                                                                        12 => 
                                                                                        array (
                                                                                            'report_id' => 14,
                                                                                            'user_id' => 0,
                                                                                            'app_id' => 1,
                                                                                            'database' => 'allotment',
                                                                                            'report_name' => 'Show Student Counts by Grade',
                                                                                            'file_name' => 'student_counts_by_grade.pdf',
                                                                                            'report_queries' => '$sql=array(
0=>"SELECT gr.grade_level_name, sc.school, sc.school_name,  
SUM(CASE WHEN m.grade = \'K\' THEN IFNULL(m.studentcount,0) ELSE 0 END) AS KI_students,
SUM(CASE WHEN m.grade = \'01\' THEN IFNULL(m.studentcount,0) ELSE 0 END) AS g01_students,
SUM(CASE WHEN m.grade = \'02\' THEN IFNULL(m.studentcount,0) ELSE 0 END) AS g02_students,
SUM(CASE WHEN m.grade = \'03\' THEN IFNULL(m.studentcount,0) ELSE 0 END) AS g03_students,
SUM(CASE WHEN m.grade = \'04\' THEN IFNULL(m.studentcount,0) ELSE 0 END) AS g04_students,
SUM(CASE WHEN m.grade = \'05\' THEN IFNULL(m.studentcount,0) ELSE 0 END) AS g05_students,
SUM(CASE WHEN m.grade = \'06\' THEN IFNULL(m.studentcount,0) ELSE 0 END) AS g06_students,
SUM(CASE WHEN m.grade = \'07\' THEN IFNULL(m.studentcount,0) ELSE 0 END) AS g07_students,
SUM(CASE WHEN m.grade = \'08\' THEN IFNULL(m.studentcount,0) ELSE 0 END) AS g08_students,
SUM(CASE WHEN m.grade = \'09\' THEN IFNULL(m.studentcount,0) ELSE 0 END) AS g09_students,
SUM(CASE WHEN m.grade = \'10\' THEN IFNULL(m.studentcount,0) ELSE 0 END) AS g10_students,
SUM(CASE WHEN m.grade = \'11\' THEN IFNULL(m.studentcount,0) ELSE 0 END) AS g11_students,
SUM(CASE WHEN m.grade = \'12\' THEN IFNULL(m.studentcount,0) ELSE 0 END) AS g12_students
FROM schools sc
LEFT OUTER JOIN grade_levels gr ON gr.id = sc.school_grade_level_id
LEFT OUTER JOIN membership m ON m.school_id = sc.id
AND m.day_proj_plan_ind = \'$final_day_string\' /*(selected day*/
WHERE sc.id IN ($selectedSchool)
GROUP BY gr.grade_level_name, sc.school, sc.school_name
ORDER BY gr.display_order, sc.school_name"
);',
                                                                                                'report_code' => '# Since it looks like we are dealing with multiple data sets here, make final multi-dim
$final_data=array(0=>array(), 1=>array(), \'display_str\'=>\'\');

# Correct the formatting of the $selectedSchool param
$selectedSchool=str_replace(\'-\', \',\', $selectedSchool);

# Correct the formatting of the $selectedResources param
$selectedResources=str_replace(\'-\', \',\', $selectedResources);

# Correct the formatting of the $selectedSchool param
$selectedNonSalAllotments=str_replace(\'-\', \',\', $selectedNonSalAllotments);

# Now let\'s spend time tweaking the 2nd query. We need to generate an adequate string based on the days selected by the user.
if($day_select!=\'E\')
{
$ds=\'\'; $ds_cntr=1;
$boom_size=count( ($boom=explode(\'-\', $day_select)) );
--$boom_size; array_pop($boom);
$final_day_string=$boom[0];
}
else
{ $final_day_string=\'01\'; }
$this->view->final_day_string=$final_day_string;

# Push our lookup table into the view space
$final_data[\'ranges\']=$this->rep_model->grade_range_lookup($selectedSchool, $selectedYear);

# Grab the queries, run \'em, and grab the data we need
$eval_out=eval($rep_data[\'report_queries\']);
foreach($sql as $k=>$query)                           
{ $final_data[$k]=$this->db->query($query)->fetchAll(); }
$final_data[\'year\']=$selectedYearDisplay;
$this->view->final_data=$final_data;

$final_data[\'display_str\']=$this->view->render($rep_data[\'view\']);
unset($final_data[0], $final_data[1]);

# Set the year we need in the view
$this->view->selectedYearDisplay=$selectedYearDisplay;

# Before bugging out to the controller, check if the rt_ovverride prop is set and if it\'s PDF
if($rt_override==\'pdf\')
{
$this->view->rt_override=$rt_override;
$this->view->pdf=$this->pdf;
$stylesheet=file_get_contents(\'../public/css/application_pdf.css\');
}
',
                                                                                                'report_params' => 'day_select',
                                                                                                'get_session_vars' => 'y',
                                                                                                'q_or_c' => 'c',
                                                                                                'return_as' => 'JSON',
                                                                                                'view' => 'adminreports/student_counts_by_grade.phtml',
                                                                                                'created' => '2013-03-21',
                                                                                            ),
                                                                                        ));
        
        
    }
}