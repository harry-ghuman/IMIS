<?php
include "connection.php";
$student_id=$_REQUEST['student_id'];

$query3="select * from personal where student_id=$student_id";
$result3=mysqli_query($conn,$query3);

$flag=0;
while($row3=mysqli_fetch_array($result3))
{
    if($student_id == $row3[2]) {
        $flag=1;
        break;
    }
}
if($flag==1) {
    header("location:assign_job1.php?student_id=$student_id");

}
else
{
    header("location:assign_job_index.php?q=1");
}
