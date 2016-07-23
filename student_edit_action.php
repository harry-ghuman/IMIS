<?php
include "connection.php";
error_reporting(0);
$student_id=$_REQUEST['student_id'];
$semester=$_REQUEST['semester'];
$year=$_REQUEST['year'];
$student_id=$_REQUEST['student_id'];
$firstname=$_REQUEST['firstname'];
$middlename=$_REQUEST['middlename'];
$lastname=$_REQUEST['lastname'];
$email=$_REQUEST['email'];
$telephone=$_REQUEST['telephone'];
$status=$_REQUEST['status'];
$gender=$_REQUEST['gender'];
$country=$_REQUEST['country'];

if($status=='permanent resident/citizen')
    $country="canada";

$ug_major=$_REQUEST['ug_major'];
$ug_gpa=$_REQUEST['ug_gpa'];
$ug_university=$_REQUEST['ug_university'];
$ug_country=$_REQUEST['ug_country'];
$ug_year=$_REQUEST['ug_year'];
$pg_major=$_REQUEST['pg_major'];
$pg_gpa=$_REQUEST['pg_gpa'];
$pg_university=$_REQUEST['pg_university'];
$pg_country=$_REQUEST['pg_country'];
$pg_year=$_REQUEST['pg_year'];


$query1="update personal set semester='$semester',year='$year',first_name='$firstname',middle_name='$middlename',last_name='$lastname',email='$email',telephone='$telephone',status='$status',gender='$gender',country='$country'where student_id='$student_id'";
$query2="update undergraduate_students set major='$ug_major',gpa='$ug_gpa',university='$ug_university',country='$ug_country',passingyear='$ug_year'where student_id='$student_id'";
$query3="update graduate_students set major='$pg_major',gpa='$pg_gpa',university='$pg_university',country='$pg_country',passingyear='$pg_year'where student_id='$student_id'";
$query4="delete from other_degrees where student_id='$student_id'";
$query5="delete from work_experience where student_id='$student_id'";

mysqli_query($conn, $query1);
mysqli_query($conn, $query2);
mysqli_query($conn, $query3);
mysqli_query($conn, $query4);
mysqli_query($conn, $query5);


$degree1_name=$_REQUEST["degree_name"][0];
$degree2_name=$_REQUEST["degree_name"][1];
$degree3_name=$_REQUEST["degree_name"][2];

if(strlen($degree1_name)!=0)
{
    $degree1_major=$_REQUEST["degree_major"][0];
    $degree1_gpa=$_REQUEST["degree_gpa"][0];
    $degree1_university=$_REQUEST["degree_university"][0];
    $degree1_country=$_REQUEST["degree_country"][0];
    $degree1_year=$_REQUEST["degree_year"][0];

    $query6="insert into other_degrees values('','".$student_id."','".$degree1_name."','".$degree1_major."','".$degree1_gpa."','".$degree1_university."','".$degree1_country."','".$degree1_year."')";
    mysqli_query($conn, $query6);
}
if(strlen($degree2_name)!=0)
{
    $degree2_major=$_REQUEST["degree_major"][1];
    $degree2_gpa=$_REQUEST["degree_gpa"][1];
    $degree2_university=$_REQUEST["degree_university"][1];
    $degree2_country=$_REQUEST["degree_country"][1];
    $degree2_year=$_REQUEST["degree_year"][1];

    $query7="insert into other_degrees values('','".$student_id."','".$degree2_name."','".$degree2_major."','".$degree2_gpa."','".$degree2_university."','".$degree2_country."','".$degree2_year."')";
    mysqli_query($conn, $query7);
}
if(strlen($degree3_name)!=0)
{
    $degree3_major=$_REQUEST["degree_major"][2];
    $degree3_gpa=$_REQUEST["degree_gpa"][2];
    $degree3_university=$_REQUEST["degree_university"][2];
    $degree3_country=$_REQUEST["degree_country"][2];
    $degree3_year=$_REQUEST["degree_year"][2];

    $query8="insert into other_degrees values('','".$student_id."','".$degree3_name."','".$degree3_major."','".$degree3_gpa."','".$degree3_university."','".$degree3_country."','".$degree3_year."')";
    mysqli_query($conn, $query8);
}

$company1_name=$_REQUEST["company_name"][0];
$company2_name=$_REQUEST["company_name"][1];
$company3_name=$_REQUEST["company_name"][2];
$company4_name=$_REQUEST["company_name"][3];

