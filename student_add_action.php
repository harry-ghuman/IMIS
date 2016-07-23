<?php
include "connection.php";
error_reporting(0);

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
$status=$_REQUEST['status'];
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

$degree1_name=$_REQUEST['degree1_name'];
$degree1_major=$_REQUEST['degree1_major'];
$degree1_gpa=$_REQUEST['degree1_gpa'];
$degree1_university=$_REQUEST['degree1_university'];
$degree1_country=$_REQUEST['degree1_country'];
$degree1_year=$_REQUEST['degree1_year'];
$degree2_name=$_REQUEST['degree2_name'];
$degree2_major=$_REQUEST['degree2_major'];
$degree2_gpa=$_REQUEST['degree2_gpa'];
$degree2_university=$_REQUEST['degree2_university'];
$degree2_country=$_REQUEST['degree2_country'];
$degree2_year=$_REQUEST['degree2_year'];
$degree3_name=$_REQUEST['degree3_name'];
$degree3_major=$_REQUEST['degree3_major'];
$degree3_gpa=$_REQUEST['degree3_gpa'];
$degree3_university=$_REQUEST['degree3_university'];
$degree3_country=$_REQUEST['degree3_country'];
$degree3_year=$_REQUEST['degree3_year'];

$company1_name=$_REQUEST['company1_name'];
$company1_startdate=$_REQUEST['company1_startdate'];
$company1_enddate=$_REQUEST['company1_enddate'];
$company1_title=$_REQUEST['company1_title'];
$company1_duties=$_REQUEST['company1_duties'];
$company2_name=$_REQUEST['company2_name'];
$company2_startdate=$_REQUEST['company2_startdate'];
$company2_enddate=$_REQUEST['company2_enddate'];
$company2_title=$_REQUEST['company2_title'];
$company2_duties=$_REQUEST['company2_duties'];
$company3_name=$_REQUEST['company3_name'];
$company3_startdate=$_REQUEST['company3_startdate'];
$company3_enddate=$_REQUEST['company3_enddate'];
$company3_title=$_REQUEST['company3_title'];
$company3_duties=$_REQUEST['company3_duties'];
$company4_name=$_REQUEST['company4_name'];
$company4_startdate=$_REQUEST['company4_startdate'];
$company4_enddate=$_REQUEST['company4_enddate'];
$company4_title=$_REQUEST['company4_title'];
$company4_duties=$_REQUEST['company4_duties'];

$asp = $_REQUEST['asp'];
$c = $_REQUEST['c'];
$cplusplus = $_REQUEST['cplusplus'];
$chash = $_REQUEST['chash'];
$flex = $_REQUEST['flex'];
$java = $_REQUEST['java'];
$javascript = $_REQUEST['javascript'];
$lisp = $_REQUEST['lisp'];
$matlab = $_REQUEST['matlab'];
$mysql = $_REQUEST['mysql'];
$objectivec = $_REQUEST['objectivec'];
$pascal = $_REQUEST['pascal'];
$perl = $_REQUEST['perl'];
$php = $_REQUEST['php'];
$prolog = $_REQUEST['prolog'];
$python = $_REQUEST['python'];
$r = $_REQUEST['r'];
$ruby = $_REQUEST['ruby'];
$sqloracle = $_REQUEST['sqloracle'];
$tcl = $_REQUEST['tcl'];
$tsql = $_REQUEST['tsql'];
$vb = $_REQUEST['vb'];
$other_technical_skill_name = $_REQUEST['other_technical_skill_name'];
$other_technical_skill = $_REQUEST['other_technical_skill'];

$concrete5 = $_REQUEST['concrete5'];
$dotnetnuke = $_REQUEST['dotnetnuke'];
$drupal = $_REQUEST['drupal'];
$joomla = $_REQUEST['joomla'];
$wordpress = $_REQUEST['wordpress'];
$other_cms_skill_name = $_REQUEST['other_cms_skill_name'];
$other_cms_skill = $_REQUEST['other_cms_skill'];

$android = $_REQUEST['android'];
$chromeos = $_REQUEST['chromeos'];
$ios = $_REQUEST['ios'];
$linux = $_REQUEST['linux'];
$macos = $_REQUEST['macos'];
$unix = $_REQUEST['unix'];
$windows = $_REQUEST['windows'];
$other_os_skill_name = $_REQUEST['other_os_skill_name'];
$other_os_skill = $_REQUEST['other_os_skill'];





