<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Polskie skoki</title>
	<meta name="description" content="Skoki narciarskie">
	<meta name="keywords" content="skoki">
	<meta name="author" content="Daniel Wierzbicki">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="login.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;subset=latin-ext" rel="stylesheet">
	
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->

    <link href="Login.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width" />
    <script type="text/javascript">
        function validation() {
            var user = document.getElementById("nick");
            var pass = document.getElementById("password");

            if (user.value == "admin") {
                if (pass.value == "admin") {
                    window.location.href = "Dodawanie.php";
                } else {
                    alert("Zle haslo!")
                }
            } else {
                alert("Zla nazwa uzytkownika!")
            }
        }

        function logowanie() {
            window.location.href = "index.php";
        }
    </script>
	
    <title> Logowanie </title>
</head>

<body>
	<header>
		<nav class="navbar navbar-dark bg-jumpers navbar-expand-lg"> <!-- start <nav> -->
		
			<a class="navbar-brand"href="index_start.html"><img src="img/logo.png" width="60" height="50" class="d-inline-block mr-1 align-bottom" alt=""> </a><b> SKOKI.PL</b>				
			<div class="collapse navbar-collapse" id="menu" aria-controls="menu" aria-expanded="false" aria-label="Przełącznik nawigacji">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown">
						<a class="nav-link" href="#"> Start </a>
					</li>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-extended="false" id="submenu" aria-haspopup="true"> Zawody </a>
						
						<div class="dropdown-menu" aria-labelledby="submenu">
							<a class="dropdown-item" href="#"> Terminarz zawodów </a>
							<a class="dropdown-item" href="#"> Ranking Pucharu Świata </a>
							
							<div class="dropdown-devider"></div>
							
							<a class="dropdown-item" href="#"> Sylwetki zawodników </a>
							<a class="dropdown-item" href="#"> Skocznie narciarskie </a>
						</div>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#"> Historia </a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" class="btn btn-light" href="index.html"> Zdjęcia </a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#"> Wywiady </a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="Kontakt.php"> Kontakt </a>
					</li>
				</ul>
				<form class="form-inline">
					<a style="color: black" class="btn btn-light ml-2" class="nav-link" href="wyszukaj.php"> Wyszukaj </a>
				</form>
			</div>	
		</nav> 	<!-- koniec </nav> -->
	</header> 

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
<body>
    <form id="myForm" method="get" action="">
        <div class="login-wrap">
            <div class="login-html">
			
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                <label for="tab-1" class="tab">Zaloguj</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up">
                <label for="tab-2" class="tab"></label>

                <div class="login-form">
                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="user" class="label">Nazwa użytkownika</label>
                            <input id="nick" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Hasło</label>
                            <input id="password" type="password" class="input">
                        </div>
                        <div class="group">
                            <input id="check" type="checkbox" class="check" checked>
                        </div>
                        <div class="group">
                            <input type="button" class="button" id="demo" onclick="validation()" value="Zaloguj">
                            <br />
                            <br />
                            <input type="button" class="button" style="background: #9f2a00;" id="demo" onclick="logowanie()" value="Anuluj">
                        </div>
                        <div class="hr"></div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>