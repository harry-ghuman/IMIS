<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
include "header.php";
include "connection.php";
$email=$_SESSION['admin'];
$query="select * from admin where email='$email'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
?>
<div style="background-image: url('images/student2.jpg');padding: 40px;height:571px;background-size: 100%;">
    <div class="container">
        <center>
            <h2>
            <strong>Welcome <?php echo ucfirst($row[3])?></strong>
            </h2>
        </center>
    </div>
</div>
</body>
</html>
