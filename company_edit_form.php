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
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="well">
                    <div class="row">
                        <div class="form-group">
                            <div class="panel panel-primary">
                                <div class="panel-heading"><h2><center>Edit company information</center></h2></div>
                            </div>
                        </div>
                    </div>
                    <form action="company_edit_action.php" method="get">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <table class="table table-condensed">
                                    <thead></thead>
                                    <tbody>
                                    <tr>
                                        <td>Company name</td>
                                        <td></td>
                                        <td><input type="text"class="form-control"name="company_name" value="<?php echo $company_name ?>" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td></td>
                                        <td><input type="text"class="form-control"name="address" value="<?php echo $row[2] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>City</td>
                                        <td></td>
                                        <td><input type="text"class="form-control"name="city" value="<?php echo $row[3] ?>">
                                    </td>
                                    </tr>
                                    <tr>
                                        <td>Postal code</td>
                                        <td></td>
                                    <td><input type="text"class="form-control"name="postal_code" value="<?php echo $row[4] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Country</td>
                                        <td></td>
                                        <td><input type="text"class="form-control"name="country" value="<?php echo $row[5] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Contact person- First name</td>
                                        <td></td>
                                        <td><input type="text"class="form-control"name="cp_firstname" value="<?php echo $row[6] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Contact person- Last name</td>
                                        <td></td>
                                        <td><input type="text"class="form-control"name="cp_lastname" value="<?php echo $row[7] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Contact person- Position</td>
                                        <td></td>
                                        <td><input type="text"class="form-control"name="cp_position" value="<?php echo $row[8] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Telephone</td>
                                    <td></td>
                                    <td><input type="number"class="form-control"name="telephone" value="<?php echo $row[9] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td></td>
                                        <td><input type="email"class="form-control"name="email" value="<?php echo $row[10] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td></td>
                                        <td><input type="url"class="form-control"name="company_website" value="<?php echo $row[11] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Notes</td>
                                        <td></td>
                                        <td><textarea class="form-control" rows="4" name="notes"><?php echo $row[12] ?></textarea></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-md">Submit</button>
                    </form>
                    <button onclick="location.href='company_view_action.php?company_name=<?php echo $company_name ?>'"class="btn btn-primary btn-md">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>



