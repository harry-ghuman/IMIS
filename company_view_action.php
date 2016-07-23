<!doctype>
<html>
<head>
</head>
<body>
<?php
include "header.php";
include "connection.php";
$company_name=$_REQUEST['company_name'];
//echo $company_name;
$query="select * from company_info where company_name='$company_name'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
?>
<div style="background-image: url('images/company.jpg');padding: 40px;height:auto;background-size: 100%;background-repeat: no-repeat">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="well">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <center><h2>Company information</h2></center>
                        </div>
                    </div>
                    <table class="table table-condensed">
                        <thead></thead>
                        <tbody>
                        <tr>
                            <td>Company name</td>
                            <td></td>
                            <td><?php echo $row[1] ?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td></td>
                            <td><?php echo $row[2] ?></td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td></td>
                            <td><?php echo $row[3] ?></td>
                        </tr>
                        <tr>
                            <td>Postal code</td>
                            <td></td>
                            <td><?php echo $row[4] ?></td>
                        </tr>
                        <tr>
                            <td>Country</td>
                            <td></td>
                            <td><?php echo $row[5] ?></td>
                        </tr>
                        <tr>
                            <td>Contact person- First name</td>
                            <td></td>
                            <td><?php echo $row[6] ?></td>
                        </tr>
                        <tr>
                            <td>Contact person- Last name</td>
                            <td></td>
                            <td><?php echo $row[7] ?></td>
                        </tr>
                        <tr>
                            <td>Contact person- Position</td>
                            <td></td>
                            <td><?php echo $row[8] ?></td>
                        </tr>
                        <tr>
                            <td>Telephone</td>
                            <td></td>
                            <td><?php echo $row[9] ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td></td>
                            <td><a href="mailto:<?php echo $row[10] ?>"><?php echo $row[10] ?></td>
                        </tr>
                        <tr>
                            <td>Website</td>
                            <td></td>
                            <td><a href="<?php echo $row[11] ?>" target="_blank"><?php echo $row[11] ?></a></td>
                        </tr>
                        <tr>
                            <td>Notes</td>
                            <td></td>
                            <td><?php echo $row[12] ?></td>
                        </tr>
                        <tr>

                            <td><a href="company_historical_data.php?company_name=<?php echo$row[1]?>">View historical data</a></td>

                        </tr>
                        </tbody>
                    </table>
                    <button onclick="location.href='company_edit_form.php?company_name=<?php echo $company_name ?>'"class="btn btn-primary btn-md">Edit form</button>
                    <button onclick="location.href='company_delete_form.php?company_name=<?php echo $company_name ?>'"class="btn btn-primary btn-md">Delete form</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
