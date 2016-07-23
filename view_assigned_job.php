<!doctype>
<html>
<head>

</head>
<body>
<?php
include "header.php";
include "connection.php";
$student_id=$_REQUEST['student_id'];
$query="select * from assign_job where student_id=$student_id";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
?>
<div style="background-image: url('images/student2.jpg');padding: 40px;height:525px;background-size: 100%;">
    <div class="container">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="well">
                <div class="panel panel-primary">
                    <div class="panel-heading"><center><h2>Internship information (Student ID=<?php echo $student_id ?>)</h2></center></div>
                </div>
                <table class="table table-condensed">
                    <?php
                    if($row[2]=='company') {
                        ?>
                        <thead>
                        <tr>
                            <th>Internship type</th>
                            <th>Company</th>
                            <th>Job group</th>
                            <th>Job title</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query2="select * from assign_job where student_id=$student_id";
                        $result2=mysqli_query($conn,$query2);

                        while ($row2 = mysqli_fetch_array($result2)) {
                            ?>
                            <tr>
                                <td><?php echo $row2[2] ?></td>
                                <td><?php echo $row2[3] ?></td>
                                <td><?php echo $row2[4] ?></td>
                                <td><?php echo $row2[5] ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                        <?php
                    }
                    ?>
                    <?php
                    if($row[2]=='mac project' or $row[2]=='research project' ) {
                        ?>
                        <thead>
                        <tr>
                            <th>Internship type</th>
                            <th>Project name</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td><?php echo $row[2] ?></td>
                            <td><?php echo $row[6] ?></td>
                        </tr>
                        </tbody>
                        <?php
                    }
                    ?>
                    <?php
                    if($row[2]=='startup company') {
                        ?>
                        <thead>
                        <tr>
                            <th>Internship type</th>
                            <th>Company name</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td><?php echo $row[2] ?></td>
                            <td><?php echo $row[3] ?></td>
                        </tr>
                        </tbody>
                        <?php
                    }
                    ?>
                    <?php
                    if($row[2]!='startup company' and $row[2]!='company' and $row[2]!='mac project' and $row[2]!='research project') {
                        ?>
                        <thead>
                        <tr>
                            <th>Internship type</th>

                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td><?php echo $row[2] ?></td>
                        </tr>
                        </tbody>
                        <?php
                    }
                    ?>


                </table>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>