$query="select * from personal";
$res=mysqli_query($conn,$query);
$flag=0;
while($row=mysqli_fetch_array($res))
{
    if($student_id==$row[2])
    {
        $flag=1;
        break;
    }
}
if($flag==1)
{
    header("location:student_view_info.php?q=2");
}
else {
    $query1 = "insert into personal values('" . $semester . "','" . $year . "','" . $student_id . "','" . $firstname . "','" . $middlename . "','" . $lastname . "','" . $email . "','" . $telephone . "','" . $status . "','" . $gender . "','" . $country . "')";
    mysqli_query($conn, $query1);
    $query2 = "insert into undergraduate_students values('','" . $student_id . "','" . $ug_major . "','" . $ug_gpa . "','" . $ug_university . "','" . $ug_country . "','" . $ug_year . "')";
    mysqli_query($conn, $query2);

    if (strlen($pg_major) != 0) {
        $query3 = "insert into graduate_students values('','" . $student_id . "','" . $pg_major . "','" . $pg_gpa . "','" . $pg_university . "','" . $pg_country . "','" . $pg_year . "')";
        mysqli_query($conn, $query3);
    }
    if (strlen($degree1_name) != 0) {
        $query4 = "insert into other_degrees values('','" . $student_id . "','" . $degree1_name . "','" . $degree1_major . "','" . $degree1_gpa . "','" . $degree1_university . "','" . $degree1_country . "','" . $degree1_year . "')";
        mysqli_query($conn, $query4);
    }
    if (strlen($degree2_name) != 0) {
        $query5 = "insert into other_degrees values('','" . $student_id . "','" . $degree2_name . "','" . $degree2_major . "','" . $degree2_gpa . "','" . $degree2_university . "','" . $degree2_country . "','" . $degree2_year . "')";
        mysqli_query($conn, $query5);
        echo $query5;
    }
    if (strlen($degree3_name) != 0) {
        $query6 = "insert into other_degrees values('','" . $student_id . "','" . $degree3_name . "','" . $degree3_major . "','" . $degree3_gpa . "','" . $degree3_university . "','" . $degree3_country . "','" . $degree3_year . "')";
        mysqli_query($conn, $query6);
    }
    if (strlen($company1_name) != 0) {
        $query7 = "insert into work_experience values('','" . $student_id . "','" . $company1_name . "','" . $company1_startdate . "','" . $company1_enddate . "','" . $company1_title . "','" . $company1_duties . "')";
        mysqli_query($conn, $query7);
    }
    if (strlen($company2_name) != 0) {
        $query8 = "insert into work_experience values('','" . $student_id . "','" . $company2_name . "','" . $company2_startdate . "','" . $company2_enddate . "','" . $company2_title . "','" . $company2_duties . "')";
        mysqli_query($conn, $query8);
    }
    if (strlen($company3_name) != 0) {
        $query9 = "insert into work_experience values('','" . $student_id . "','" . $company3_name . "','" . $company3_startdate . "','" . $company3_enddate . "','" . $company3_title . "','" . $company3_duties . "')";
        mysqli_query($conn, $query9);
    }
    if (strlen($company4_name) != 0) {
        $query10 = "insert into work_experience values('','" . $student_id . "','" . $company4_name . "','" . $company4_startdate . "','" . $company4_enddate . "','" . $company4_title . "','" . $company4_duties . "')";
        mysqli_query($conn, $query10);
    }

    $query11 = "insert into technical_skills values('','" . $student_id . "','" . $asp . "','" . $c . "','" . $cplusplus . "','" . $chash . "','" . $flex . "','" . $java . "','" . $javascript . "','" . $lisp . "','" . $matlab . "','" . $mysql . "','" . $objectivec . "','" . $pascal . "','" . $perl . "','" . $php . "','" . $prolog . "','" . $python . "','" . $r . "','" . $ruby . "','" . $sqloracle . "','" . $tcl . "','" . $tsql . "','" . $vb . "','" . $other_technical_skill_name . "','" . $other_technical_skill . "')";
    mysqli_query($conn, $query11);

    $query12 = "insert into cms_skills values('','" . $student_id . "','" . $concrete5 . "','" . $dotnetnuke . "','" . $drupal . "','" . $joomla . "','" . $wordpress . "','" . $other_cms_skill_name . "','" . $other_cms_skill . "')";
    mysqli_query($conn, $query12);

    $query12 = "insert into operating_systems_skills values('','" . $student_id . "','" . $android . "','" . $chromeos . "','" . $ios . "','" . $linux . "','" . $macos . "','" . $unix . "','" . $windows . "','" . $other_os_skill_name . "','" . $other_os_skill . "')";
    mysqli_query($conn, $query12);

    header("location:student_view_info.php?q=1");
}




