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
$internship_type=$_REQUEST['internship_type'];
//echo $internship_type;
$query2="select company_name from company_info";
$result2=mysqli_query($conn,$query2);

$query3="select project_name from project_info where project_type='$internship_type'";
$result3=mysqli_query($conn,$query3);


if($internship_type=='company')
{
?>
<div class="row">
        <div class="form-group col-md-12">
            <br>
            <label>Company name</label>
            <select class="form-control" name="company_name" id="company_name"onchange="go1()">
                <option>--select--</option>
                <?php
                while($row2=mysqli_fetch_array($result2))
                {
                    ?>
                    <option><?php echo $row2[0] ?></option>
                    <?php
                }
                ?>
</select>
        </div>
</div>
<?php
}

if($internship_type=='startup company')
{
?>
<div class="row">
    <div class="form-group col-md-12">
        <br>
        <label>Company name</label>
        <input type="text"class="form-control"name="startup_company_name">
        </div>
    </div>
    <?php
}

if($internship_type=='research project')
{

    ?>
<div class="row">
    <div class="form-group col-md-12">
        <br>
        <label>Project name</label>
        <select class="form-control" name="research_project_name" id="research_project_name">
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
    <?php
}

if($internship_type=='mac project')
{
?><div class="row">
    <div class="form-group col-md-12">
        <br>
        <label>Project name</label>
        <select class="form-control" name="mac_project_name" id="mac_project_name">
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


    <?php
}

if($internship_type=='other') {
    ?>
    <div class="row">
        <div class="form-group col-md-12">
            <br>
            <label>Enter internship type</label>
            <input type="text" class="form-control" name="other_internship_type">
        </div>
    </div>
    <?php
}
?>



</body>
</html>
