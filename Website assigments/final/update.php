<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Update Record</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" integrity="sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<?php
include('DBconnect.php');
session_start();
?>  
<?php
if(isset($_REQUEST['code']) && $_REQUEST['code']=='update') {
$update1 = mysqli_query($dbc, "UPDATE customer WHERE id='$_REQUEST[id]' SET name = '$_REQUEST[name]'") or die ( mysqli_error());
$update2= mysqli_query($dbc, "UPDATE customer WHERE id='$_REQUEST[id]' SET address = '$_REQUEST[address]'") or die ( mysqli_error());
$update3 = mysqli_query($dbc, "UPDATE customer WHERE id='$_REQUEST[id]' SET phone = '$_REQUEST[phone]'") or die ( mysqli_error());

}

?>

<?php
if(isset($_REQUEST['code']) && $_REQUEST['code']=='new') {
	
$name = mysqli_real_escape_string($dbc, $_REQUEST['name']);

$r = mysqli_query($dbc, "SELECT * FROM customer 
WHERE name='$name'") or die ('Error: '.mysqli_error ());


if (mysqli_num_rows($r)) { 
    echo "<meta http-equiv='refresh' content='0;url=error.php'>"; 
    exit();
}
}
$r = mysqli_query($dbc, "SELECT * FROM customer 
WHERE id='$_REQUEST[id]'") or die ('Error: '.mysqli_error ());

while ($row=mysqli_fetch_array($r)) {


?>
<?php
if (!isset($_REQUEST['code']) || $_REQUEST['code']='') {
	
?>
<div class="container" style="width:90%; margin-top:20px;">

  <div class="text-center">
    <h1>Update customer</h1>
    <p>Please complete the form and click Update button.</p>
  </div>
  
<div class="container-fluid" style="width:50%">
	<form action="update.php" method="post">
	<input type="hidden" name="code" value="new">
	<div class="form-group text-right">
	<label for "Name" class="col-sm-3">Customer Name </label>
	<div class="col-sm-7" style="margin-bottom: 15px">
	<input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']?>" required autofocus>
	</div>
	</div>
	<div class="form-group text-right">
	<label for "Name" class="col-sm-3">Address </label>
	<div class="col-sm-7" style="margin-bottom: 15px">
	<input type="text" class="form-control" id="address" name="address" value="<?php echo $row['address']?>"" required>
	</div>
	</div>
	<div class="form-group text-right">
	<label for "Name" class="col-sm-3">Phone </label>
	<div class="col-sm-7" style="margin-bottom: 15px">
	<input type="number_format" class="form-control" id="pone" name="phone" value="<?php echo $row['phone']?>" required>
	</div>
	</div>
	</div>
	<div class="text-center">
	<a href="index.php"class="btn btn-light">Cancel</a> 	
	<button class="btn btn-info" type="submit">Update</button>
	
	</div>
	<?php

}
}
?>
	</form>
	
  </div>
</div>  <!-- /container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js" integrity="sha384-vhJnz1OVIdLktyixHY4Uk3OHEwdQqPppqYR8+5mjsauETgLOcEynD9oPHhhz18Nw" crossorigin="anonymous"></script>
  </body>
</html>