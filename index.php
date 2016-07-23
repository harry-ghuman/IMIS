<!DOCTYPE html>
<html lang="en">
<head>
    <title>IMIS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        .modal-header, h4, .close {
            background-color: #4682B4;
            color:white !important;
            text-align: center;
            font-size: 30px;
        }
        .modal-footer {
            background-color: #f9f9f9;
        }
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 100%;
            margin: auto;
            height: 571px;
        }
        p.lucida{
            font-family:Lucida Console;
            font-size: x-large;
            font-weight: bold;

        }

    </style>
    <script>
        $(document).ready(function(){
            $("#myBtn").click(function(){
                $("#myModal").modal();
            });
        });
        $(document).ready(function(){
            $("#myBtn2").click(function(){
                $("#myModal2").modal();
            });
        });
    </script>
</head>
<body>
    <nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <p class="lucida">Internship Management Information System</p>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" id="myBtn2"><span class="glyphicon glyphicon-user"></span> Student login</a></li>
                <li><a href="#" id="myBtn"><span class="glyphicon glyphicon-user"></span> Admin login</a></li>
            </ul>
        </div>
    </div>
</nav>

    <?php
    if(isset($_REQUEST['q'])) {
        ?>
        <div style="text-align:right">
            <label>
                <?php
                if (isset($_REQUEST['q']) && $_REQUEST['q'] == 1) {
                    echo "<span style='color:red;'>Incorrect Email Id or Password</span>";
                }
                if (isset($_REQUEST['q']) && $_REQUEST['q'] == 2) {
                    echo "<span style='color:red;'>Incorrect Username or Password</span>";
                }
                ?>
            </label>
        </div>
        <?php
    }
    ?>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="images/5.jpg">
        </div>
        <div class="item">
            <img src="images/6.jpg">
        </div>
        <div class="item">
            <img src="images/3.jpg">
        </div>
        <div class="item">
            <img src="images/4.jpg">
        </div>
        <div class="item">
            <img src="images/1.jpg">
        </div>
        <div class="item">
            <img src="images/2.jpg">
        </div>
    </div>
</div>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-lock"></span>Admin login</h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form action="admin_validate.php" method="get">
                        <div class="form-group">
                            <label><span class="glyphicon glyphicon-user"></span> Username</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                            <input type="password" class="form-control" id="psw" name="password" placeholder="Enter password" required>
                        </div>
                        <br>
                        <button type="submit"class="btn btn-block btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="padding:35px 50px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-lock"></span>Student login</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
                <form action="a_student_validate.php" method="get">
                    <div class="form-group">
                        <label><span class="glyphicon glyphicon-user"></span> Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter username" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                        <input type="password" class="form-control" id="psw" name="password" placeholder="Enter password" required>
                    </div>
                    <br>
                    <button type="submit"class="btn btn-block btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>


</body>
</html>
