<?php
error_reporting(0);
include "connection.php";

$student_id=$_REQUEST['student_id'];
$internship_type=$_REQUEST['internship_type'];
$company_name=$_REQUEST['company_name'];
$job_group=$_REQUEST['job_group'];
$job_title=$_REQUEST['job_title'];

$startup_company_name=$_REQUEST['startup_company_name'];
$research_project_name=$_REQUEST['research_project_name'];
$mac_project_name=$_REQUEST['mac_project_name'];
$other_internship_type=$_REQUEST['other_internship_type'];

$query6="select salary from job where company_name='$company_name'and job_group='$job_group' and (job_subgroup='$job_title' or enter_jobtitle='$job_title')";
$res6=mysqli_query($conn,$query6);
$row6=mysqli_fetch_array($res6);

if($row6[0]==0)
    $job_status="unpaid";
else
    $job_status="paid";


$query5="select * from assign_job where student_id='$student_id'";
$res5=mysqli_query($conn,$query5);
$flag=0;
while($row5=mysqli_fetch_array($res5))
{
    if($student_id==$row5[1]&& $internship_type==$row5[2]&& $company_name==$row5[3]&& $job_group==$row5[4]&& $job_title==$row5[5])
    {
        $flag=1;
        break;
    }
    if((strlen($mac_project_name)!=0) or (strlen($research_project_name)!=0)) {
        if ($student_id == $row5[1] && $internship_type == $row5[2] && ($mac_project_name == $row5[6] or $research_project_name == $row5[6])) {
            $flag = 1;
            break;
        }
    }
    if (strlen($other_internship_type)!=0) {
        if ($student_id == $row5[1] && $other_internship_type == $row5[2]) {
            $flag = 1;
            break;
        }
    }
    if(strlen($startup_company_name)!=0) {
        if ($student_id == $row5[1] && $internship_type == $row5[2] && $startup_company_name == $row5[3]) {
            $flag = 1;
            break;
        }
    }
}
if($flag==1)
{
    header("location:assign_job_index.php?q=3");
}
else {


    if ($internship_type == 'company') {
        $query = "insert into assign_job values('','" . $student_id . "','" . $internship_type . "','" . $company_name . "','" . $job_group . "','" . $job_title . "','','". $job_status ."')";
//echo $query;
        mysqli_query($conn, $query);
        header("location:assign_job_index.php?q=2");
    }
    if ($internship_type == 'startup company') {
        $query = "insert into assign_job values('','" . $student_id . "','" . $internship_type . "','" . $startup_company_name . "','','','','')";
//echo $query;
        mysqli_query($conn, $query);
        header("location:assign_job_index.php?q=2");
    }
    if ($internship_type == 'research project') {
        $query = "insert into assign_job values('','" . $student_id . "','" . $internship_type . "','','','','$research_project_name','')";
//echo $query;
        mysqli_query($conn, $query);
        header("location:assign_job_index.php?q=2");
    }
    if ($internship_type == 'mac project') {
        $query = "insert into assign_job values('','" . $student_id . "','" . $internship_type . "','','','','$mac_project_name','')";
        echo $query;
        mysqli_query($conn, $query);
        header("location:assign_job_index.php?q=2");
    }
    if ($internship_type == 'other') {
        $query = "insert into assign_job values('','" . $student_id . "','" . $other_internship_type . "','','','','','')";
//echo $query;
        mysqli_query($conn, $query);
        header("location:assign_job_index.php?q=2");
    }
}