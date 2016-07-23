<!DOCTYPE html>
<html lang="en">
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
include "a_student_header.php";
?>
<div style="background-image: url('images/student2.jpg');padding: 40px;height:571px;background-size: 100%;">
<div class="container">

    <div class="row">
        <div class="col-md-8">
        </div>
        <div class="col-md-4">



    <?php
    if(isset($_REQUEST['q']))
    {
    ?>
    <div class="error">
        <?php
        if(isset($_REQUEST['q']) && $_REQUEST['q']==1)
                    echo "<span style='color:red;'><center>Student form edited successfully</center></span>";
        if(isset($_REQUEST['q']) && $_REQUEST['q']==2)
            echo "<span style='color:red;'><center>Request submitted</center></span>";
        if(isset($_REQUEST['q']) && $_REQUEST['q']==3)
            echo "<span style='color:red;'><center>Already applied for the job</center></span>";
        ?>
    </div>
        <?php
    }

    ?>
            </div>
    </div>
    <div class="row">

    <?php
    echo "
    <br><br><center><span style='font-size:x-large;'>Welcome </span>  <b style='font-size:xx-large;'>".ucfirst($_SESSION['username'])."</b></center>
    <br><br>";
    ?>
        </div>
</div>
</div>
</body>
</html>
