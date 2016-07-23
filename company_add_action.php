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

$query="select * from company_info";
$res=mysqli_query($conn,$query);
$flag=0;
while($row=mysqli_fetch_array($res))
{
    if($company_name==$row[1])
    {
        $flag=1;
        break;
    }
}
if($flag==1)
{
    header("location:company_view_info.php?q=4");
}
else {
    $query2 = "insert into company_info values('','" . $company_name . "','" . $address . "','" . $city . "','" . $postal_code . "','" . $country . "','" . $cp_firstname . "','" . $cp_lastname . "','" . $cp_position . "','" . $telephone . "','" . $email . "','" . $company_website . "','" . $notes . "')";
    mysqli_query($conn, $query2);
    header("location:company_view_info.php?q=2");
}
