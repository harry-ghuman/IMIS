<?php
include "header.php";
include "connection.php";

$company_name=$_REQUEST['company_name'];

$query="delete from company_info where company_name='$company_name'";
mysqli_query($conn,$query);
header("location:company_view_info.php?q=1");


