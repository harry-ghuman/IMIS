<?php
include "header.php";
include "connection.php";
error_reporting(0);

$student_id=$_REQUEST['student_id'];
$internship_type=$_REQUEST['internship_type'];
$company=$_REQUEST['company'];
$job_group=$_REQUEST['job_group'];
$job_title=$_REQUEST['job_title'];

$project_name=$_REQUEST['project_name'];
$startup_company_name=$_REQUEST['startup_company_name'];
$other_internship_type=$_REQUEST['other_internship_type'];



if($internship_type=='company') {
    $query = "delete from assign_job where student_id='$student_id'and internship_type='$internship_type' and company_name='$company' and job_group='$job_group' and job_title='$job_title'";
    mysqli_query($conn, $query);
    header("location:delete_assigned_job.php?q=1");
}
if($internship_type=='mac project' or $internship_type=='research project')
{
    $query = "delete from assign_job where student_id='$student_id'and internship_type='$internship_type' and project_name='$project_name'";
    mysqli_query($conn, $query);
    header("location:delete_assigned_job.php?q=1");

}
if($internship_type=='startup company')
{
    $query = "delete from assign_job where student_id='$student_id'and internship_type='$internship_type' and company_name='$startup_company_name'";
    mysqli_query($conn, $query);
    header("location:delete_assigned_job.php?q=1");

}
if($internship_type!='startup company' and $internship_type!='company' and $internship_type!='mac project' and $internship_type!='research project')
{
    $query = "delete from assign_job where student_id='$student_id'and internship_type='$other_internship_type'";
    mysqli_query($conn, $query);
    header("location:delete_assigned_job.php?q=1");
}