if(strlen($company1_name)!=0)
{
    $company1_startdate=$_REQUEST["company_startdate"][0];
    $company1_startdate=$_REQUEST["company_startdate"][0];
    $company1_enddate=$_REQUEST["company_enddate"][0];
    $company1_title=$_REQUEST["company_title"][0];
    $company1_duties=$_REQUEST["company_duties"][0];

    $query9 = "insert into work_experience values('','" . $student_id . "','" . $company1_name . "','" . $company1_startdate . "','" . $company1_enddate . "','" . $company1_title . "','" . $company1_duties . "')";
    mysqli_query($conn, $query9);
}
if(strlen($company2_name)!=0)
{
    $company2_startdate=$_REQUEST["company_startdate"][1];
    $company2_startdate=$_REQUEST["company_startdate"][1];
    $company2_enddate=$_REQUEST["company_enddate"][1];
    $company2_title=$_REQUEST["company_title"][1];
    $company2_duties=$_REQUEST["company_duties"][1];

    $query10 = "insert into work_experience values('','" . $student_id . "','" . $company2_name . "','" . $company2_startdate . "','" . $company2_enddate . "','" . $company2_title . "','" . $company2_duties . "')";
    mysqli_query($conn, $query10);
}
if(strlen($company3_name)!=0)
{
    $company3_startdate=$_REQUEST["company_startdate"][2];
    $company3_startdate=$_REQUEST["company_startdate"][2];
    $company3_enddate=$_REQUEST["company_enddate"][2];
    $company3_title=$_REQUEST["company_title"][2];
    $company3_duties=$_REQUEST["company_duties"][2];

    $query11 = "insert into work_experience values('','" . $student_id . "','" . $company3_name . "','" . $company3_startdate . "','" . $company3_enddate . "','" . $company3_title . "','" . $company3_duties . "')";
    mysqli_query($conn, $query11);
}
if(strlen($company4_name)!=0)
{
    $company4_startdate=$_REQUEST["company_startdate"][3];
    $company4_startdate=$_REQUEST["company_startdate"][3];
    $company4_enddate=$_REQUEST["company_enddate"][3];
    $company4_title=$_REQUEST["company_title"][3];
    $company4_duties=$_REQUEST["company_duties"][3];

    $query12 = "insert into work_experience values('','" . $student_id . "','" . $company4_name . "','" . $company4_startdate . "','" . $company4_enddate . "','" . $company4_title . "','" . $company4_duties . "')";
    mysqli_query($conn, $query12);
}

$asp=$_REQUEST['asp'];
$c=$_REQUEST['c'];
$cplusplus=$_REQUEST['cplusplus'];
$chash=$_REQUEST['chash'];
$flex=$_REQUEST['flex'];
$java=$_REQUEST['java'];
$javascript=$_REQUEST['javascript'];
$lisp=$_REQUEST['lisp'];
$matlab=$_REQUEST['matlab'];
$mysql=$_REQUEST['mysql'];
$objectivec=$_REQUEST['objectivec'];
$pascal=$_REQUEST['pascal'];
$perl=$_REQUEST['perl'];
$php=$_REQUEST['php'];
$prolog=$_REQUEST['prolog'];
$python=$_REQUEST['python'];
$r=$_REQUEST['r'];
$ruby=$_REQUEST['ruby'];
$sqloracle=$_REQUEST['sqloracle'];
$tcl=$_REQUEST['tcl'];
$tsql=$_REQUEST['tsql'];
$vb=$_REQUEST['vb'];
$other_technical_skill_name=$_REQUEST['other_technical_skill_name'];
$other_technical_skill=$_REQUEST['other_technical_skill'];

$query13="update technical_skills set aspnet='$asp',c='$c',cplusplus='$cplusplus',chash='$chash',flex='$flex',java='$java',javascript='$javascript',lisp='$lisp',matlab='$matlab',mysql='$mysql',objectivec='$objectivec',pascal='$pascal',perl='$perl',php='$php',prolog='$prolog',python='$python',r='$r',ruby='$ruby',sqloracle='$sqloracle',tcl='$tcl',tsql='$tsql',vbnet='$vb',other_technical_skill_name='$other_technical_skill_name',other_technical_skill='$other_technical_skill' where student_id='$student_id'";
mysqli_query($conn, $query13);

$concrete5=$_REQUEST['concrete5'];
$dotnetnuke=$_REQUEST['dotnetnuke'];
$drupal=$_REQUEST['drupal'];
$joomla=$_REQUEST['joomla'];
$wordpress=$_REQUEST['wordpress'];
$other_cms_skill_name=$_REQUEST['other_cms_skill_name'];
$other_cms_skill=$_REQUEST['other_cms_skill'];

$query14="update cms_skills set concrete5='$concrete5',dotnetnuke='$dotnetnuke',drupal='$drupal',joomla='$joomla',wordpress='$wordpress',other_cms_skill_name='$other_cms_skill_name',other_cms_skill='$other_cms_skill' where student_id='$student_id'";
mysqli_query($conn, $query14);

$android=$_REQUEST['android'];
$chromeos=$_REQUEST['chromeos'];
$ios=$_REQUEST['ios'];
$linux=$_REQUEST['linux'];
$macos=$_REQUEST['macos'];
$unix=$_REQUEST['unix'];
$windows=$_REQUEST['windows'];
$other_os_skill_name=$_REQUEST['other_os_skill_name'];
$other_os_skill=$_REQUEST['other_os_skill'];

$query15="update operating_systems_skills set android='$android',chromeos='$chromeos',ios='$ios',linux='$linux',macos='$macos',unix='$unix',windows='$windows',other_os_skill_name='$other_os_skill_name',other_os_skill='$other_os_skill' where student_id='$student_id'";
mysqli_query($conn, $query15);

header("location:student_view_info.php?q=4");
