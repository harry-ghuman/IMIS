<?php
include "connection.php";

$project_type=$_REQUEST['project_type'];
$project_name=$_REQUEST['project_name'];
$project_description=$_REQUEST['project_description'];

$query="select * from project_info";
$res=mysqli_query($conn,$query);
$flag=0;
while($row=mysqli_fetch_array($res))
{
    if($project_name==$row[2])
    {
        $flag=1;
        break;
    }
}
if($flag==1)
{
    header("location:project_view.php?q=4");
}
else {

    $query = "insert into project_info values('','" . $project_type . "','" . $project_name . "','" . $project_description . "')";
//echo $query;
    mysqli_query($conn, $query);
    header("location:project_view.php?q=2");
}
