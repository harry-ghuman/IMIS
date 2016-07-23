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

$status=$_REQUEST['status'];
 if($status=='international student')
 {
     ?>
             <br>
             <label>Country</label>
             <input type="text"class="form-control"name="country">
          <?php
 }

?>

</body>
</html>
