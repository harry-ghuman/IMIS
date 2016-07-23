<!doctype>
<html>
<head>
</head>
<body>
<?php
include "header.php";
include "connection.php";
$project_name=$_REQUEST['project_name'];
//echo $company_name;
$query="select * from project_info where project_name='$project_name'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
?>
<div style="background-image: url('images/project.jpeg');padding: 40px;height:525px;background-size: 100%;background-repeat: no-repeat">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="well">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center><h2>Project information</h2></center></div>
                    </div>
                    <table class="table table-condensed">
                        <thead></thead>
                        <tbody>
                        <tr>
                            <td><span style="font-weight:bold">Project type</span></td>
                            <td></td>
                            <td><?php echo $row[1] ?></td>
                        </tr>
                        <tr>
                            <td><span style="font-weight:bold">Project name</span></td>
                            <td></td>
                            <td><?php echo $row[2] ?></td>
                        </tr>
                        <tr>
                            <td><span style="font-weight:bold">Project description</span></td>
                            <td></td>
                            <td><?php echo $row[3] ?></td>
                        </tr>

                </tbody>
            </table>
                    <button onclick="location.href='project_edit_form.php?project_name=<?php echo $project_name ?>'"class="btn btn-primary btn-md">Edit form</button>
                    <button onclick="location.href='project_delete_form.php?project_name=<?php echo $project_name ?>'"class="btn btn-primary btn-md">Delete form</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
