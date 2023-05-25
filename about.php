<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Om os</title>
    <meta name="author" content="Sigurd, Sidney og Christian. Buildmate 2023.">
    <meta name="copyright" content="Sigurd, Tommy og Christian. Find Graphics 2022. All Rights Reserved.">
    <meta name="description" content="Leder du efter din næste computer? men ved ikke hvo du skal starte? BuildMate hjælper dig med at finde
den computer der passer dig bedst.">
    <meta name="theme-color" content="#ffffff"/>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link rel="icon" href="images/buildmate_favicon_pink.svg">

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

        <!--NAVBAR-->
        <?php include 'includes/navbar.php'?>

        <div class="pt-5 text-center"><h1 class="about_header">Hvem er <span>BuildMate</span></h1></div>
        <div class="pt-3 pb-2 text-center mb-lg-4"><h5 class="about_subheader">Hvem er BuildMate?</h5></div>

        <div class="shadow d-none d-md-block mt-5 p-0 m-0">
            <div class="about_card_omega"> <img class="img-about" alt="animated-team-photo" src="images/SquadAnimationgif.gif"> </div>
        </div>


            <div class="d-none d-md-block ">
                <div class="d-flex justify-content-evenly pt-5 pb-5">

                    <div class="text-center">
                        <img class="mx-auto pb-3" alt="icon" src="images/code-solid.png">
                        <h2 class="intro-text koder">Koder</h2>
                    </div>

                    <div class="text-center">
                        <img class="mx-auto pb-3" alt="icon" src="images/object-group-solid.png">
                        <h2 class="intro-text designer">Designer</h2>
                    </div>

                    <div class="text-center">
                        <img class="mx-auto pb-3" alt="icon" src="images/computer-solid.png">
                        <h2 class="intro-text computer">Computer <br> bygning</h2>
                    </div>


                </div>
            </div>


        <div class="p-0 m-0 shadow col-10 d-md-none mt-5 justify-content-center">
            <div class="about_card "><img class="img-about" alt="about_us_sid" src="ABOUT-IMG/IMG_7925 kopier.webp"> </div>
        </div>

        <div class="justify-content-center d-flex pb-3 pt-5 d-md-none"><img class="" alt="icon" src="images/object-group-solid.png"></div>
        <div class="text-center d-md-none"><h2 class="intro-text designer">Designer</h2></div>

        <div class="p-0 m-0 shadow col-10 d-md-none  mt-5 mb-5 justify-content-center">
            <div class="about_card "><img class="img-about" alt="about_us_Sigurd" src="ABOUT-IMG/IMG_7933 kopier.webp"> </div>
        </div>

        <div class="justify-content-center d-flex pb-2 d-md-none"><img class="" alt="icon" src="images/code-solid.png"></div>
        <div class="text-center d-md-none"><h2 class="intro-text koder">Koder</h2></div>

        <div class="p-0 m-0 shadow col-10 d-md-none mb-5 justify-content-center mt-5">
            <div class="about_card"><img class="img-about" alt="about_us_Christian" src="ABOUT-IMG/IMG_7977 kopier.webp"> </div>
        </div>

        <div class="justify-content-center d-flex pb-2 d-md-none"><img class="about-logo-alt" alt="icon" src="images/computer-solid.png"></div>
        <div class="text-center d-md-none pb-5"><h2 class="intro-text rubrik3 computer">Computer <br> bygning</h2></div>

    </div>
</div>

<div class="filler ">

</div>

<div class="about-us m-0 p-0">
    <div class="row m-0 p-0">

        <div class="ps-5 pe-5">
            <div class="pt-4 about-text">
                <h2 class="about-rubrik pt-5">Computere skal være for <span>alle</span></h2>
            </div>
            <div>
                <p class="pt-4 pb-5 about-text">Computerverden har altid været for de erfarne brugere, som har brugt adskillige
                    år på at følge med i de nyeste computerdele og andre komponenter. Vi hos BuildMate mener, at alle skal have
                    chancen for at bygge deres drømmecomputer uden at skulle bruge en hel menneskealder på at lære, hvordan man
                    præcist bygger en computer.
                    <br><br>
                    Vores speciale er gaming computere! Vi skræddersyr dem præcist efter dine gaming behov,
                    hvor vi fokuserer på det, der faktisk betyder noget for dig og dine behov. </p>
            </div>
        </div>

        <div class="pt-5 mt-5 d-flex position-relative justify-content-center pb-5">
            <a class="text-decoration-none" href="gameselect.php"><div class="button_tilbage rounded-1 justify-content-center">
                    <span class="justify-content-center d-flex tilbage-text">Byg en pc</span></div></a>
        </div>

    </div>
</div>

<div class="filler ">

</div>

<!--FOOTER-->
<?php include 'includes/footer.php'?>

<!--Script for Bootstrap-->
<script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="js/forside.js"></script>

</body>
</html>
