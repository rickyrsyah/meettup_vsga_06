<?php 
	$server		=	"localhost";
	$user			=	"root";
	$pwd			=	"";
	$name_db	=	"latihan";

	$db = mysqli_connect($server, $user, $pwd, $name_db);

	if ($db) {
		echo "Connected";
	} else {
		mysqli_connect_error();
	}
 ?>