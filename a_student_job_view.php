<!doctype>
<html>
<head>
</head>
<body>
<?php
include "a_student_header.php";
include "connection.php";
$query="select * from job";
$result=mysqli_query($conn,$query);
?>
<div style="background-image: url('images/student2.jpg');padding: 40px;height:571px;background-size: 100%;background-repeat: no-repeat">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
                <div class="col-md-8">
                <div class="well">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center><h2>List of available jobs</h2></center></div>
                    </div>
                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <th>Job title</th>
                            <th>Job group</th>
                            <th>Company</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($row=mysqli_fetch_array($result))
                        {
                            if (strlen($row[3])==0 or $row[3]=='other') {
                                ?>
                                <tr>
                                    <td><a href="a_student_job_view_action.php?job_title=<?php echo$row[4]?>&company_name=<?php echo$row[1]?>"
                                           target="_blank"><?php echo ucfirst($row[4]) ?></a></td>
                                    <td><?php echo $row[2] ?></td>
                                    <td><?php echo $row[1] ?></td>
                                </tr>
                                <?php
                            }
                            if (strlen($row[4])==0) {
                                ?>
                                <tr>
                                    <td><a href="a_student_job_view_action.php?job_title=<?php echo $row[3]?>&company_name=<?php echo$row[1]?>"
                                           target="_blank"><?php echo ucfirst($row[3]) ?></a></td>
                                    <td><?php echo $row[2] ?></td>
                                    <td><?php echo $row[1] ?></td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

