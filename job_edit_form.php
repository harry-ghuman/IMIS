<!doctype>
<html>
<head>
</head>
<body>
<?php
include "header.php";
include "connection.php";

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
<div style="background-image: url('images/job.jpg');padding: 40px;height:auto;background-size: 100%;background-repeat: repeat">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="well">
                    <div class="row">
                        <div class="form-group">
                            <div class="panel panel-primary">
                                <div class="panel-heading"><center><h2>Edit job information</h2></center></div>
                            </div>
                        </div>
                    </div>
                    <form action="job_edit_action.php" method="get">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <table class="table table-condensed">
                                    <thead></thead>
                                    <tbody>
                                    <tr>
                                        <td>Job title</td>
                                        <td><input type="text"class="form-control" name="job_title" value="<?php echo $job_title2 ?>"readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Job group</td>
                                        <td><input type="text"class="form-control"value="<?php echo $row[2] ?>"readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Company name</td>
                                        <td><input type="text"class="form-control" name="company_name" value="<?php echo $row[1] ?>"readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td><textarea class="form-control" rows="4" name="description"><?php echo $row[5] ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>Responsibilities</td>
                                        <td><textarea class="form-control" rows="4" name="responsibilities" ><?php echo $row[6] ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>Requirements</td>
                                        <td><textarea class="form-control" rows="4" name="requirements"><?php echo $row[7] ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>Salary</td>
                                        <td><input type="text"class="form-control"name="salary" value="<?php echo $row[8] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td><span style='color:red;'>Note: If job is unpaid, enter zero in salary</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-md">Submit</button>
                    </form>
                    <button onclick="location.href='job_view_action.php?job_title=<?php echo$row[4]?>&company_name=<?php echo$row[1]?>'"class="btn btn-primary btn-md">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>



