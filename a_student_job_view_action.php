<!doctype>
<html>
<head>
</head>
<body>
<?php
include "a_student_header.php";
include "connection.php";

$username=$_SESSION['username'];
$query10="select * from student_accounts where username='$username'";
$result10=mysqli_query($conn,$query10);
$row10=mysqli_fetch_array($result10);
$student_id=$row10[1];


$job_title=$_REQUEST['job_title'];
$company_name=$_REQUEST['company_name'];

$query="select * from job where company_name='$company_name' and (enter_jobtitle='$job_title' or job_subgroup='$job_title')";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);

if (strlen($row[3])==0 or $row[3]=='other') {
    $job_title2=$row[4];
}
if (strlen($row[4])==0) {
    $job_title2 = $row[3];
}
?>
<div style="background-image: url('images/student2.jpg');padding: 40px;height:auto;background-size: 100%;background-repeat: no-repeat">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
                <div class="col-md-8">
                <div class="well">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center><h2>Job information</h2></center></div>
                    </div>
                    <table class="table table-condensed">
                        <thead></thead>
                        <tbody>
                        <tr>
                            <td>Job title</td>
                            <td></td>
                            <td><?php echo $job_title2 ?></td>
                        </tr>
                        <tr>
                            <td>Job group</td>
                            <td></td>
                            <td><?php echo $row[2] ?></td>
                        </tr>
                        <tr>
                            <td>Company name</td>
                            <td></td>
                            <td><?php echo $row[1] ?></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td></td>
                            <td align="justify"><?php echo $row[5] ?></td>
                        </tr>
                        <tr>
                            <td>Responsibilities</td>
                            <td></td>
                            <td align="justify"><?php echo $row[6] ?></td>
                        </tr>
                        <tr>
                            <td>Requirements</td>
                            <td></td>
                            <td align="justify"><?php echo $row[7] ?></td>
                        </tr>
                        <tr>
                            <td>Salary</td>
                            <td></td>
                            <td><?php
                                if($row[8]==0)
                                    echo "not paid";
                                else
                                    echo $row[8];
                                ?>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <button onclick="location.href='a_student_show_interest.php?student_id=<?php echo $student_id?>&job_title=<?php echo $job_title2 ?>&job_group=<?php echo $row[2] ?>&company=<?php echo $row[1]?>'"
                            class="btn btn-primary btn-md">Show interest in this job
                    </button>


                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
