<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Pomyślnie dodano skoczka</title>
	<meta name="description" content="Skoczkowie narciarscy">
	<meta name="keywords" content="skoki">
	<meta name="author" content="Daniel Wierzbicki">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	
</head>
</br>
		<nav class="navbar navbar-dark bg-jumpers navbar-expand-lg"> <!-- start <nav> -->
		
			<a class="navbar-brand"href="index_start.php"><img src="img/logo.png" width="60" height="50" class="d-inline-block mr-1 align-bottom" alt=""> </a><b> </b>				
			<div class="collapse navbar-collapse" id="menu" aria-controls="menu" aria-expanded="false" aria-label="Przełącznik nawigacji">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown">
						
					</li>
					</li>
				
						
						
						<div class="dropdown-menu" aria-labelledby="submenu">
							<a class="dropdown-item" href="#"> Terminarz zawodów </a>
							<a class="dropdown-item" href="#"> Ranking Pucharu Świata </a>
							
							<div class="dropdown-devider"></div>
							
							<a class="dropdown-item" href="#"> Sylwetki zawodników </a>
							<a class="dropdown-item" href="#"> Skocznie narciarskie </a>
						</div>
					<li class="nav-item dropdown">
					
					</li>
					<li class="nav-item dropdown">
						
					</li>
					<li class="nav-item dropdown">
						
					</li>
					<li class="nav-item active">
						
					</li>
				</ul>
				<form class="form-inline">
					<a style="color: black" class="btn btn-light ml-2" class="nav-link" href="index.php"> Powrót </a>
				</form>
			</div>	
		</nav> 	<!-- koniec </nav> -->
<div class="wynik">
					<?php
					if(isset($_POST['imie'])){
					$imie=$_POST['imie'];
					echo '<strong>Imię : '.$imie.'</strong>'.'</br>';
					}
					if(isset($_POST['nazwisko'])){
					$nazwisko=$_POST['nazwisko'];
					echo '<strong>Nazwisko : '.$nazwisko.'</strong>'.'</br>';
					}
					if(isset($_POST['narodowosc'])){
					$pseudonim=$_POST['narodowosc'];
					echo '<strong>Narodowość : '.$pseudonim.'</strong>'.'</br>';
					}
					if(isset($_POST['opis'])){
					$opis=$_POST['opis'];
					echo '<strong>Opis : '.$opis.'</strong>'.'</br>';
					}
					if(isset($_POST['zdjecie'])){
					$zdjecie=$_POST['zdjecie'];
					echo '<strong>Zdjęcie : '.$zdjecie.'</strong>';
					}
					?>
</div>					