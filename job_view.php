<!doctype>
<html>
<head>
    <style>
        .error {
            font-family:Arial, Helvetica, sans-serif;
            font-size:17px;
            font-weight: bold;
            color: #D8000C;
            background-color: #FFBABA;
        }
    </style>
</head>
<body>
<?php
include "header.php";
include "connection.php";
$query="select * from job";
$result=mysqli_query($conn,$query);
?>
<div style="background-image: url('images/job.jpg');padding: 40px;height:571px;background-size: 100%;background-repeat: no-repeat">
    <div class="container">
        <div class="col-md-1"></div>
            <div class="col-md-10">
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
                            <td><a href="job_view_action.php?job_title=<?php echo$row[4]?>&company_name=<?php echo$row[1]?>"
                                   target="_blank"><?php echo ucfirst($row[4]) ?></a></td>
                            <td><?php echo $row[2] ?></td>
                            <td><?php echo $row[1] ?></td>
                            <td><a href="interested_students.php?job_title=<?php echo$row[4]?>&company_name=<?php echo$row[1]?>&job_group=<?php echo$row[2]?>"
                                   target="_blank">see interested students</a></td>


                        </tr>
                        <?php
                    }
                    if (strlen($row[4])==0) {
                        ?>
                        <tr>
                            <td><a href="job_view_action.php?job_title=<?php echo $row[3]?>&company_name=<?php echo$row[1]?>"
                                   target="_blank"><?php echo ucfirst($row[3]) ?></a></td>
                            <td><?php echo $row[2] ?></td>
                            <td><?php echo $row[1] ?></td>
                            <td><a href="interested_students.php?job_title=<?php echo$row[3]?>&company_name=<?php echo$row[1]?>&job_group=<?php echo$row[2]?>"
                                   target="_blank">see interested students</a></td>

                        </tr>
                        <?php
                    }
                }
                ?>
                </tbody>
            </table>
                    <?php
                    if(isset($_REQUEST['q']))
                    {
                        ?>
                        <div class="error">
                            <?php
                            if(isset($_REQUEST['q']) && $_REQUEST['q']==1)
                                echo "<span style='color:red;'>Job form deleted</span>";
                            if(isset($_REQUEST['q']) && $_REQUEST['q']==2)
                                echo "<span style='color:red;'>Job added successfully</span>";
                            if(isset($_REQUEST['q']) && $_REQUEST['q']==3)
                                echo "<span style='color:red;'>Job form edited successfully</span>";
                            if(isset($_REQUEST['q']) && $_REQUEST['q']==4)
                                echo "<span style='color:red;'>Job already exists</span>";
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>

    </div>
</div>
</body>
</html>

