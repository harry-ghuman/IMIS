<!doctype>
<html>
<head>
</head>
<body>
<?php
include "header.php";
include "connection.php";

$country=$_REQUEST['country'];
$semester=$_REQUEST['semester'];
$year=$_REQUEST['year'];
$gender=$_REQUEST['gender'];
$job_status=$_REQUEST['job_status'];

if($job_status=="no job")
    $query4 = "SELECT student_id FROM `personal` where student_id not in (select student_id from assign_job) and country='$country' and semester='$semester' and year= '$year' and gender='$gender'";
else
    $query4 = "select distinct p.student_id from personal p, assign_job a where p.student_id=a.student_id and p.country='$country' and p.semester='$semester' and p.year='$year' and p.gender='$gender' and a.job_status='$job_status'";
$result4 = mysqli_query($conn, $query4);
$row4=mysqli_fetch_array($result4);
?>
<div style="background-image: url('images/student2.jpg');padding: 40px;height:525px;background-size: 100%;">
    <div class="container">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <div class="well">
                <div class="row">

                        <div class="panel panel-primary">
                            <div class="panel-heading"><center><h2>List of students</h2>
                                <button type="button" class="btn btn-primary disabled"><?php echo $country?></button>
                                <button type="button" class="btn btn-primary disabled"><?php echo $semester?></button>
                                <button type="button" class="btn btn-primary disabled"><?php echo $year?></button>
                                <button type="button" class="btn btn-primary disabled"><?php echo $gender?></button>
                                <button type="button" class="btn btn-primary disabled"><?php echo $job_status?></button>
                                    </center>
                            </div>

                        </div>
                    <?php
                    if(strlen($row4[0])==0)
                        echo "no student";
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
                            $count = 1;
                            if($job_status=="no job")
                                $query = "SELECT student_id FROM `personal` where student_id not in (select student_id from assign_job) and country='$country' and semester='$semester' and year= '$year' and gender='$gender' order by student_id ASC ";
                            else
                                $query = "select distinct p.student_id from personal p, assign_job a where p.student_id=a.student_id and p.country='$country' and p.semester='$semester' and p.year='$year' and p.gender='$gender' and a.job_status='$job_status' order by p.student_id ASC ";

                            $result = mysqli_query($conn, $query);

                            while($row=mysqli_fetch_array($result)) {

                                $query3 = "select * from personal where student_id='$row[0]'";
                                $result3 = mysqli_query($conn, $query3);

                                while ($row3 = mysqli_fetch_array($result3)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $count ?></td>
                                        <td><a href="student_view_action.php?student_id=<?php echo $row3[2] ?>"
                                               target="_blank"><?php echo $row3[2] ?></a></td>
                                        <td><?php echo ucfirst($row3[3]) . " " . ucfirst($row3[4]) . " " . ucfirst($row3[5]) ?></td>
                                    </tr>
                                    <?php
                                    $count++;
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                        <br>
                        <br>
                        <br>
                        <input type="button" value="Download report" onclick="window.open('report_pdf.php?country=<?php echo $country?>&job_status=<?php echo $job_status?>&semester=<?php echo $semester?>&year=<?php echo $year?>&gender=<?php echo $gender?>')"  class="btn btn-primary btn-md"/>
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