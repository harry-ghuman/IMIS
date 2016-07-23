<!doctype>
<html>
<head>
    <title>IMIS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<?php
include "connection.php";
$company_name=$_REQUEST['company_name'];
//echo $company_name;
$query3="select DISTINCT job_group from job where company_name='$company_name'";
$result3=mysqli_query($conn,$query3);

?>
<div class="row">
    <div class="form-group col-md-12">
        <label>Job group</label>
        <select class="form-control" name="job_group" id="job_group" onchange="go2()">
            <option>--select--</option>
            <?php
            while($row3=mysqli_fetch_array($result3))
            {
                ?>
                <option><?php echo $row3[0] ?></option>
                <?php
            }
            ?>


        </select>

    </div>
</div>
<input type="hidden" id="company_name" value="<?php echo $company_name?>">




</body>
</html>
