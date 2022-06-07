<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awsome link for icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <div class="banner">
        <video autoplay muted loop>
            <source src="cover.mp4" type="video/mp4">
        </video>
        <div class="content">
            <h1>BIENVENUE CHEZ SKE TRAVEL</h1>
            <p>AGENCE DE VOYAGE</p>
        </div>
    </div>
    <div class="container">
        <!-- add upnavbar  -->
        <div class="upNavBar">
            <div class="infoDesc">
                <img  class="logo" src="logo.png" alt="">
                <i class="fa-solid fa-envelope"></i><p>saad-kevin-elodi@gmail.com</p>
                <i class="fa-solid fa-phone"></i><p>+33 71 888 888</p>
            </div>
            <div class="icon">
                <a href="instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="googleplus.com" target="_blank"><i class="fa-brands fa-google-plus-g"></i></a>
                <a href="twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            </div>
            <!-- start navbar  -->
            <div class="navBarDesktop">
                
                <ul class="navbar-nav">
                    <li class="nav-item "><a href="reservation.html" class="nav-link active">Réservation</a></li>
                    <li class="nav-item"><a href="destination.html" class="nav-link">Distination</a></li>
                    <li class="nav-item"><a href="nos partenaires.html" class="nav-link">Nos Partenaires</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="a propos.html" class="nav-link">A Propos De Nous</a></li> 
                </ul>
                <a class="user"href="./index.php"><i class=" nav-link fa-solid fa-user"></i></a>    
            </div>
            <!-- end navbar -->

            <!-- navbar for mobile  -->
            <span class="toggle"><i class="fa-solid fa-bars"></i></span>
                <nav >
                    <span class="close"><i class="fa-solid fa-xmark"></i></span>
                    <a class="user"href="#"><i class=" nav-link fa-solid fa-user"></i></a> 
                    <a href="">RéSERVATION</a>
                    <a href="">DESTINATION</a>
                    <a href="">NOS PARTENAIRES</a>
                    <a href="">CONTACT</a>
                    <a href="">A PROPOS DE NOUS</a>
                
                </nav>
                <!-- end navbar mobile -->
    </div>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="travel.js"></script>
</body>
</html>