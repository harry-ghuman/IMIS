<!doctype>
<html>
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
include "header.php";
include "connection.php";
$query="select * from project_info";
$result=mysqli_query($conn,$query);
?>
<div style="background-image: url('images/project.jpeg');padding: 40px;height:525px;background-size: 100%;background-repeat: no-repeat">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="well">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center><h2>List of projects</h2></center></div>
                    </div>
                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <th>Project name</th>
                            <th>Project type</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($row=mysqli_fetch_array($result))
                        {
                            ?>
                            <tr>
                                <td><a href="project_view_action.php?project_name=<?php echo $row[2] ?>" target="_blank"><?php echo $row[2] ?></td>
                                <td><?php echo $row[1] ?></a></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                    <?php
                    if(isset($_REQUEST['q']))
                    {
                    ?>
                    <div class="error">
                        <?php
                        if(isset($_REQUEST['q']) && $_REQUEST['q']==1)
                            echo "<span style='color:red;'>Project form deleted</span>";
                        if(isset($_REQUEST['q']) && $_REQUEST['q']==2)
                            echo "<span style='color:red;'>Project added successfully</span>";
                        if(isset($_REQUEST['q']) && $_REQUEST['q']==3)
                            echo "<span style='color:red;'>Project form edited successfully</span>";
                        if(isset($_REQUEST['q']) && $_REQUEST['q']==4)
                            echo "<span style='color:red;'>Project already exists</span>";
                        ?>
                    </div>
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

