<!doctype>
<html>
<head>

</head>
<body>
<?php
include "header.php";
?>
<div style="background-image: url('images/company.jpg');padding: 40px;height:auto;background-size: 100%;background-repeat: no-repeat">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="well">
                    <div class="row">
                        <div class="form-group">
                            <div class="panel panel-primary">
                                <div class="panel-heading"><h2><center>Company information form</center></h2></div>
                            </div>
                        </div>
                    </div>
                    <form action="company_add_action.php" method="get">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Company name</label>
                                <input type="text"class="form-control"name="company_name"required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Address</label>
                                <input type="text"class="form-control"name="address"required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>City</label>
                                <input type="text"class="form-control"name="city" value="windsor"required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Postal code</label>
                                <input type="text"class="form-control"name="postal_code"required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Country</label>
                                <input type="text"class="form-control"name="country" value="canada"required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Contact person- First name</label>
                                <input type="text"class="form-control"name="cp_firstname"required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Contact person- Last name</label>
                                <input type="text"class="form-control"name="cp_lastname"required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Contact person- Position</label>
                                <input type="text"class="form-control"name="cp_position"required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Telephone</label>
                                <input type="number"class="form-control"name="telephone"required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Email</label>
                                <input type="email"class="form-control"name="email"required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Company website</label>
                                <input type="url"class="form-control"name="company_website"required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Notes</label>
                                <textarea class="form-control" rows="4" name="notes" placeholder="Write something about company.." required></textarea>
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





