<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8">
        <!--Google Yazı Font-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300;1,500&display=swap" rel="stylesheet">
        <!--Sosyal Medya-->
        <script src="https://kit.fontawesome.com/afa4fc3610.js" crossorigin="anonymous"></script>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <!-- Responsive -->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
         <!-- Css -->
	    <link rel="stylesheet" href="style.css">
        
        <title>Web Teknoloji Projesi</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-md fixed-top bg-success navbar-white navbar-dark">
            <div class="container">
                <a href="anasayfa.html" class="navbar-brand text white">
                    Melih
                </a>
                <!--3'lü İkon-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="mainNavbar" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto ">
                        <li class="nav-item">
                            <a href="anasayfa.html"class="nav-link active  text-white">
                            Anasayfa
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="cv.html"class="nav-link active  text-white">
                                Özgeçmiş
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="bursa.html"class="nav-link active  text-white">
                                Bursa
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="bursaspor.html"class="nav-link active  text-white">
                                Bursaspor
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="hobi.html"class="nav-link active  text-white">
                                İlgi Alanlarım
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="iletisim.html"class="nav-link active  text-white">
                                İletişim
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php"class="nav-link active  text-white">
                                Çıkış
                            </a>
                        </li>

                    </ul> 
                </div>
                
            </div>
        </nav>
        <main>
        <div class="container">
            <br><br><br><br><br>
			<?php 
				include("kullanici.php");


				if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
				{
                   
			       $_SESSION["login"] = TRUE;
			       $_SESSION["user"] = $user;
			       $_SESSION["pass"] = $pass;
			
			       echo("Hoşgeldin Melih");
			
				}
			
				else 
				{
			            echo "Kullancı Adı veya Şifre Yanlış.<br>";
			            echo "<script>setTimeout(function(){location.replace(\"index.php\")},3000);</script>";
			    }
			
			?>
			
		</div>
        </main>
        <footer class="py-3 bg-success text-white text-center">
            <div id="social">
                <a href="https://github.com/Melih-Solakoglu/WebTeknolojileriProje" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://www.instagram.com/solakoglumelih/" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://twitter.com/melih_solakoglu" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
            <p>Copyright © 2021 by Melih SOLAKOĞLU</p>
        </footer>
        <!-- Bootstrap için gerekli-->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>