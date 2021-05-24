<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stil.css">
    <title>Web Teknoloji Projesi</title>

  </head>
  <body>
    <nav class="navbar navbar-custom navbar-expand-md fixed-top  ">

		<div class="container">
		
			<a href="index.html" class="navbar-brand">
	  		  <i class="fas fa-paw"></i>
	  		   Şehrim ve Ben
	      	</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"><i class="fas fa-ellipsis-h"></i></i></span>
			</button>

			<div id="navbarCollapse" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto ">

					<li class="nav-item">
						<a href="index.html" class="nav-link active">
	      				Anasayfa
	      				</a></li>
						  <li class="nav-item">
                            <a href="hakkımda.html" class="nav-link active">
                              Hakkımda
                              </a></li>

					<li class="nav-item">
						<a href="ozgecmis.html" class="nav-link active">
	      				Özgeçmiş
	      				</a></li>

						  <li class="nav-item dropdown">
							<div class="dropdown">
							  <a href="#" class="nav-link">Şehrim</a>
							  <div class="dropdown-content">
								<a href="kütahyahakkında.html">Kütahya Hakkında</a>
								<a href="mirasımız.html">Mirasımız</a>
								<a href="takımımız.html">Takımımız</a>
							  </div>
							</div>
						  </li>

	      			<li class="nav-item">
						<a href="iletisim.html" class="nav-link active">
	      				İletişim
	      				</a></li>

	      			<li class="nav-item">
						<a href="login.html" class="nav-link active">
	      				Giriş
	      				</a></li>				
				</ul>
			</div>

		</div>
	</nav>
	

	<header>

		<div class=" jumbotron">

			<div class="container">

				<div class="col-md-6 px-0">
					<h1 class="display-4 font-italic">
						Hoş Geldin!
					</h1>
				</div>

			</div>

		</div>

	</header>
    <main>

		<div class="container">
			
			<?php 

				include("kullanici.php");


				if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
				{
			       $_SESSION["login"] = "true";
			       $_SESSION["user"] = $user;
			       $_SESSION["pass"] = $pass;
                    echo($user);
			       echo ("  SİTEYE GİRİŞ YAPTINIZ HOŞGELDİN !!");
			
				}
			
				else 
				{
			            echo "Kullancı Adı veya Şifre Yanlış.<br>";
			            echo "!!!TEKRAR DENEYİN!!!";
			            header("Refresh: 1; url=login.php");
			    }
			
			?>
			
		</div>

	</main>

    <footer class="footer py-5 text-center">
	Web-Teknolojileri-Projesi © İlknur KAYA 2021
	   </footer>


	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  </body>
</html>