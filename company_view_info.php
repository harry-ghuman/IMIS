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
$query="select * from company_info";
$result=mysqli_query($conn,$query);
?>
<div style="background-image: url('images/company.jpg');padding: 40px;height:571px;background-size: 100%;background-repeat: no-repeat">
    <div class="container">
        <div class="row">

            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="well">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <center><h2>List of companies</h2></center>
                        </div>
                    </div>
                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <th>Company name</th>
                            <th>City</th>
                            <th>Country</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($row=mysqli_fetch_array($result))
                        {
                            ?>
                            <tr>
                                <td><a href="company_view_action.php?company_name=<?php echo $row[1] ?>" target="_blank"><?php echo $row[1] ?></a></td>
                                <td><?php echo $row[3] ?></td>
                                <td><?php echo $row[5] ?></td>
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
                                echo "<span style='color:red;'>  Company form deleted</span>";
                            if(isset($_REQUEST['q']) && $_REQUEST['q']==2)
                                echo "<span style='color:red;'>  Company added successfully</span>";
                            if(isset($_REQUEST['q']) && $_REQUEST['q']==3)
                                echo "<span style='color:red;'>  Company form edited successfully</span>";
                            if(isset($_REQUEST['q']) && $_REQUEST['q']==4)
                                echo "<span style='color:red;'>  Company already exists</span>";
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

