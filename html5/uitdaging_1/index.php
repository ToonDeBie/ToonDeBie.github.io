<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Wij zijn een groep studenten uit het eerste jaar in de richting IT Factory in Thomas More Geel. Met dit fictief bedrijf zullen wij, tijdens het vak Webdesign in HTML5, responsieve websites bouwen. Zorg er dus zeker voor dat je op de hoogte blijft van onze werken!">
    <meta name="author" content="Web Spire">

    <title>Contactpage | Web Spire</title>

    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- CSS: eigen stylesheet -->
    <link rel="stylesheet" href="css/webBureau.css">

    <!-- link favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!--    link Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

    <!--    link Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

</head>

<body id="page-top" class="bg-white">

<!-- Navigation -->
<nav class="navbar bg-white navbar-expand-lg fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html#page-top"><img height="30"
                                                                        src="img/logos/logo.svg"
                                                                        alt="Web Spire"></a>
        <button class="d-block d-lg-none navbar-knop py-3 px-4 text-uppercase rounded border-0 navbar-toggler-right"
                type="button"
                data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            <i class="fas fa-bars"></i> Menu
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="navigatie-item nav-item py-3 px-0">
                    <a class="navigatie-link nav-link py-1 p-lg-3 d-inline-block js-scroll-trigger" href="index.html#overons">Over
                        Ons</a>
                </li>
                <li class="navigatie-item nav-item py-3 px-0">
                    <a class="navigatie-link nav-link py-1 p-lg-3 d-inline-block js-scroll-trigger" href="index.html#services">Services</a>
                </li>
                <li class="navigatie-item nav-item py-3 px-0">
                    <a class="navigatie-link nav-link py-1 p-lg-3 d-inline-block js-scroll-trigger" href="index.html#teamleden">Teamleden</a>
                </li>
                <li class="navigatie-item nav-item py-3 px-0">
                    <a class="navigatie-link nav-link py-1 p-lg-3 d-inline-block js-scroll-trigger" href="index.html#realisaties">Realisaties</a>
                </li>
                <li class="navigatie-item nav-item py-3 px-0">
                    <a class="navigatie-link nav-link py-1 p-lg-3 d-inline-block js-scroll-trigger" href="index.html#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Contact -->
<section class="bg-light row py-5 my-5" id="contact">
    <div class="col-lg-6"></div>
    <div class="container contact-kader col-lg-5 bg-white m-md-auto p-5">
        <h1 class="d-inline-block font-weight-bold text-white text-uppercase py-2 px-4">contact</h1>
        <div class="row">
            <div class="col-lg-12">
                <p class="text-left mb-0 h2 font-weight-bold">Bedankt om ons te contacteren!</p>
                <p>Wij nemen zo spoedig mogelijk contact met u op!</p>
                <p>De volgende gegevens zijn doorgegeven aan Web Spire:</p>
                <?php
                echo "<ul>";
                echo "<li class='ml-3'>Naam: " . $_POST["naam"] . "</li>";
                echo "<li class='ml-3'>E-mailadres: " . $_POST["mail"] . "</li>";
                echo "<li class='ml-3'>Onderwerp: " . $_POST["Onderwerp"] . "</li>";
                echo "<li class='ml-3'>Bericht: " . $_POST["bericht"] . "</li>";
                echo "<li class='ml-3'>U wilt " . $_POST["acties"] . " op de hoogte blijven van onze acties en/of nieuwe projecten.</li>";
                echo "</ul>";
                ?>
            </div>
        </div>

    </div>
    <div class="col-lg-1"></div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="align-items-center">
            <a class="js-scroll-trigger" href="index.html"><img height="30" src="img/logos/logo.svg" alt="Web Spire"></a>
            <p>Copyright &copy; Web Spire 2020 </p>
        </div>
    </div>
</footer>
<!-- JS: jQuery, Bootstrap, stylish portfolio -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="js/agency.min.js"></script>
</body>

</html>
