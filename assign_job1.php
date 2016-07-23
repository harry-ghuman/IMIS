<!doctype>
<html>
<head>
    <script type="text/javascript">
        function go()
        {
            var internship_type=document.getElementById("internship_type").value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("sp3").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "assign_job2.php?internship_type=" +internship_type,true);
            xmlhttp.send();
        }

        function go1()
        {
            var company_name=document.getElementById("company_name").value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("sp1").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "assign_job3.php?company_name=" +company_name, true);
            xmlhttp.send();
        }
        function go2()
        {
            var job_group=document.getElementById("job_group").value;
            var company_name=document.getElementById("company_name").value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("sp2").innerHTML = xmlhttp.responseText;
                    }
                }
            xmlhttp.open("GET", "assign_job4.php?job_group=" +job_group+"&company_name="+company_name,true);
                xmlhttp.send();

        }
    </script>
</head>
<body>
<?php
include "header.php";
include "connection.php";
$student_id=$_REQUEST['student_id'];
$query1="select * from personal where student_id='$student_id'";
$result1=mysqli_query($conn,$query1);
$row1=mysqli_fetch_array($result1);

$query2="select company_name from company_info";
$result2=mysqli_query($conn,$query2);

?>
<div style="background-image: url('images/job.jpg');padding: 40px;height:auto;background-size: 100%;">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="well">
                    <div class="row">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <center><h2>Assign job</h2></center>
                            </div>
                        </div>
                    </div>
                    <form action="assign_job_action.php" method="get">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Student ID</label>
                                <input type="number" class="form-control" name="student_id" id="student_id" value="<?php echo $row1[2] ?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Student name</label>
                                <input type="text" class="form-control" name="student_name" value="<?php echo ucfirst($row1[3]) . " " . ucfirst($row1[4]) . " " . ucfirst($row1[5]) ?>"readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Type of internship</label>
                                <select class="form-control" name="internship_type" id="internship_type" onchange="go()">
                                    <option>--select--</option>
                                    <option>company</option>
                                    <option>startup company</option>
                                    <option>research project</option>
                                    <option>mac project</option>
                                    <option>other</option>
                                </select>
                                <span id="sp3"></span>
                            </div>
                        </div>
                        <span id="sp1"></span>
                        <span id="sp2"></span>
                        <button type="submit" class="btn btn-primary btn-md">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
