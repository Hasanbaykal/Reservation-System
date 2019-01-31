<?php
include './CreatingDatabase.php'
?>

<!DOCTYPE html>
<html>
<head>
    <title>Projecten</title>
    <script type="text/javascript" src="reservation.js" defer></script>
    <link rel="stylesheet" type="text/css" href="reservation.css"
</head>
<body>

<img src="img/logo-ermax.png" alt="Logo Ermax Bouw" class="main-image">

<nav class="navbar">
    <a href="index.php">Over Ermax</a>
    <a href="projects.php">Projecten</a>
    <div class="dropdown">
        <button class="dropbtn">Reservering
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="signup.php">Aanmelden</a>
            <a href="appointment.php">Afspraak Maken</a>
            <a href="manage.php">Afspraak Beheren</a>
        </div>
    </div>
    <a href="contact.php">Contact</a>
    <a class="admin_page" href="admin.php">Admin</a>
</nav>

<footer>
    <p>Ermax Bouw B.V. | Cairostraat 68 | 3047 BC Rotterdam | tel: 010-4625675 | fax: 010-2622534 |<strong><a href="mailto:info@ermaxbouw.nl">info@ermaxbouw.nl</a></strong></p>
</footer>

<!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <div class="numbertext">1 / 10</div>
        <img src="img/1-Slideshow-Metselwerk_Rotterdam.jpg" style="width:100%">
        <div class="text">Metselwerk Rotterdam</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 10</div>
        <img src="img/2-Slideshow-Maatwerk_Meubel.jpg" style="width:100%">
        <div class="text">Maatwerk Meubel</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 10</div>
        <img src="img/3-Slideshow-Nieuwe_Vloer.jpg" style="width:100%">
        <div class="text">Nieuwe Vloer</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">4 / 10</div>
        <img src="img/4-Slideshow-Glasmozaiek_Badkamer.jpg" style="width:100%">
        <div class="text">Glasmozaiek Badkamer</div>
        </div>

    <div class="mySlides fade">
        <div class="numbertext">5 / 10</div>
        <img src="img/5-Slideshow-Interieur_Woonhuis.jpg" style="width:100%">
        <div class="text">Interieur Woonhuis</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">6 / 10</div>
        <img src="img/6-Slideshow-Vlaamsch_Broodhuys_Interieur.png" style="width:100%">
        <div class="text">Vlaamsch Broodhuys Interieur</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">7 / 10</div>
        <img src="img/7-Slideshow-Madeira_House_Interieur.png" style="width:100%">
        <div class="text">Madeira House Interieur</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">8 / 10</div>
        <img src="img/8-Slideshow-Nieuwbouw_Ballegooijen.png" style="width:100%">
        <div class="text">Nieuwbouw Ballegooijen</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">9 / 10</div>
        <img src="img/9-Slideshow-Nieuwbouw_Ballegooijen.png" style="width:100%">
        <div class="text">Nieuwbouw Ballegooijen</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">10 / 10</div>
        <img src="img/10-Slideshow-Nieuwbouw_Ballegooijen.png" style="width:100%">
        <div class="text">Nieuwbouw Ballegooijen</div>
    </div>

    <!-- Next and previous buttons -->
    <div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
</div>

<!-- The dots/circles -->
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
    <span class="dot" onclick="currentSlide(6)"></span>
    <span class="dot" onclick="currentSlide(7)"></span>
    <span class="dot" onclick="currentSlide(8)"></span>
    <span class="dot" onclick="currentSlide(9)"></span>
    <span class="dot" onclick="currentSlide(10)"></span>
</div>



</body>
</html>