<!DOCTYPE html>
<html lang="en">
<head>
    <style>

        .error {
            font-family:Arial, Helvetica, sans-serif;
            font-size:15px;
            font-weight: bold;
            color: #D8000C;
            background-color: #FFBABA;
        }
    </style>

</head>
<body>
<?php
include "header.php";
?>
<div style="background-image: url('images/job.jpg');padding: 40px;height:571px;background-size: 100%;">
    <div class="container">
        <form action="delete_assigned_job2.php" method="get">
            <div class="form-group col-md-5">
                <div class="well">
                    <div class="row">
                        <label>Student ID</label>
                        <input type="number" name="student_id"class="form-control" placeholder="Enter the student id whose assigned job you want to delete">
                    </div>
                    <br>
                    <div class="row">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>

                    </div>
                    <br>
                    <?php
                    if(isset($_REQUEST['q']))
                    {
                        ?>
                        <div class="error">
                            <?php
                            if(isset($_REQUEST['q']) && $_REQUEST['q']==1)
                                echo "<span style='color:red;'>Assigned job deleted</span>";
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>