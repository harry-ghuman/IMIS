<?php
include "connection.php";
$student_id=$_REQUEST['student_id'];
$job_title=$_REQUEST['job_title'];
$job_group=$_REQUEST['job_group'];
$company=$_REQUEST['company'];

$query="select * from interested_students";
$res=mysqli_query($conn,$query);
$flag=0;
while($row=mysqli_fetch_array($res))
{
    if($student_id==$row[1] and $job_title==$row[2] and $job_group==$row[3] and $company==$row[4])
    {
        $flag=1;
        break;
    }
}
if($flag==1)
{
    header("location:a_student_homepage.php?q=3");
}
else {


    $query2 = "insert into interested_students values('','" . $student_id . "','" . $job_title . "','" . $job_group . "','" . $company . "')";
//echo $query;
    mysqli_query($conn, $query2);
    header("location:a_student_homepage.php?q=2");
}