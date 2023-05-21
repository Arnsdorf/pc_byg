<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>BuildMate</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link rel="icon" href="images/buildmate_favicon_green.svg">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Link til Montserrat skrifttypen -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<div class="container-fluid about-us">
    <div class="row justify-content-center d-flex ">

        <div class="pt-5 text-center"><h1 class="about_header">Hvem er <span>BuildMate</span></h1></div>
        <div class="pt-3 pb-2 text-center mb-lg-4"><h5 class="about_subheader">Hvem er BuildMate?</h5></div>

        <div class="shadow d-none d-md-block mt-5 p-0 m-0">
            <div class="about_card_omega"> <img class="img-about" src="images/SquadAnimationgif.gif"> </div>
        </div>


            <div class="d-none d-md-block ">
                <div class="d-flex justify-content-evenly pt-5 pb-5">

                    <div class="text-center">
                        <img class="mx-auto pb-3" src="images/object-group-solid.png">
                        <h2 class="intro-text">Designer</h2>
                    </div>

                    <div class="text-center">
                        <img class="mx-auto pb-3" src="images/code-solid.png">
                        <h2 class="intro-text">Koder</h2>
                    </div>

                    <div class="text-center">
                        <img class="mx-auto pb-3" src="images/computer-solid.png">
                        <h2 class="intro-text">Computer <br> bygning</h2>
                    </div>

                </div>
            </div>


        <div class="p-0 m-0 shadow col-10 d-md-none mt-5 justify-content-center">
            <div class="about_card "><img class="img-about" src="ABOUT-IMG/IMG_7925.jpg"> </div>
        </div>

        <div class="justify-content-center d-flex pb-3 pt-5 d-md-none"><img class="about-logo" src="images/object-group-solid.png"></div>
        <div class="text-center d-md-none"><h2 class="intro-text">Designer</h2></div>

        <div class="p-0 m-0 shadow col-10 d-md-none  mt-5 mb-5 justify-content-center">
            <div class="about_card "><img class="img-about" src="ABOUT-IMG/IMG_7935.jpg"> </div>
        </div>

        <div class="justify-content-center d-flex pb-2 d-md-none"><img class="about-logo" src="images/code-solid.png"></div>
        <div class="text-center d-md-none"><h2 class="intro-text">Koder</h2></div>

        <div class="p-0 m-0 shadow col-10 d-md-none mb-5 justify-content-center mt-5">
            <div class="about_card"><img class="img-about" src="ABOUT-IMG/IMG_7977.jpg"> </div>
        </div>

        <div class="justify-content-center d-flex pb-2 d-md-none"><img class="about-logo-alt" src="images/computer-solid.png"></div>
        <div class="text-center d-md-none pb-5"><h2 class="intro-text rubrik3">Computer <br> bygning</h2></div>

    </div>
</div>

<div class="filler ">

</div>

<div class="about-us m-0 p-0">
    <div class="row m-0 p-0">

        <div class="ps-5 pe-5">
            <div class="pt-4 about-text">
                <h2 class="about-rubrik">Computere skal være for <span>alle</span></h2>
            </div>
            <div>
                <p class="pt-4 pb-5 about-brød about-text">Computerverden har altid været for de erfarne brugere, som har brugt flere år på at følge med
                    i de nyeste computerdele og andre komponenter. Vi hos BuildMate mener alle skal have
                    chancen for bygge deres drømme computer, uden at bruge flere år på at lære hvordan man
                    enligt bygger en computer.
                    <br><br>
                    Vores speciale er gaming computer! som præcis passer dine gaming behov, hvor vi fokusere på
                    hvad der rent faktisk betyder noget for dig og dine behov. </p>
            </div>
        </div>

        <div class="d-flex position-relative justify-content-center pb-5">
            <a class="text-decoration-none" href="#"><div class="button1 rounded-2 justify-content-center">
                    <span class="justify-content-center d-flex p-2 knap-text position-relative">Byg en pc</span></div></a>
        </div>

    </div>
</div>




<script src="js/forside.js"></script>
</body>
</html>
