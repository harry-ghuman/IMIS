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
<div style="background-image: url('images/project.jpeg');padding: 40px;height:auto;background-size: 100%;background-repeat: no-repeat">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="well">
                    <div class="row">
                        <div class="form-group">
                            <div class="panel panel-primary">
                                <div class="panel-heading"><center><h2>Edit project information</h2></center></div>
                            </div>
                        </div>
                    </div>
                    <form action="project_edit_action.php" method="get">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <table class="table table-condensed">
                    <thead></thead>
                    <tbody>
                    <tr>
                        <td>Project Name</td>
                        <td></td>
                        <td><input type="text"class="form-control"name="project_name" value="<?php echo $project_name ?>"readonly></td>
                    </tr>
                    <tr>
                        <td>Project type</td>
                        <td></td>
                        <td>
                        <select class="form-control" name="project_type">
                            <option selected="selected">
                                <?php echo $row[1] ?>
                            </option>
                            <option>research project</option>
                            <option>mac project</option>
                        </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Project description</td>
                        <td></td>
                        <td><textarea class="form-control" rows="8" name="project_description"><?php echo $row[3] ?></textarea></td>
                        </td>
                    </tr>

                    </tbody>
                </table>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-md">Submit</button>
                    </form>
                    <button onclick="location.href='project_view_action.php?project_name=<?php echo $project_name ?>'"class="btn btn-primary btn-md">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>



