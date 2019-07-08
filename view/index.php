<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Latihan Mekanisme Web</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<script src="../assets/js/jquery.slim.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light"><h3>DIGITAL TALENT | Form using Bootstrap</h3></nav>
	<div class="container">
		<form>
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" class="form-control" id="name" placeholder="Your Name">
			</div>
			<div class="form-group">
				<label for="address">Address:</label>
				<textarea name="address" class="form-control" id="address" cols="10" rows="4" placeholder="Your Address"></textarea>
			</div>
			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="agree">
				<label for="agree" class="form-check-label">I Agree EULA</label>
			</div>
			<button type="submit" class="btn-sm btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>