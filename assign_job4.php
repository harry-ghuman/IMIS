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
$job_group=$_REQUEST['job_group'];
$company_name=$_REQUEST['company_name'];
$query4="select * from job where company_name='$company_name' and job_group='$job_group'";
$result4=mysqli_query($conn,$query4);
?>
<div class="row">
    <div class="form-group col-md-12">
        <label>Job Title</label>
        <select class="form-control" name="job_title" id="job_title">
            <option>--select--</option>
            <?php
            while($row4=mysqli_fetch_array($result4))
            {
                if(strlen($row4[3])!=0)
            {
                $job_title=$row4[3];
            }
            elseif(strlen($row4[3])==0 or $row4[3]=='other')
            {
                $job_title=$row4[4];
            }

                ?>
                <option><?php echo $job_title?></option>
                <?php
            }
            ?>
        </select>
</div>
    </div>



</body>
</html>
