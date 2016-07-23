<!doctype>
<html>
<head>
</head>
<body>
<?php
include "header.php";
?>
<div style="background-image: url('images/project.jpeg');padding: 40px;height:auto;background-size: 100%;background-repeat: no-repeat">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="well">
                    <div class="row">
                        <div class="panel panel-primary">
                            <div class="panel-heading"><h2>Project information form</h2></div>
                        </div>
                    </div>
                    <form action="project_add_action.php" method="get">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Project name</label>
                                <input type="text"class="form-control"name="project_name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Project type</label>
                                <select class="form-control" name="project_type" required>
                                    <option>research project</option>
                                    <option>mac project</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Project description</label>
                                <textarea class="form-control" rows="4" name="project_description" placeholder="Write something about the project.."required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>





