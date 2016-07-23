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
$job_group=$_REQUEST['job_group'];
if($job_group=="web development")
{
    ?>
    <div class="row">
        <div class="form-group col-md-12">
            <br>
            <label>Job sub group</label>
            <select name="job_sub_group" id="job_sub_group" class="form-control" onchange="go2()">
                <option>--select--</option>
                <option>php developer</option>
                <option>asp.net developer</option>
                <option>ruby developer</option>
                <option>other</option>
            </select>
            <span id="sp2"></span>
        </div>
    </div>
    <?php
}
if($job_group=="mobile development")
{
    ?>
    <div class="row">
        <div class="form-group col-md-12">
            <br>
            <label>Job sub group</label>
            <select name="job_sub_group" id="job_sub_group" class="form-control" onchange="go2()">
                <option>--select--</option>
                <option>android developer</option>
                <option>ios developer</option>
                <option>other</option>
            </select>
            <span id="sp2"></span>
        </div>
    </div>
    <?php
}
if($job_group=="system development" or $job_group=="technical support" or $job_group=="networking" or $job_group=="data analysis" or $job_group=="testing" or $job_group=="security" or $job_group=="data management" or $job_group=="other")
{
    ?>
    <div class="row">
        <div class="form-group col-md-12">
            <br>
            <label>Enter job title</label>
            <input type="text"class="form-control"name="job_sub_group2">
        </div>
    </div>
    <?php
}
?>
</body>
</html>