<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Pomyślnie dodano rapera</title>
	<meta name="description" content="Polscy raperzy">
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
					if(isset($_POST['pseudonim'])){
					$pseudonim=$_POST['pseudonim'];
					echo '<strong>Pseudonim : '.$pseudonim.'</strong>'.'</br>';
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