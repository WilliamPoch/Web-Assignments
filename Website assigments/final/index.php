<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Display Records</title>

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
if (isset($_REQUEST['code']) && ($_REQUEST['code']='delete')) {
$delete = "DELETE * FROM customer WHERE id='$_REQUEST[id]'";
mysqli_query($dbc,$delete) or die ( mysqli_error());

}
?>


<?php
if (!isset($_REQUEST['code'])) {
?>
<div class="container" style="width:90%; margin-top:20px;">

    <div class="row text-center"><h1>List of customers</h1></div>
	<a href="insert.php" ><span style="margin-bottom: 25px" class="glyphicon glyphicon-plus" aria-hidden="true"></span>Insert new customer</a>
	
	<table class="table table-striped">
	<tr>
		<th>No.</th>
		<th>Name</th>
		<th>Address</th>
		<th>Phone</th>
		<th>Delete</th>
		
	</tr>
<?php
    //read data
    $r = mysqli_query($dbc, "SELECT * FROM customer ORDER BY name ") or die ('Error: '.mysqli_error ());
    $counter=1;
    while ($row=mysqli_fetch_array($r)) {
		
?>

	<tr>
		<td><?php echo $counter; ?></td>
		<td><a href="update.php?id=<?php echo $row['id']?>"><?php echo $row['name']; ?></a></td>
		<td><?php echo $row['address']; ?></td>
		<td><?php echo $row['phone']; ?></td>
		<td><a href="index.php?code=delete&id=<?php echo $row['id']?>"><span class="glyphicon glyphicon-trash"></span></a></td>
	</tr>
<?php
	$counter+=1;
	}
	?>
	</table>
<?php
	$ro = mysqli_query($dbc, "SELECT COUNT(id) FROM customer AS my_count") or die ('Error: '.mysqli_error ());
    $rows=mysqli_fetch_array($ro)
?>
	<div class="container text-center">
	<h1><?php echo $rows['my_count']; ?></h1>
	</div>
</div>  <!-- /container -->


<?php
	}

?>   


   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js" integrity="sha384-vhJnz1OVIdLktyixHY4Uk3OHEwdQqPppqYR8+5mjsauETgLOcEynD9oPHhhz18Nw" crossorigin="anonymous"></script>
  </body>
</html>