<!doctype>
<html>
<head>
</head>
<body>
<?php
include "header.php";
include "connection.php";
$student_id=$_REQUEST['student_id'];

$query9="select * from personal where student_id='$student_id'";
$result9=mysqli_query($conn,$query9);
$row9=mysqli_fetch_array($result9);

if(strlen($row9[0])==0)
{
    header("location:student_view_info.php?q=3");
}
else {

    $query1 = "select * from personal where student_id='$student_id'";
    $result1 = mysqli_query($conn, $query1);

    $query2 = "select * from undergraduate_students where student_id='$student_id'";
    $result2 = mysqli_query($conn, $query2);

    $query3 = "select * from graduate_students where student_id='$student_id'";
    $result3 = mysqli_query($conn, $query3);

    $query4 = "select * from work_experience where student_id='$student_id'";
    $result4 = mysqli_query($conn, $query4);

    $query5 = "select * from other_degrees where student_id='$student_id'";
    $result5 = mysqli_query($conn, $query5);
    ?>
    <div style="background-image: url('images/student2.jpg');padding: 40px;height:auto;background-size: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <div class="well">
                        <div class="row">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <center><h2>Student Information</h2></center>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <span class="badge">1</span>&nbsp;<label><h3><strong>Personal Information</strong></h3>
                            </label>
                        </div>
                        <?php
                        while ($row1 = mysqli_fetch_array($result1)) {
                            ?>
                            <table class="table table-condensed">
                                <thead></thead>
                                <tbody>
                                <tr>
                                    <td>Student ID</td>
                                    <td></td>
                                    <td><?php echo $row1[2] ?></td>
                                </tr>
                                <tr>
                                    <td>Semester</td>
                                    <td></td>
                                    <td><?php echo $row1[0] ?></td>
                                </tr>
                                <tr>
                                    <td>Year</td>
                                    <td></td>
                                    <td><?php echo $row1[1] ?></td>
                                </tr>
                                <tr>
                                    <td>First name</td>
                                    <td></td>
                                    <td><?php echo $row1[3] ?></td>
                                </tr>
                                <tr>
                                    <td>Middle name</td>
                                    <td></td>
                                    <td><?php echo $row1[4] ?></td>
                                </tr>
                                <tr>
                                    <td>Last name</td>
                                    <td></td>
                                    <td><?php echo $row1[5] ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td></td>
                                    <td><?php echo $row1[6] ?></td>
                                </tr>
                                <tr>
                                    <td>Telephone</td>
                                    <td></td>
                                    <td><?php echo $row1[7] ?></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td></td>
                                    <td><?php echo $row1[8] ?></td>
                                </tr>
                                <?php
                                if($row1[8]=='international student') {
                                    ?>
                                    <tr>
                                        <td>Country</td>
                                        <td></td>
                                        <td><?php echo $row1[10] ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                <tr>
                                    <td>Gender</td>
                                    <td></td>
                                    <td><?php echo $row1[9] ?></td>
                                </tr>
                                </tbody>
                            </table>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <div class="well">
                        <div class="row">
                            <span class="badge">2</span>&nbsp;<label><h3><strong>Education and training</strong></h3>
                            </label>
                        </div>
                        <br>
                        <div class="row">
                            <table class="table table-condensed">
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
                                    while ($row2 = mysqli_fetch_array($result2)) {
                                        ?>
                                        <td>Undergraduate degree</td>
                                        <td><?php echo $row2[2] ?></td>
                                        <td><?php echo $row2[3] ?></td>
                                        <td><?php echo $row2[4] ?></td>
                                        <td><?php echo $row2[5] ?></td>
                                        <td><?php echo $row2[6] ?></td>
                                        <?php
                                    }
                                    ?>
                                </tr>
                                <tr>
                                    <?php
                                    while ($row3 = mysqli_fetch_array($result3)) {
                                        ?>
                                        <td>Graduate degree</td>
                                        <td><?php echo $row3[2] ?></td>
                                        <td><?php echo $row3[3] ?></td>
                                        <td><?php echo $row3[4] ?></td>
                                        <td><?php echo $row3[5] ?></td>
                                        <td><?php echo $row3[6] ?></td>
                                        <?php
                                    }
                                    ?>
                                </tr>
                                <?php
                                while ($row5 = mysqli_fetch_array($result5)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row5[2] ?></td>
                                        <td><?php echo $row5[3] ?></td>
                                        <td><?php echo $row5[4] ?></td>
                                        <td><?php echo $row5[5] ?></td>
                                        <td><?php echo $row5[6] ?></td>
                                        <td><?php echo $row5[7] ?></td>
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
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <div class="well">
                        <div class="row">
                            <span class="badge">3</span>&nbsp;<label><h3><strong>Work experience</strong></h3></label>
                        </div>
                        <br>
                        <div class="row">
                            <?php
                            $query10= "select * from work_experience where student_id='$student_id'";
                            $result10 = mysqli_query($conn, $query10);
                            $row10 = mysqli_fetch_array($result10);
                            if(strlen($row10[0])==0)
                                echo "no work experience";
                            else {
                                ?>
                                <table class="table table-condensed">
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
                                    while ($row4 = mysqli_fetch_array($result4)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row4[2] ?></td>
                                            <td><?php echo $row4[3] ?></td>
                                            <td><?php echo $row4[4] ?></td>
                                            <td><?php echo $row4[5] ?></td>
                                            <td><?php echo $row4[6] ?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <div class="well">
                        <div class="row">
                            <span class="badge">4</span>&nbsp;<label><h3><strong>Skills</strong></h3></label>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <button type="button" class="btn" data-toggle="collapse"
                                        data-target="#technical_skills">Technical skills
                                </button>
                                <div id="technical_skills" class="collapse">
                                    <br>
                                    <?php
                                    $query6 = "select * from technical_skills where student_id='$student_id'";
                                    $result6 = mysqli_query($conn, $query6);
                                    $row6 = mysqli_fetch_array($result6);
                                    ?>
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Skill</th>
                                            <th>Competency</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>ASP.NET</td>
                                            <td><?php echo $row6[2] ?></td>
                                        </tr>
                                        <tr>
                                            <td>C</td>
                                            <td><?php echo $row6[3] ?></td>
                                        </tr>
                                        <tr>
                                            <td>C++</td>
                                            <td><?php echo $row6[4] ?></td>
                                        </tr>
                                        <tr>
                                            <td>C#</td>
                                            <td><?php echo $row6[5] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Flex</td>
                                            <td><?php echo $row6[6] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Java</td>
                                            <td><?php echo $row6[7] ?></td>
                                        </tr>
                                        <tr>
                                            <td>JavaScript</td>
                                            <td><?php echo $row6[8] ?></td>
                                        </tr>
                                        <tr>
                                            <td>LISP</td>
                                            <td><?php echo $row6[9] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Matlab</td>
                                            <td><?php echo $row6[10] ?></td>
                                        </tr>
                                        <tr>
                                            <td>MySQL</td>
                                            <td><?php echo $row6[11] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Objective-C</td>
                                            <td><?php echo $row6[12] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Pascal</td>
                                            <td><?php echo $row6[13] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Perl</td>
                                            <td><?php echo $row6[14] ?></td>
                                        </tr>
                                        <tr>
                                            <td>PHP</td>
                                            <td><?php echo $row6[15] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Prolog</td>
                                            <td><?php echo $row6[16] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Python</td>
                                            <td><?php echo $row6[17] ?></td>
                                        </tr>
                                        <tr>
                                            <td>R</td>
                                            <td><?php echo $row6[18] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Ruby</td>
                                            <td><?php echo $row6[19] ?></td>
                                        </tr>
                                        <tr>
                                            <td>SQL-Oracle</td>
                                            <td><?php echo $row6[20] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tcl</td>
                                            <td><?php echo $row6[21] ?></td>
                                        </tr>
                                        <tr>
                                            <td>T-SQL</td>
                                            <td><?php echo $row6[22] ?></td>
                                        </tr>
                                        <tr>
                                            <td>VB.NET</td>
                                            <td><?php echo $row6[23] ?></td>
                                        </tr>
                                        <?php
                                        if (strlen($row6[24]) != 0) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row6[24] ?></td>
                                                <td><?php echo $row6[25] ?></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn" data-toggle="collapse" data-target="#cms_skills">CMS
                                    skills
                                </button>
                                <div id="cms_skills" class="collapse">
                                    <br>
                                    <?php
                                    $query7 = "select * from cms_skills where student_id='$student_id'";
                                    $result7 = mysqli_query($conn, $query7);
                                    $row7 = mysqli_fetch_array($result7);
                                    ?>
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Skill</th>
                                            <th>Competency</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Concrete5</td>
                                            <td><?php echo $row7[2] ?></td>
                                        </tr>
                                        <tr>
                                            <td>DotNetNuke</td>
                                            <td><?php echo $row7[3] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Drupal</td>
                                            <td><?php echo $row7[4] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Joomla</td>
                                            <td><?php echo $row7[5] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Wordpress</td>
                                            <td><?php echo $row7[6] ?></td>
                                        </tr>
                                        <?php
                                        if (strlen($row7[7]) != 0) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row7[7] ?></td>
                                                <td><?php echo $row7[8] ?></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn" data-toggle="collapse" data-target="#os_skills">
                                    Operating System skills
                                </button>
                                <div id="os_skills" class="collapse">
                                    <br>
                                    <?php
                                    $query8 = "select * from operating_systems_skills where student_id='$student_id'";
                                    $result8 = mysqli_query($conn, $query8);
                                    $row8 = mysqli_fetch_array($result8);
                                    ?>
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Skill</th>
                                            <th>Competency</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Android</td>
                                            <td><?php echo $row8[2] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Chrome OS</td>
                                            <td><?php echo $row8[3] ?></td>
                                        </tr>
                                        <tr>
                                            <td>iOS</td>
                                            <td><?php echo $row8[4] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Linux</td>
                                            <td><?php echo $row8[5] ?></td>
                                        </tr>
                                        <tr>
                                            <td>MAC OS</td>
                                            <td><?php echo $row8[6] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Unix</td>
                                            <td><?php echo $row8[7] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Windows</td>
                                            <td><?php echo $row8[8] ?></td>
                                        </tr>
                                        <?php
                                        if (strlen($row8[9]) != 0) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row8[9] ?></td>
                                                <td><?php echo $row8[10] ?></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <button onclick="location.href='student_edit_form.php?student_id=<?php echo $student_id ?>'"
                                    class="btn btn-primary btn-md">Edit form
                            </button>
                            <button
                                onclick="location.href='student_delete_form.php?student_id=<?php echo $student_id ?>'"
                                class="btn btn-primary btn-md">Delete form
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php
}
?>
</body>
</html>



