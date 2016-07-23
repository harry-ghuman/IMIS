<!doctype>
<html>
<head>
    <script type="text/javascript">
        function go()
        {
            var status=document.getElementById("status").value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("sp1").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "student_add_form2.php?status=" +status,true);
            xmlhttp.send();
        }
    </script>

</head>
<body>
<?php
include "header.php";
?>
<div style="background-image: url('images/student2.jpg');padding: 40px;height:auto;background-size: 100%;">
    <div class="container-fluid">
        <form action="student_add_action.php" method="get">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <div class="well">
                        <div class="row">
                            <div class="form-group">
                                <div class="panel panel-primary">
                                    <div class="panel-heading"><h2><center>Student Pre-Internship Survey</center></h2></div>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Semester registered</label>
                                    <select class="form-control" name="semester">
                                        <option>Fall</option>
                                        <option>Winter</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Year</label>
                                    <select class="form-control"name="year">
                                        <option>2015</option>
                                        <option>2016</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <span class="badge">1</span>&nbsp;<label><h3> <strong>Personal Information</strong></h3></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Student ID</label>
                                    <input type="number"class="form-control"name="student_id">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>First name</label>
                                    <input type="text"class="form-control"name="firstname">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Middle name</label>
                                    <input type="text"class="form-control"name="middlename">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Last name</label>
                                    <input type="text"class="form-control"name="lastname">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Email</label>
                                    <input type="email"class="form-control"name="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Telephone</label>
                                    <input type="number"class="form-control"name="telephone">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Gender</label>
                                    <select class="form-control"name="gender">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                    <br>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Status</label>
                                    <select class="form-control"name="status" id="status" onchange="go()">
                                        <option>permanent resident/citizen</option>
                                        <option>international student</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <span id="sp1"></span>
                                </div>
                            </div>
                            <div class="row">
                                &nbsp;
                                <span class="badge">2</span><button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#education">Add education and training</button>
                                &nbsp;
                                <span class="badge">3</span><button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#workexperience">Add work experience</button>
                                &nbsp;
                                <span class="badge">4</span><button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#skills">Add skills</button>
                            </div>
                            <div class="row">
                                <div id="skills" class="collapse">
                                    <br>
                                    <button type="button" class="btn" data-toggle="collapse" data-target="#technical">Technical</button>
                                    &nbsp;
                                    <button type="button" class="btn" data-toggle="collapse" data-target="#cms">CMS</button>
                                    &nbsp;
                                    <button type="button" class="btn" data-toggle="collapse" data-target="#operatingsystem">Operating systems</button>
                                </div>
                            </div>
                        <br>
                        <div class="row">
                            <div class="col-md-9"></div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="education" class="collapse">

                    <div class="well">
                        <table>
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Major</th>
                                    <th>GPA</th>
                                    <th>University</th>
                                    <th>Country</th>
                                    <th>Passing year</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Undergraduate degree</td>
                                    <td><input type="text"name="ug_major"></td>
                                    <td><input type="number"name="ug_gpa"></td>
                                    <td><input type="text" name="ug_university"></td>
                                    <td><input type="text" name="ug_country"></td>
                                    <td><input type="number" name="ug_year"></td>
                                </tr>
                                <tr>
                                    <td>Graduate degree</td>
                                    <td><input type="text" name="pg_major"></td>
                                    <td><input type="number" name="pg_gpa"></td>
                                    <td><input type="text" name="pg_university"></td>
                                    <td><input type="text" name="pg_country"></td>
                                    <td><input type="number" name="pg_year"></td>
                                </tr>
                                <tr>
                                    <td colspan="12">Other - List any other degrees or certifications you have</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="degree1_name"></td>
                                    <td><input type="text" name="degree1_major"></td>
                                    <td><input type="text" name="degree1_gpa"></td>
                                    <td><input type="text" name="degree1_university"></td>
                                    <td><input type="text" name="degree1_country"></td>
                                    <td><input type="number" name="degree1_year"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="degree2_name"></td>
                                    <td><input type="text" name="degree2_major"></td>
                                    <td><input type="text" name="degree2_gpa"></td>
                                    <td><input type="text" name="degree2_university"></td>
                                    <td><input type="text" name="degree2_country"></td>
                                    <td><input type="number" name="degree2_year"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="degree3_name"></td>
                                    <td><input type="text" name="degree3_major"></td>
                                    <td><input type="text" name="degree3_gpa"></td>
                                    <td><input type="text" name="degree3_university"></td>
                                    <td><input type="text" name="degree3_country"></td>
                                    <td><input type="number" name="degree3_year"></td>
                                </tr>
                                </tbody>
                            </table>
                    </div>

                </div>
            </div>
            <div class="row">
                <div id="workexperience" class="collapse">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="well">
                            <table>
                                    <thead>
                                    <tr>
                                        <th>Company</th>
                                        <th>Start date</th>
                                        <th>End date</th>
                                        <th>Title</th>
                                        <th>Duties</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><input type="text" name="company1_name"></td>
                                        <td><input type="date" name="company1_startdate"></td>
                                        <td><input type="date" name="company1_enddate"></td>
                                        <td><input type="text" name="company1_title"></td>
                                        <td><input type="text" name="company1_duties"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="company2_name"></td>
                                        <td><input type="date" name="company2_startdate"></td>
                                        <td><input type="date" name="company2_enddate"></td>
                                        <td><input type="text" name="company2_title"></td>
                                        <td><input type="text" name="company2_duties"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="company3_name"></td>
                                        <td><input type="date" name="company3_startdate"></td>
                                        <td><input type="date" name="company3_enddate"></td>
                                        <td><input type="text" name="company3_title"></td>
                                        <td><input type="text" name="company3_duties"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="company4_name"></td>
                                        <td><input type="date" name="company4_startdate"></td>
                                        <td><input type="date" name="company4_enddate"></td>
                                        <td><input type="text" name="company4_title"></td>
                                        <td><input type="text" name="company4_duties"></td>
                                    </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="technical" class="collapse">
                <div class="row">
                    <div class="form-group">
                        <div class="well">

                        <table class="table table-hover">
                                <thead>
                                <th></th>
                                <th>not at all competent</th>
                                <th>little competent</th>
                                <th>moderately competent</th>
                                <th>extremely competent</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>ASP.NET</td>
                                    <td><input type="radio" name="asp" value="not at all competent"></td>
                                    <td><input type="radio" name="asp" value="little competent"></td>
                                    <td><input type="radio" name="asp" value="moderately competent"></td>
                                    <td><input type="radio" name="asp" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>C</td>
                                    <td><input type="radio" name="c" value="not at all competent"></td>
                                    <td><input type="radio" name="c" value="little competent"></td>
                                    <td><input type="radio" name="c" value="moderately competent"></td>
                                    <td><input type="radio" name="c" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>C++</td>
                                    <td><input type="radio" name="cplusplus" value="not at all competent"></td>
                                    <td><input type="radio" name="cplusplus" value="little competent"></td>
                                    <td><input type="radio" name="cplusplus" value="moderately competent"></td>
                                    <td><input type="radio" name="cplusplus" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>C#</td>
                                    <td><input type="radio" name="chash" value="not at all competent"></td>
                                    <td><input type="radio" name="chash" value="little competent"></td>
                                    <td><input type="radio" name="chash" value="moderately competent"></td>
                                    <td><input type="radio" name="chash" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>Flex</td>
                                    <td><input type="radio" name="flex" value="not at all competent"></td>
                                    <td><input type="radio" name="flex" value="little competent"></td>
                                    <td><input type="radio" name="flex" value="moderately competent"></td>
                                    <td><input type="radio" name="flex" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>Java</td>
                                    <td><input type="radio" name="java" value="not at all competent"></td>
                                    <td><input type="radio" name="java" value="little competent"></td>
                                    <td><input type="radio" name="java" value="moderately competent"></td>
                                    <td><input type="radio" name="java" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>JavaScript</td>
                                    <td><input type="radio" name="javascript" value="not at all competent"></td>
                                    <td><input type="radio" name="javascript" value="little competent"></td>
                                    <td><input type="radio" name="javascript" value="moderately competent"></td>
                                    <td><input type="radio" name="javascript" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>LISP</td>
                                    <td><input type="radio" name="lisp" value="not at all competent"></td>
                                    <td><input type="radio" name="lisp" value="little competent"></td>
                                    <td><input type="radio" name="lisp" value="moderately competent"></td>
                                    <td><input type="radio" name="lisp" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>Matlab</td>
                                    <td><input type="radio" name="matlab" value="not at all competent"></td>
                                    <td><input type="radio" name="matlab" value="little competent"></td>
                                    <td><input type="radio" name="matlab" value="moderately competent"></td>
                                    <td><input type="radio" name="matlab" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>MySQL</td>
                                    <td><input type="radio" name="mysql" value="not at all competent"></td>
                                    <td><input type="radio" name="mysql" value="little competent"></td>
                                    <td><input type="radio" name="mysql" value="moderately competent"></td>
                                    <td><input type="radio" name="mysql" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>Objective-C</td>
                                    <td><input type="radio" name="objectivec" value="not at all competent"></td>
                                    <td><input type="radio" name="objectivec" value="little competent"></td>
                                    <td><input type="radio" name="objectivec" value="moderately competent"></td>
                                    <td><input type="radio" name="objectivec" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>Pascal</td>
                                    <td><input type="radio" name="pascal" value="not at all competent"></td>
                                    <td><input type="radio" name="pascal" value="little competent"></td>
                                    <td><input type="radio" name="pascal" value="moderately competent"></td>
                                    <td><input type="radio" name="pascal" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>Perl</td>
                                    <td><input type="radio" name="perl" value="not at all competent"></td>
                                    <td><input type="radio" name="perl" value="little competent"></td>
                                    <td><input type="radio" name="perl" value="moderately competent"></td>
                                    <td><input type="radio" name="perl" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>PHP</td>
                                    <td><input type="radio" name="php" value="not at all competent"></td>
                                    <td><input type="radio" name="php" value="little competent"></td>
                                    <td><input type="radio" name="php" value="moderately competent"></td>
                                    <td><input type="radio" name="php" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>Prolog</td>
                                    <td><input type="radio" name="prolog" value="not at all competent"></td>
                                    <td><input type="radio" name="prolog" value="little competent"></td>
                                    <td><input type="radio" name="prolog" value="moderately competent"></td>
                                    <td><input type="radio" name="prolog" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>Python</td>
                                    <td><input type="radio" name="python" value="not at all competent"></td>
                                    <td><input type="radio" name="python" value="little competent"></td>
                                    <td><input type="radio" name="python" value="moderately competent"></td>
                                    <td><input type="radio" name="python" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>R</td>
                                    <td><input type="radio" name="r" value="not at all competent"></td>
                                    <td><input type="radio" name="r" value="little competent"></td>
                                    <td><input type="radio" name="r" value="moderately competent"></td>
                                    <td><input type="radio" name="r" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>Ruby</td>
                                    <td><input type="radio" name="ruby" value="not at all competent"></td>
                                    <td><input type="radio" name="ruby" value="little competent"></td>
                                    <td><input type="radio" name="ruby" value="moderately competent"></td>
                                    <td><input type="radio" name="ruby" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>SQL-Oracle</td>
                                    <td><input type="radio" name="sqloracle" value="not at all competent"></td>
                                    <td><input type="radio" name="sqloracle" value="little competent"></td>
                                    <td><input type="radio" name="sqloracle" value="moderately competent"></td>
                                    <td><input type="radio" name="sqloracle" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>Tcl</td>
                                    <td><input type="radio" name="tcl" value="not at all competent"></td>
                                    <td><input type="radio" name="tcl" value="little competent"></td>
                                    <td><input type="radio" name="tcl" value="moderately competent"></td>
                                    <td><input type="radio" name="tcl" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>T-SQL</td>
                                    <td><input type="radio" name="tsql" value="not at all competent"></td>
                                    <td><input type="radio" name="tsql" value="little competent"></td>
                                    <td><input type="radio" name="tsql" value="moderately competent"></td>
                                    <td><input type="radio" name="tsql" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>VB.NET</td>
                                    <td><input type="radio" name="vb" value="not at all competent"></td>
                                    <td><input type="radio" name="vb" value="little competent"></td>
                                    <td><input type="radio" name="vb" value="moderately competent"></td>
                                    <td><input type="radio" name="vb" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td colspan="12">other</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="other_technical_skill_name"></td>
                                    <td><input type="radio" name="other_technical_skill" value="not at all competent"></td>
                                    <td><input type="radio" name="other_technical_skill" value="little competent"></td>
                                    <td><input type="radio" name="other_technical_skill" value="moderately competent"></td>
                                    <td><input type="radio" name="other_technical_skill" value="extremely competent"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="cms" class="collapse">
                <div class="row">
                    <div class="form-group">
                        <div class="well">
                            <table class="table table-hover">
                                <thead>
                                <th></th>
                                <th>not at all competent</th>
                                <th>little competent</th>
                                <th>moderately competent</th>
                                <th>extremely competent</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Concrete5</td>
                                    <td><input type="radio" name="concrete5" value="not at all competent"></td>
                                    <td><input type="radio" name="concrete5" value="little competent"></td>
                                    <td><input type="radio" name="concrete5" value="moderately competent"></td>
                                    <td><input type="radio" name="concrete5" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>DotNetNuke</td>
                                    <td><input type="radio" name="dotnetnuke" value="not at all competent"></td>
                                    <td><input type="radio" name="dotnetnuke" value="little competent"></td>
                                    <td><input type="radio" name="dotnetnuke" value="moderately competent"></td>
                                    <td><input type="radio" name="dotnetnuke" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>Drupal</td>
                                    <td><input type="radio" name="drupal" value="not at all competent"></td>
                                    <td><input type="radio" name="drupal" value="little competent"></td>
                                    <td><input type="radio" name="drupal" value="moderately competent"></td>
                                    <td><input type="radio" name="drupal" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>Joomla</td>
                                    <td><input type="radio" name="joomla" value="not at all competent"></td>
                                    <td><input type="radio" name="joomla" value="little competent"></td>
                                    <td><input type="radio" name="joomla" value="moderately competent"></td>
                                    <td><input type="radio" name="joomla" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>Wordpress</td>
                                    <td><input type="radio" name="wordpress" value="not at all competent"></td>
                                    <td><input type="radio" name="wordpress" value="little competent"></td>
                                    <td><input type="radio" name="wordpress" value="moderately competent"></td>
                                    <td><input type="radio" name="wordpress" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td colspan="12">other</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="other_cms_skill_name"></td>
                                    <td><input type="radio" name="other_cms_skill" value="not at all competent"></td>
                                    <td><input type="radio" name="other_cms_skill" value="little competent"></td>
                                    <td><input type="radio" name="other_cms_skill" value="moderately competent"></td>
                                    <td><input type="radio" name="other_cms_skill" value="extremely competent"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="operatingsystem" class="collapse">
                <div class="row">
                    <div class="form-group">
                        <div class="well">
                            <table class="table table-hover">
                                <thead>
                                <th></th>
                                <th>not at all competent</th>
                                <th>little competent</th>
                                <th>moderately competent</th>
                                <th>extremely competent</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Android</td>
                                    <td><input type="radio" name="android" value="not at all competent"></td>
                                    <td><input type="radio" name="android" value="little competent"></td>
                                    <td><input type="radio" name="android" value="moderately competent"></td>
                                    <td><input type="radio" name="android" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>Chrome OS</td>
                                    <td><input type="radio" name="chromeos" value="not at all competent"></td>
                                    <td><input type="radio" name="chromeos" value="little competent"></td>
                                    <td><input type="radio" name="chromeos" value="moderately competent"></td>
                                    <td><input type="radio" name="chromeos" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>iOS</td>
                                    <td><input type="radio" name="ios" value="not at all competent"></td>
                                    <td><input type="radio" name="ios" value="little competent"></td>
                                    <td><input type="radio" name="ios" value="moderately competent"></td>
                                    <td><input type="radio" name="ios" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>Linux</td>
                                    <td><input type="radio" name="linux" value="not at all competent"></td>
                                    <td><input type="radio" name="linux" value="little competent"></td>
                                    <td><input type="radio" name="linux" value="moderately competent"></td>
                                    <td><input type="radio" name="linux" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>MAC OS</td>
                                    <td><input type="radio" name="macos" value="not at all competent"></td>
                                    <td><input type="radio" name="macos" value="little competent"></td>
                                    <td><input type="radio" name="macos" value="moderately competent"></td>
                                    <td><input type="radio" name="macos" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>Unix</td>
                                    <td><input type="radio" name="unix" value="not at all competent"></td>
                                    <td><input type="radio" name="unix" value="little competent"></td>
                                    <td><input type="radio" name="unix" value="moderately competent"></td>
                                    <td><input type="radio" name="unix" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td>Windows</td>
                                    <td><input type="radio" name="windows" value="not at all competent"></td>
                                    <td><input type="radio" name="windows" value="little competent"></td>
                                    <td><input type="radio" name="windows" value="moderately competent"></td>
                                    <td><input type="radio" name="windows" value="extremely competent"></td>
                                </tr>
                                <tr>
                                    <td colspan="12">other</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="other_os_skill_name"></td>
                                    <td><input type="radio" name="other_os_skill" value="not at all competent"></td>
                                    <td><input type="radio" name="other_os_skill" value="little competent"></td>
                                    <td><input type="radio" name="other_os_skill" value="moderately competent"></td>
                                    <td><input type="radio" name="other_os_skill" value="extremely competent"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>

