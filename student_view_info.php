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
$query="select * from personal order by student_id asc";
$result=mysqli_query($conn,$query);
?>
<div style="background-image: url('images/student2.jpg');padding: 40px;height:auto;background-size: 100%;>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <?php
                if(isset($_REQUEST['q']))
                {
                    ?>
                    <div class="error">
                        <?php
                        if(isset($_REQUEST['q']) && $_REQUEST['q']==1)
                            echo "<span style='color:red;'>Student added successfully</span>";
                        if(isset($_REQUEST['q']) && $_REQUEST['q']==2)
                            echo "<span style='color:red;'>Student ID already exist</span>";
                        if(isset($_REQUEST['q']) && $_REQUEST['q']==3)
                            echo "<span style='color:red;'>Student ID does not exist</span>";
                        if(isset($_REQUEST['q']) && $_REQUEST['q']==4)
                            echo "<span style='color:red;'>Student form edited successfully</span>";
                        if(isset($_REQUEST['q']) && $_REQUEST['q']==5)
                            echo "<span style='color:red;'>Student form deleted</span>";

                        ?>
                    </div>
                    <?php
                }
                ?>

                <div class="well">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center><h2>List of students</h2></center></div>
                    </div>
                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Student ID</th>
                            <th>Student name</th>
                            <th>Internship status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $count=1;
                        while($row=mysqli_fetch_array($result))
                        {
                            ?>
                            <tr>
                                <td><?php echo $count ?></td>
                                <td><a href="student_view_action.php?student_id=<?php echo $row[2] ?>" target="_blank"><?php echo $row[2] ?></a></td>
                                <td><?php echo ucfirst($row[3]) . " " . ucfirst($row[4]) . " " . ucfirst($row[5]) ?></td>
                                <td> <?php
                                    $query2="select * from assign_job where student_id=$row[2]";
                                    $result2=mysqli_query($conn,$query2);
                                    $row2=mysqli_fetch_array($result2);
                                    if(strlen($row2[0])==0)
                                    {
                                        ?><a href="assign_job1.php?student_id=<?php echo $row[2] ?>" target="_blank">
                                        <?php
                                        echo "Available";
                                        ?>
                                        </a>
                                        <?php
                                    }
                                    else {
                                        ?><a href="view_assigned_job.php?student_id=<?php echo $row[2] ?>"
                                             target="_blank">
                                        <?php

                                        echo "Hired";
                                        ?>
                                        </a>
                                        <?php
                                    }
                                    ?>

                                </td>
                            </tr>
                            <?php
                            $count++;
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