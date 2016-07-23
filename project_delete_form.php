
<?php
include "header.php";
include "connection.php";

$project_name=$_REQUEST['project_name'];

$query="delete from project_info where project_name='$project_name'";
mysqli_query($conn,$query);
header("location:project_view.php?q=1");

?>
