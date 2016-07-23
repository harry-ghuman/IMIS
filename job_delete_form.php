<?php
include "header.php";
include "connection.php";

$job_title=$_REQUEST['job_title'];
$company_name=$_REQUEST['company_name'];

$query="delete from job where company_name='$company_name' and (enter_jobtitle='$job_title' or job_subgroup='$job_title')";
mysqli_query($conn,$query);
header("location:job_view.php?q=1");


