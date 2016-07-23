<?php
include "connection.php";

$project_type=$_REQUEST['project_type'];
$project_name=$_REQUEST['project_name'];
$project_description=$_REQUEST['project_description'];

$query="update project_info set project_type='$project_type',project_description='$project_description' where project_name='$project_name'";

mysqli_query($conn, $query);

header("location:project_view.php?q=3");
