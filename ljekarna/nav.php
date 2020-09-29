<?php 
  session_start();
?>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Ljekarna</title>
		    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">

	</head>
<nav class="navbar navbar-default">
  <div class="container-fluid">

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Naslovna</a></li>



      </ul>
    
      <ul class="nav navbar-nav navbar-right">
        
          <?php
           
            if(isset($_SESSION["email"]))
            { 
                         if ($_SESSION["uloga"]=="admin")
              {
                echo('<li><a href="svenarudzbe.php">Sve narudzbe</a></li>');
                echo('<li><a href="lijekovi.php">Lijekovi</a></li>');
              }   
              echo('<li><a href="#" >Prijavljeni ste kao '.$_SESSION["email"].'</a></li>');
              echo('<li><a href="logout.php">Odjava</a></li>');


            }
            

            else{
              echo('<li><a href="registracija.php">Registracija</a></li>');
              echo('<li><a href="prijava.php">Prijava</a></li>');
              echo("<li><a href= >Prijavljeni ste kao gost</a></li>");
            }
            
          ?>
      </ul>
    </div>
  </div>
</nav>	