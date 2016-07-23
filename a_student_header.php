<?php
session_start();
if(isset($_SESSION['username']))
{}
else
{
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>IMIS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="a_student_homepage.php">IMIS</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="a_student_homepage.php">Home</a></li>
            <li class="active"><a href="a_student_view.php">View info</a></li>
            <li class="active"><a href="a_student_job_view.php">View jobs</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="a_student_logout.php">
                    <span class="glyphicon glyphicon-off"></span>
                    Logout</a></li>
        </ul>
    </div>
</nav>
</body>
</html>