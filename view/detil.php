<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Detil Profil Peserta</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<script src="../assets/js/jquery.slim.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">DIGITAL TALENT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Form <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Programming-Language
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">PHP</a>
            <a class="dropdown-item" href="#">SQL</a>
            <a class="dropdown-item" href="#">JavaScript</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">HTML</a>
            <a class="dropdown-item" href="#">CSS</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
	<div class="container">
		<h2 class="text-center">Detil Profil Peserta</h2>
		<table class="table">
			<?php 
			echo 
			'<tr>
				<td width="40%">Nama Lengkap</td>
				<td>'.$_GET["name"].'</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>'.($_GET["gender"] == "male" ? "Laki-laki" : "Perempuan").'</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>'.$_GET["address"].'</td>
			</tr>';
			?>
		</table>
	</div>
</body>
</html>