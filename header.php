<?php
session_start();
if(isset($_SESSION['admin']))
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
            <a class="navbar-brand" href="homepage.php">IMIS</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="homepage.php">Home</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="homepage.php">Student
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="student_add_form.php">Add student</a></li>
                    <li><a href="student_view_info.php">View students</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Company
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="company_add_form.php">Add company</a></li>
                    <li><a href="company_view_info.php">View companies</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Job
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="job_add_form.php">Add job</a></li>
                    <li><a href="job_view.php">View jobs</a></li>
                    <li><a href="assign_job_index.php">Assign job</a></li>
                    <li><a href="delete_assigned_job.php">Delete assigned job</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Projects
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="project_add_form.php">Add project</a></li>
                    <li><a href="project_view.php">View projects</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="reports.php">Reports
                    </a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Student accounts
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="student_account_create.php">Create student account</a></li>
                    <li><a href="delete_student_account.php">Delete student account</a></li>
                    <li><a href="student_accounts_view.php">View student accounts</a></li>

                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin accounts
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="admin_create.php">Create admin account</a></li>
                    <li><a href="admin_delete.php">Delete admin account</a></li>
                    <li><a href="admin_view.php">View admin accounts</a></li>

                </ul>
            </li>
            <li><a href="admin_logout.php">
                        <span class="glyphicon glyphicon-off"></span>
                    Logout</a>
            </li>
        </ul>
    </div>
</nav>
</body>
</html>