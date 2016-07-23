<?php
include "connection.php";

$company_name=$_REQUEST['company_name'];
$address=$_REQUEST['address'];
$city=$_REQUEST['city'];
$postal_code=$_REQUEST['postal_code'];
$country=$_REQUEST['country'];
$cp_firstname=$_REQUEST['cp_firstname'];
$cp_lastname=$_REQUEST['cp_lastname'];
$cp_position=$_REQUEST['cp_position'];
$telephone=$_REQUEST['telephone'];
$email=$_REQUEST['email'];
$company_website=$_REQUEST['company_website'];
$notes=$_REQUEST['notes'];


$query="update company_info set address='$address',city='$city',postal_code='$postal_code',country='$country',cp_firstname='$cp_firstname',cp_lastname='$cp_lastname',cp_position='$cp_position',telephone='$telephone',email='$email',website='$company_website',notes='$notes' where company_name='$company_name'";
mysqli_query($conn, $query);

header("location:company_view_info.php?q=3");
