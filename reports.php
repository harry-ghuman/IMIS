<!doctype>
<html>
<head>
</head>
<body>
<?php
include "header.php";
include "connection.php";
$query1="select DISTINCT country from personal";
$result1=mysqli_query($conn,$query1);

?>
<div style="background-image: url('images/student2.jpg');padding: 40px;height:auto;background-size: 100%;">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="well">
                    <div class="row">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <center><h2>Reports</h2></center>
                            </div>
                        </div>
                    </div>
                    <form action="reports_action.php" method="get">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Country</label>
                                <select class="form-control" name="country">
                                    <?php
                                    while($row1=mysqli_fetch_array($result1))
                                    {
                                        ?>
                                        <option><?php echo $row1[0] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Semester</label>
                                <select class="form-control" name="semester">
                                    <option>fall</option>
                                    <option>winter</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Year</label>
                                <select class="form-control" name="year">
                                    <option>2015</option>
                                    <option>2016</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Gender</label>
                                <select class="form-control" name="gender">
                                    <option>male</option>
                                    <option>female</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Job status</label>
                                <select class="form-control" name="job_status">
                                    <option>paid</option>
                                    <option>unpaid</option>
                                    <option>no job</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-md">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
