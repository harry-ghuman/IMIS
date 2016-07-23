<?php
$company_name=$_REQUEST['company_name'];
$job_group=$_REQUEST['job_group'];
$job_subgroup=$_REQUEST['job_sub_group'];
$job_subgroup2=$_REQUEST['job_sub_group2'];
$description=$_REQUEST['description'];
$responsibilities=$_REQUEST['responsibilities'];
$requirements=$_REQUEST['requirements'];
$salary=$_REQUEST['salary'];



include "connection.php";
$query="select * from job where company_name='$company_name'";
$res=mysqli_query($conn,$query);
$flag=0;
while($row=mysqli_fetch_array($res))
{
    if(strlen($job_subgroup2)!=0)
    {
        if($job_subgroup==$row[3] && $job_subgroup2==$row[4])
        {
            $flag=1;
            break;
        }
    }
    else
        if($job_subgroup==$row[3])
        {
            $flag=1;
            break;
        }
}


if($flag==1)
{
    header("location:job_view.php?q=4");
}
else {

    if (strlen($job_subgroup2) != 0) {
        $query = "insert into job values('','" . $company_name . "','" . $job_group . "','" . $job_subgroup . "','" . $job_subgroup2 . "','" . $description . "','" . $responsibilities . "','" . $requirements . "','" . $salary . "')";
        mysqli_query($conn, $query);
        header("location:job_view.php?q=2");
    } else {
        $query = "insert into job values('','" . $company_name . "','" . $job_group . "','" . $job_subgroup . "','','" . $description . "','" . $responsibilities . "','" . $requirements . "','" . $salary . "')";
        mysqli_query($conn, $query);
        header("location:job_view.php?q=2");
    }
}
