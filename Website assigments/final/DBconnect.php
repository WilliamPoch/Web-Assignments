<?php

$dbc = mysqli_connect("localhost", "root", "", "final") 
OR die('Could not connect to MySQL: '. mysqli_connect_error());

mysqli_set_charset($dbc, 'utf8');

?>