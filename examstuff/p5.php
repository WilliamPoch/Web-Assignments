<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Problem 5</title>

    <!-- Latest compiled and minified CSS --> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" integrity="sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+" crossorigin="anonymous"> 
    <!-- Optional theme --> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap-theme.min.css" integrity="sha384-jzngWsPS6op3fgRCDTESqrEJwRKck+CILhJVO5VvaAZCq8JYf8HsR/HPpBOOPZfR" crossorigin="anonymous"> 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js" integrity="sha384-vhJnz1OVIdLktyixHY4Uk3OHEwdQqPppqYR8+5mjsauETgLOcEynD9oPHhhz18Nw" crossorigin="anonymous"></script>

  </head>
  <body>

<!-- insert your codes here -->
<div class="container text-center">
<p style="font-size: 36px"> Registration Form </p>
<p style="font-size: 12px"> Please complete the form and click register button </p>
</div>

<div class="container text-left">
<div class="row">
<div class="col-sm-10">
<form action="p6.php" method="post">
<div class="form-group">
<label for="organization" class="col-sm-2" style="margin-top: 8px">Name</label>
	<div class="col-sm-5">
	<input type="text" class="form-control" id="First Name" name="FName" placeholder="First name"required autofocus>
	</div>
	<div class="col-sm-5">
	<input type="text" class="form-control" id="Last Name" name="LName" placeholder="Last name"required>
	</div>
	</div>
<label for="organization" class="col-sm-2" style="margin-top: 15px">Address</label>
	<div class="col-sm-10" style="margin-top:10px">
	<input type="text" class="form-control" id="Address" name="Address" placeholder="Address"required>
	</div>
	<div class="col-sm-4 col-sm-offset-2"style="margin-top:10px">
	<input type="text" class="form-control" id="City" name="City" placeholder="City"required>
	</div>
	<div class="col-sm-4" style="margin-top:10px">
	<input type="text" class="form-control" id="State" name="State" placeholder="State"required>
	</div>
	<div class="col-sm-2 " style="margin-top:10px">
	<input type="number_format" class="form-control" id="Zip Code" name="ZCode" placeholder="Zip Code"required>
	</div>
	</div>
<div class="col-sm-5 col-sm-offset-3 text-center">	
	<button value="Refresh Page" onClick="history.go(0)" class="btn" style="margin-top: 10px" type="button">
	Cancel
	</button>
	<button class="btn btn-info" style="margin-top: 10px" type="submit" >
	Register
	</button>
</div>
</div>
</div>

</form>
  </body>
</html>