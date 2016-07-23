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
include "connection.php";
include "header.php";

$job_title=$_REQUEST['job_title'];
$job_group=$_REQUEST['job_group'];
$company_name=$_REQUEST['company_name'];

$query="select * from interested_students where job_title='$job_title'and job_group='$job_group' and company='$company_name'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
?>
<div style="background-image: url('images/job.jpg');padding: 40px;height:571px;background-size: 100%;background-repeat: no-repeat">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>

            <div class="col-md-8">
                <div class="well">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center><h2>List of interested students for <?php echo $job_title. " in " .$company_name?></h2></center></div>
                    </div>
                    <?php
                    if ($job_title != $row[2] and $job_group != $row[3] and $company_name != $row[4]) {
                    echo "no interested students";
                    }
                    else {
                    $query3="select * from interested_students where job_title='$job_title'and job_group='$job_group' and company='$company_name'";
                    $result3=mysqli_query($conn,$query3);



                    ?>

                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Student ID</th>
                            <th>Student name</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $count=1;
                        while($row3=mysqli_fetch_array($result3)) {
                            $query2 = "select * from personal where student_id='$row3[1]'";
                            $result2 = mysqli_query($conn, $query2);
                            $row2 = mysqli_fetch_array($result2);

                                ?>
                                <tr>
                                    <td><?php echo $count ?></td>
                                    <td><?php echo $row3[1] ?></td>
                                    <td><?php echo ucfirst($row2[3]) . " " . ucfirst($row2[4]) . " " . ucfirst($row2[5]) ?></td>
                                    <td><a href="assign_job1.php?student_id=<?php echo $row3[1] ?>" target="_blank">
                                            <?php
                                            echo "Assign job";
                                            ?>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                $count++;
                            }

                        ?>

                        </tbody>
                    </table>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

