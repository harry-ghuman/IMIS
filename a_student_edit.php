<!doctype>
<html>
<head>
</head>
<body>
<?php
include "a_student_header.php";
include "connection.php";
$student_id=$_REQUEST['student_id'];
$query1="select * from personal where student_id='$student_id'";
$result1=mysqli_query($conn,$query1);
$row1=mysqli_fetch_array($result1);

$query2="select * from undergraduate_students where student_id='$student_id'";
$result2=mysqli_query($conn,$query2);

$query3="select * from graduate_students where student_id='$student_id'";
$result3=mysqli_query($conn,$query3);

$query4="select * from work_experience where student_id='$student_id'";
$result4=mysqli_query($conn,$query4);

$query5="select * from other_degrees where student_id='$student_id'";
$result5=mysqli_query($conn,$query5);
?>
<div style="background-image: url('images/student2.jpg');padding: 40px;height:auto;background-size: 100%;">
    <div class="container-fluid">
        <form action="a_student_edit_action.php" method="get">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <div class="well">
                        <div class="row">
                            <div class="form-group">
                                <div class="panel panel-primary">
                                    <div class="panel-heading"><center><h2>Edit student information</h2></center></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Semester registered</label>
                                <select class="form-control" name="semester"required>
                                    <option selected="selected">
                                        <?php echo $row1[0] ?>
                                    </option>
                                    <option>Fall</option>
                                    <option>Winter</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Year</label>
                                <select class="form-control"name="year"required>
                                    <option selected="selected"><?php echo $row1[1] ?></option>
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
                                <input type="text"class="form-control"name="student_id" value="<?php echo $student_id ?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>First name</label>
                                <input type="text"class="form-control"name="firstname" value="<?php echo $row1[3] ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Middle name</label>
                                <input type="text"class="form-control"name="middlename" value="<?php echo $row1[4] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Last name</label>
                                <input type="text"class="form-control"name="lastname" value="<?php echo $row1[5] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Email</label>
                                <input type="email"class="form-control"name="email" value="<?php echo $row1[6] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Telephone</label>
                                <input type="number"class="form-control"name="telephone" value="<?php echo $row1[7] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Gender</label>
                                <select class="form-control"name="gender">
                                    <option selected="selected"><?php echo $row1[9] ?></option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                                <br>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Status</label>
                                <select class="form-control"name="status">
                                    <option selected="selected"><?php echo $row1[8] ?></option>
                                    <option>international student</option>
                                    <option>permanent resident/Citizen</option>
                                </select>
                            </div>
                        </div>
                        <?php
                        if ($row1[8]=='international student') {
                            ?>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Country</label>
                                    <input type="text"class="form-control"name="country" value="<?php echo $row1[10]?>">
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="row">
                            &nbsp;
                            <span class="badge">2</span><button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#education">Education and training</button>
                            &nbsp;
                            <span class="badge">3</span><button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#workexperience">Work experience</button>
                            &nbsp;
                            <span class="badge">4</span><button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#skills">Skills</button>
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
                                <?php
                                while($row2=mysqli_fetch_array($result2))
                                {
                                    ?>
                                    <td>Undergraduate degree</td>
                                    <td><input type="text"name="ug_major" value="<?php echo $row2[1] ?>"></td>
                                    <td><input type="number"name="ug_gpa" value="<?php echo $row2[2] ?>"></td>
                                    <td><input type="text" name="ug_university" value="<?php echo $row2[3] ?>"></td>
                                    <td><input type="text" name="ug_country" value="<?php echo $row2[4] ?>"></td>
                                    <td><input type="number" name="ug_year" value="<?php echo $row2[5] ?>"></td>
                                    <?php
                                }
                                ?>
                            </tr>
                            <tr>
                                <?php
                                while($row3=mysqli_fetch_array($result3))
                                {
                                    ?>
                                    <td>Graduate degree</td>
                                    <td><input type="text" name="pg_major" value="<?php echo $row3[1] ?>"></td>
                                    <td><input type="number" name="pg_gpa" value="<?php echo $row3[2] ?>"></td>
                                    <td><input type="text" name="pg_university" value="<?php echo $row3[3] ?>"></td>
                                    <td><input type="text" name="pg_country" value="<?php echo $row3[4] ?>"></td>
                                    <td><input type="number" name="pg_year" value="<?php echo $row3[5] ?>"></td>
                                    <?php
                                }
                                ?>
                            </tr>
                            <?php
                            while($row5=mysqli_fetch_array($result5))
                            {
                                ?>
                                <tr>
                                    <td><input type="text" name="degree_name[]" value="<?php echo $row5[2] ?>"></td>
                                    <td><input type="text" name="degree_major[]" value="<?php echo $row5[3] ?>"> </td>
                                    <td><input type="text" name="degree_gpa[]" value="<?php echo $row5[4] ?>"></td>
                                    <td><input type="text" name="degree_university[]" value="<?php echo $row5[5] ?>"></td>
                                    <td><input type="text" name="degree_country[]" value="<?php echo $row5[6] ?>"></td>
                                    <td><input type="number" name="degree_year[]" value="<?php echo $row5[7] ?>"></td>
                                </tr>
                                <?php
                            }
                            ?>
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
                                <?php
                                while($row4=mysqli_fetch_array($result4))
                                {
                                    ?>
                                    <tr>
                                        <td><input type="text" name="company_name[]" value="<?php echo $row4[2] ?>"></td>
                                        <td><input type="date" name="company_startdate[]" value="<?php echo $row4[3] ?>"></td>
                                        <td><input type="date" name="company_enddate[]" value="<?php echo $row4[4] ?>"></td>
                                        <td><input type="text" name="company_title[]" value="<?php echo $row4[5] ?>"></td>
                                        <td><input type="text" name="company_duties[]" value="<?php echo $row4[6] ?>"></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="technical" class="collapse">
                <?php
                $query10="select * from technical_skills where student_id='$student_id'";
                $result10=mysqli_query($conn,$query10);
                $row10=mysqli_fetch_array($result10);
                ?>
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
                                    <td><input type="radio" name="asp" value="not at all competent"<?php echo ($row10[2]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="asp" value="little competent"<?php echo ($row10[2]=='little competent'?' checked=checked':''); ?> ></td>
                                    <td><input type="radio" name="asp" value="moderately competent"<?php echo ($row10[2]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="asp" value="extremely competent"<?php echo ($row10[2]=='extremely competent'?' checked=checked':''); ?>> </td>
                                </tr>
                                <tr>
                                    <td>C</td>
                                    <td><input type="radio" name="c" value="not at all competent"<?php echo ($row10[3]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="c" value="little competent"<?php echo ($row10[3]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="c" value="moderately competent"<?php echo ($row10[3]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="c" value="extremely competent"<?php echo ($row10[3]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>C++</td>
                                    <td><input type="radio" name="cplusplus" value="not at all competent"<?php echo ($row10[4]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="cplusplus" value="little competent"<?php echo ($row10[4]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="cplusplus" value="moderately competent"<?php echo ($row10[4]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="cplusplus" value="extremely competent"<?php echo ($row10[4]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>C#</td>
                                    <td><input type="radio" name="chash" value="not at all competent"<?php echo ($row10[5]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="chash" value="little competent"<?php echo ($row10[5]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="chash" value="moderately competent"<?php echo ($row10[5]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="chash" value="extremely competent"<?php echo ($row10[5]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>Flex</td>
                                    <td><input type="radio" name="flex" value="not at all competent"<?php echo ($row10[6]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="flex" value="little competent"<?php echo ($row10[6]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="flex" value="moderately competent"<?php echo ($row10[6]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="flex" value="extremely competent"<?php echo ($row10[6]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>Java</td>
                                    <td><input type="radio" name="java" value="not at all competent"<?php echo ($row10[7]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="java" value="little competent"<?php echo ($row10[7]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="java" value="moderately competent"<?php echo ($row10[7]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="java" value="extremely competent"<?php echo ($row10[7]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>JavaScript</td>
                                    <td><input type="radio" name="javascript" value="not at all competent"<?php echo ($row10[8]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="javascript" value="little competent"<?php echo ($row10[8]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="javascript" value="moderately competent"<?php echo ($row10[8]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="javascript" value="extremely competent"<?php echo ($row10[8]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>LISP</td>
                                    <td><input type="radio" name="lisp" value="not at all competent"<?php echo ($row10[9]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="lisp" value="little competent"<?php echo ($row10[9]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="lisp" value="moderately competent"<?php echo ($row10[9]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="lisp" value="extremely competent"<?php echo ($row10[9]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>Matlab</td>
                                    <td><input type="radio" name="matlab" value="not at all competent"<?php echo ($row10[10]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="matlab" value="little competent"<?php echo ($row10[10]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="matlab" value="moderately competent"<?php echo ($row10[10]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="matlab" value="extremely competent"<?php echo ($row10[10]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>MySQL</td>
                                    <td><input type="radio" name="mysql" value="not at all competent"<?php echo ($row10[11]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="mysql" value="little competent"<?php echo ($row10[11]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="mysql" value="moderately competent"<?php echo ($row10[11]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="mysql" value="extremely competent"<?php echo ($row10[11]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>Objective-C</td>
                                    <td><input type="radio" name="objectivec" value="not at all competent"<?php echo ($row10[12]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="objectivec" value="little competent"<?php echo ($row10[12]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="objectivec" value="moderately competent"<?php echo ($row10[12]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="objectivec" value="extremely competent"<?php echo ($row10[12]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>Pascal</td>
                                    <td><input type="radio" name="pascal" value="not at all competent"<?php echo ($row10[13]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="pascal" value="little competent"<?php echo ($row10[13]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="pascal" value="moderately competent"<?php echo ($row10[13]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="pascal" value="extremely competent"<?php echo ($row10[13]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>Perl</td>
                                    <td><input type="radio" name="perl" value="not at all competent"<?php echo ($row10[14]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="perl" value="little competent"<?php echo ($row10[14]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="perl" value="moderately competent"<?php echo ($row10[14]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="perl" value="extremely competent"<?php echo ($row10[14]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>PHP</td>
                                    <td><input type="radio" name="php" value="not at all competent"<?php echo ($row10[15]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="php" value="little competent"<?php echo ($row10[15]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="php" value="moderately competent"<?php echo ($row10[15]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="php" value="extremely competent"<?php echo ($row10[15]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>Prolog</td>
                                    <td><input type="radio" name="prolog" value="not at all competent"<?php echo ($row10[16]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="prolog" value="little competent"<?php echo ($row10[16]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="prolog" value="moderately competent"<?php echo ($row10[16]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="prolog" value="extremely competent"<?php echo ($row10[16]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>Python</td>
                                    <td><input type="radio" name="python" value="not at all competent"<?php echo ($row10[17]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="python" value="little competent"<?php echo ($row10[17]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="python" value="moderately competent"<?php echo ($row10[17]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="python" value="extremely competent"<?php echo ($row10[17]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>R</td>
                                    <td><input type="radio" name="r" value="not at all competent"<?php echo ($row10[18]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="r" value="little competent"<?php echo ($row10[18]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="r" value="moderately competent"<?php echo ($row10[18]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="r" value="extremely competent"<?php echo ($row10[18]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>Ruby</td>
                                    <td><input type="radio" name="ruby" value="not at all competent"<?php echo ($row10[19]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="ruby" value="little competent"<?php echo ($row10[19]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="ruby" value="moderately competent"<?php echo ($row10[19]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="ruby" value="extremely competent"<?php echo ($row10[19]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>SQL-Oracle</td>
                                    <td><input type="radio" name="sqloracle" value="not at all competent"<?php echo ($row10[20]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="sqloracle" value="little competent"<?php echo ($row10[20]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="sqloracle" value="moderately competent"<?php echo ($row10[20]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="sqloracle" value="extremely competent"<?php echo ($row10[20]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>Tcl</td>
                                    <td><input type="radio" name="tcl" value="not at all competent"<?php echo ($row10[21]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="tcl" value="little competent"<?php echo ($row10[21]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="tcl" value="moderately competent"<?php echo ($row10[21]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="tcl" value="extremely competent"<?php echo ($row10[21]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>T-SQL</td>
                                    <td><input type="radio" name="tsql" value="not at all competent"<?php echo ($row10[22]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="tsql" value="little competent"<?php echo ($row10[22]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="tsql" value="moderately competent"<?php echo ($row10[22]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="tsql" value="extremely competent"<?php echo ($row10[22]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>VB.NET</td>
                                    <td><input type="radio" name="vb" value="not at all competent"<?php echo ($row10[23]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="vb" value="little competent"<?php echo ($row10[23]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="vb" value="moderately competent"<?php echo ($row10[23]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="vb" value="extremely competent"<?php echo ($row10[23]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td colspan="12">other</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="other_technical_skill_name" value="<?php echo $row10[24] ?>"></td>
                                    <td><input type="radio" name="other_technical_skill" value="not at all competent"<?php echo ($row10[25]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="other_technical_skill" value="little competent"<?php echo ($row10[25]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="other_technical_skill" value="moderately competent"<?php echo ($row10[25]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="other_technical_skill" value="extremely competent"<?php echo ($row10[25]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="cms" class="collapse">
                <?php
                $query11="select * from cms_skills where student_id='$student_id'";
                $result11=mysqli_query($conn,$query11);
                $row11=mysqli_fetch_array($result11);
                ?>
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
                                    <td><input type="radio" name="concrete5" value="not at all competent"<?php echo ($row11[2]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="concrete5" value="little competent"<?php echo ($row11[2]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="concrete5" value="moderately competent"<?php echo ($row11[2]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="concrete5" value="extremely competent"<?php echo ($row11[2]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>DotNetNuke</td>
                                    <td><input type="radio" name="dotnetnuke" value="not at all competent"<?php echo ($row11[3]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="dotnetnuke" value="little competent"<?php echo ($row11[3]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="dotnetnuke" value="moderately competent"<?php echo ($row11[3]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="dotnetnuke" value="extremely competent"<?php echo ($row11[3]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>Drupal</td>
                                    <td><input type="radio" name="drupal" value="not at all competent"<?php echo ($row11[4]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="drupal" value="little competent"<?php echo ($row11[4]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="drupal" value="moderately competent"<?php echo ($row11[4]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="drupal" value="extremely competent"<?php echo ($row11[4]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>Joomla</td>
                                    <td><input type="radio" name="joomla" value="not at all competent"<?php echo ($row11[5]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="joomla" value="little competent"<?php echo ($row11[5]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="joomla" value="moderately competent"<?php echo ($row11[5]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="joomla" value="extremely competent"<?php echo ($row11[5]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>Wordpress</td>
                                    <td><input type="radio" name="wordpress" value="not at all competent"<?php echo ($row11[6]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="wordpress" value="little competent"<?php echo ($row11[6]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="wordpress" value="moderately competent"<?php echo ($row11[6]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="wordpress" value="extremely competent"<?php echo ($row11[6]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td colspan="12">other</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="other_cms_skill_name" value="<?php echo $row11[7] ?>"></td>
                                    <td><input type="radio" name="other_cms_skill" value="not at all competent"<?php echo ($row11[8]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="other_cms_skill" value="little competent"<?php echo ($row11[8]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="other_cms_skill" value="moderately competent"<?php echo ($row11[8]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="other_cms_skill" value="extremely competent"<?php echo ($row11[8]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="operatingsystem" class="collapse">
                <?php
                $query12="select * from operating_systems_skills where student_id='$student_id'";
                $result12=mysqli_query($conn,$query12);
                $row12=mysqli_fetch_array($result12);
                ?>
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
                                    <td><input type="radio" name="android" value="not at all competent"<?php echo ($row12[2]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="android" value="little competent"<?php echo ($row12[2]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="android" value="moderately competent"<?php echo ($row12[2]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="android" value="extremely competent"<?php echo ($row12[2]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>Chrome OS</td>
                                    <td><input type="radio" name="chromeos" value="not at all competent"<?php echo ($row12[3]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="chromeos" value="little competent"<?php echo ($row12[3]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="chromeos" value="moderately competent"<?php echo ($row12[3]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="chromeos" value="extremely competent"<?php echo ($row12[3]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>iOS</td>
                                    <td><input type="radio" name="ios" value="not at all competent"<?php echo ($row12[4]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="ios" value="little competent"<?php echo ($row12[4]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="ios" value="moderately competent"<?php echo ($row12[4]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="ios" value="extremely competent"<?php echo ($row12[4]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>Linux</td>
                                    <td><input type="radio" name="linux" value="not at all competent"<?php echo ($row12[5]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="linux" value="little competent"<?php echo ($row12[5]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="linux" value="moderately competent"<?php echo ($row12[5]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="linux" value="extremely competent"<?php echo ($row12[5]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>MAC OS</td>
                                    <td><input type="radio" name="macos" value="not at all competent"<?php echo ($row12[6]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="macos" value="little competent"<?php echo ($row12[6]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="macos" value="moderately competent"<?php echo ($row12[6]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="macos" value="extremely competent"<?php echo ($row12[6]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>Unix</td>
                                    <td><input type="radio" name="unix" value="not at all competent"<?php echo ($row12[7]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="unix" value="little competent"<?php echo ($row12[7]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="unix" value="moderately competent"<?php echo ($row12[7]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="unix" value="extremely competent"<?php echo ($row12[7]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td>Windows</td>
                                    <td><input type="radio" name="windows" value="not at all competent"<?php echo ($row12[8]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="windows" value="little competent"<?php echo ($row12[8]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="windows" value="moderately competent"<?php echo ($row12[8]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="windows" value="extremely competent"<?php echo ($row12[8]=='extremely competent'?' checked=checked':''); ?>></td>
                                </tr>
                                <tr>
                                    <td colspan="12">other</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="other_os_skill_name" value="<?php echo $row12[9] ?>"></td>
                                    <td><input type="radio" name="other_os_skill" value="not at all competent"<?php echo ($row12[10]=='not at all competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="other_os_skill" value="little competent"<?php echo ($row12[10]=='little competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="other_os_skill" value="moderately competent"<?php echo ($row12[10]=='moderately competent'?' checked=checked':''); ?>></td>
                                    <td><input type="radio" name="other_os_skill" value="extremely competent"<?php echo ($row12[10]=='extremely competent'?' checked=checked':''); ?>></td>
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
























