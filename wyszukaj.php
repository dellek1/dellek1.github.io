<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Polskie skoki</title>
	<meta name="description" content="Polscy raperzy">
	<meta name="keywords" content="skoki">
	<meta name="author" content="Daniel Wierzbicki">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="main_wyszukaj.css">
	<link rel="stylesheet" href="login.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;subset=latin-ext" rel="stylesheet">
	
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	
	<link href="wyszukaj_tlo.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width" />
	
	<title> Wyszukiwanie </title>
	
    <script>
			function myFunction() {
			  var input, filter, table, tr, td, i;
			  input = document.getElementById("myInput");
			  filter = input.value.toUpperCase();
			  table = document.getElementById("myTable");
			  tr = table.getElementsByTagName("tr");
			  for (i = 0; i < tr.length; i++) {
				td = tr[i].getElementsByTagName("td")[0];
				if (td) {
				  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
					tr[i].style.display = "";
				  } else {
					tr[i].style.display = "none";
				  }
				}       
			  }
			}
	</script>

<h2>ZNAJDŹ	SWOJEGO SKOCZKA</h2>
<div class="col-lg-8 bg-white text-body wpis" style="position: absolute; top:50%; left:20%">
<input class="form-control" type="text" id="myInput" onkeyup="myFunction()" style="margin-top:7px; " placeholder="Szukaj skoczka ...">

<div class="tabbela" >
<div class="chrum" style="color:black">
        <table class="table" align="center" style="color:black" id="myTable">
            <tr class="header">
                <th onclick="sortTable(0)">
                   <h1>SKOCZEK</h1>
                </th>
                <th onclick="sortTable(0)">
                   <h1>NARODOWOŚĆ</h1>
                </th>
                <th onclick="sortTable(0)">
                   <h1>WIEK</h1>
                </th>

            </tr>
							
				
				<tr id="myTable">
                <td>
                   Adam Małysz
                </td>
                <td>
                   Polska
                </td>
                <td>
                   43
                </td>
				</tr>	
				
				
				
				<tr id="myTable">
                <td>
                   Kamil Stoch
                </td>
                <td>
                   Polska
                </td>
                <td>
                   33
                </td>
				</tr>	
				
				
				 
				<tr id="myTable">
                <td>
                  Piotr Żyła
                </td>
                <td>
                   Polska
                </td>
                <td>
                   34
                </td>
				</tr>	
					
				
				
				<tr id="myTable">
                <td>
                   Martin Schmitt
                </td>
                <td>
                   Niemcy
                </td>
                <td>
                   43
                </td>
				</tr>	
				
				
				
				<tr id="myTable">
                <td>
                   Dawid Kubacki
                </td>
                <td>
                   Polska
                </td>
                <td>
                   31
				</tr>	
					
				
				
				<tr id="myTable">
                <td>
                   Janne Ahonen
                </td>
                <td>
                   Finlandia
                </td>
                <td>
                   43
                </td>
				</tr>	
				
				
				
				<tr id="myTable">
                <td>
                   Robert Kranjec
                </td>
                <td>
                   Polska
                </td>
                <td>
                   39
                </td>
				</tr>	
					
				
				
				<tr id="myTable">
                <td>
                   Gregor Schlierenzauer
                </td>
                <td>
                   Austria
                </td>
                <td>
                   31
                </td>
				</tr>	
				
				
				
				<tr id="myTable">
                <td>
                   Maciej Kot
                </td>
                <td>
                   Polska
                </td>
                <td>
                   29
                </td>
				</tr>	
				
				
				
				<tr id="myTable">
                <td>
                   Stefan Kraft
                </td>
                <td>
                   Austria
                </td>
                <td>
                   27
                </td>
				</tr>	
					
				
				
				<tr id="myTable">
                <td>
                   Simon Ammann
                </td>
                <td>
                   Szwajcaria
                <td>
                  39
                </td>
				</tr>	
					
				
				
				<tr id="myTable">
                <td>
                   Noriaki Kasai
                </td>
                <td>
                   Japonia
                </td>
                <td>
                   48
                </td>
				</tr>	
				
									 
				</table>
			 </div>
		</div>

</div>

<body>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>