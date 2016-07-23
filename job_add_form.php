<!doctype>
<html>
<head>
    <script type="text/javascript">
        function go()
        {
            var job_group=document.getElementById("job_group").value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("sp1").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "job_add_form2.php?job_group=" +job_group, true);
            xmlhttp.send();
        }
        function go2()
        {
            var job_sub_group=document.getElementById("job_sub_group").value;
            if (job_sub_group=="other") {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("sp2").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "job_add_form3.php?job_sub_group=" + job_sub_group, true);
                xmlhttp.send();
            }
        }
    </script>
</head>
<body>
<?php
include "header.php";
include "connection.php";
$query="select company_name from company_info";
$result=mysqli_query($conn,$query);
?>
<div style="background-image: url('images/job.jpg');padding: 40px;height:auto;background-size: 100%;">
    <div class="container">
        <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="well">
                    <div class="row">
                        <div class="panel panel-primary">
                            <div class="panel-heading"><h2>Add job</h2></div>
                        </div>
                    </div>
                    <form action="job_add_action.php" method="get">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Company name</label>
                                <select class="form-control" name="company_name">
                                    <option>--select--</option>
                                    <?php
                                    while($row=mysqli_fetch_array($result))
                                    {
                                        ?>
                                        <option><?php echo $row[0] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Job group</label>
                                <select name="job_group" id="job_group" class="form-control" onchange="go()">
                                    <option>--select--</option>
                                    <option>web development</option>
                                    <option>mobile development</option>
                                    <option>system development</option>
                                    <option>technical support</option>
                                    <option>networking</option>
                                    <option>data analysis</option>
                                    <option>testing</option>
                                    <option>security</option>
                                    <option>data management</option>
                                    <option>other</option>
                                </select>
                                <span id="sp1"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Description</label>
                                <textarea class="form-control" rows="4" name="description"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Responsibilities</label>
                                <textarea class="form-control" rows="4" name="responsibilities"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Requirements</label>
                                <textarea class="form-control" rows="4" name="requirements"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Salary</label>
                                <input type="text"class="form-control"name="salary" placeholder="if job is unpaid, enter zero">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-md">Submit</button>
                    </form>
                </div>
            </div>

    </div>
</div>
</body>
</html>