<html>
<head>
</head>
<body>
<?php
include "connection.php";
include "header.php";
$company_name=$_REQUEST['company_name'];

$query="select * from assign_job where company_name='$company_name'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
?>
<div style="background-image: url('images/company.jpg');padding: 40px;height:571px;background-size: 100%;background-repeat: no-repeat">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="well">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center><h2>Company historical data</h2></center></div>
                    </div>
                    <?php
                    if ($company_name != $row[3]) {
                        echo "no student hired";
                    }
                    else {
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
                            $query3 = "select DISTINCT student_id from assign_job where company_name='$row[3]'";
                            $result3 = mysqli_query($conn, $query3);

                            while($row3=mysqli_fetch_array($result3)) {
                                $query2 = "select * from personal where student_id='$row3[0]'";
                                $result2 = mysqli_query($conn, $query2);
                                $row2 = mysqli_fetch_array($result2);

                                ?>
                                <tr>
                                    <td><?php echo $count ?></td>
                                    <td><?php echo $row3[0] ?></td>
                                    <td><?php echo ucfirst($row2[3]) . " " . ucfirst($row2[4]) . " " . ucfirst($row2[5]) ?></td>
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

