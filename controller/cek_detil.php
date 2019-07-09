<?php 
	$name			=	$_POST['name'];
	$gender		=	$_POST['gender'];
	$address 	=	$_POST['address'];

	header("Location:../view/detil.php?name=".$name."&gender=".$gender."&address=".$address);
?>