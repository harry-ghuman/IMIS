<?php
include "header.php";
include "connection.php";

$student_id=$_REQUEST['student_id'];
$query1="delete from personal where student_id='$student_id'";
$query2="delete from undergraduate_students where student_id='$student_id'";
$query3="delete from graduate_students where student_id='$student_id'";
$query4="delete from other_degrees where student_id='$student_id'";
$query5="delete from work_experience where student_id='$student_id'";
$query6="delete from technical_skills where student_id='$student_id'";
$query7="delete from operating_systems_skills where student_id='$student_id'";
$query8="delete from cms_skills where student_id='$student_id'";
$query9="delete from assign_job where student_id='$student_id'";
$query10="delete from interested_students where student_id='$student_id'";
$query11="delete from student_accounts where student_id='$student_id'";

mysqli_query($conn,$query1);
mysqli_query($conn,$query2);
mysqli_query($conn,$query3);
mysqli_query($conn,$query4);
mysqli_query($conn,$query5);
mysqli_query($conn,$query6);
mysqli_query($conn,$query7);
mysqli_query($conn,$query8);
mysqli_query($conn,$query9);
mysqli_query($conn,$query10);
mysqli_query($conn,$query11);


header("location:student_view_info.php?q=5");