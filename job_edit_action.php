<?php
include "connection.php";

$job_title=$_REQUEST['job_title'];
$company_name=$_REQUEST['company_name'];
$description=$_REQUEST['description'];
$responsibilities=$_REQUEST['responsibilities'];
$requirements=$_REQUEST['requirements'];
$salary=$_REQUEST['salary'];


$query="update job set description='$description',responsibilities='$responsibilities',requirements='$requirements',salary='$salary' where company_name='$company_name' and (enter_jobtitle='$job_title' or job_subgroup='$job_title')";
mysqli_query($conn, $query);

header("location:job_view.php?q=3");
