<?php 
	$name = $_POST['name'];
	if (isset($name) && empty($name))
	 	header("location:../view/form.php?name=kosong");
	else
		echo "Halo, ".$name;
	$gender = $_POST['gender'];
	if (isset($gender) && $gender != "male")
	 	header("location:../view/form.php?gender=female");
?>