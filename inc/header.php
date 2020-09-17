<?php

/*
There are three types of users:
1 - Customer
2 - Agent
3 - Manager

This can be changed by the get parameter "role" with the corresponding integer value, and stored inside $_SESSION["role"]. If none is specified, it will be set as Customer.
*/

session_start();

if (isset($_GET["role"])){
	$_SESSION["role"] = $_GET["role"];
} else if (!isset($_SESSION["role"])){
	$_SESSIOM["role"] = 1;
};

function get_role(){
	switch($_SESSION["role"]){
		case 2: return "Agent";
		case 3: return "Manager";
		default: $_SESSIOM["role"] = 1; return "Customer";
	}
}

extract($_SESSION);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>

		<?php
		if(isset($title)){
			echo $title;
		} else {
			echo "Untitled";
		}
		?>
	</title>
	<!-- MDB icon -->
	<!-- <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon"> -->
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<!-- Google Fonts Roboto -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" href="css/mdb.min.css">
	<!-- Your custom styles (optional) -->
	<link rel="stylesheet" href="css/style.css">

	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="js/mdb.min.js"></script>
	<!-- Fontawesome -->

</head>
<body>


	<script type="text/javascript">
	$(document).ready(function(){
		// $('body').hide();
		// $('body').fadeIn(300);
	});
	</script>
