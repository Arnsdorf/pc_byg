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

<div class="container-fluid about-us ">
    <div class="row justify-content-center d-flex ">

        <div class="pt-5 text-center"><h1 class="about_header">Hvem er <span>BuildMate</span></h1></div>
        <div class="pt-3 pb-2 text-center"><h5 class="about_subheader">Hvem er BuildMate?</h5></div>

        <div class="shadow d-none d-md-block mt-4 p-0 m-0">
            <div class="about_card_omega"> <img class="img-about" src="images/SquadAnimationgif.gif"> </div>
        </div>

        <div class="d-none d-md-block">
            <div class="justify-content-center justify-content-evenly d-flex pt-5 pb-5">
                <img src="images/object-group-solid.png">
                <img class="" src="images/code-solid.png">
                <img src="images/computer-solid.png">
            </div>
            <div class="justify-content-center justify-content-evenly d-flex text-center ">
                <h2 class=" intro-text">Designer</h2>
                <h2 class=" intro-text">Koder</h2>
                <h2 class=" intro-text">Computer-bygning</h2>
            </div>
        </div>

        <div class="p-0 m-0 shadow col-10 d-md-none mt-5 justify-content-center">
            <div class="about_card "><img class="img-about" src="ABOUT-IMG/IMG_7925.jpg"> </div>
        </div>

        <div class="justify-content-center d-flex pb-3 pt-5 d-md-none"><img src="images/object-group-solid.png"></div>

        <div class="p-0 m-0 shadow col-10 d-md-none  mt-5 mb-5 justify-content-center">
            <div class="about_card "><img class="img-about" src="ABOUT-IMG/IMG_7935.jpg"> </div>
        </div>

        <div class="justify-content-center d-flex pb-5 d-md-none"><img src="images/code-solid.png"></div>

        <div class="p-0 m-0 shadow col-10 d-md-none mb-5 justify-content-center">
            <div class="about_card"><img class="img-about" src="ABOUT-IMG/IMG_7977.jpg"> </div>
        </div>

        <div class="justify-content-center d-flex pb-5 d-md-none"><img src="images/computer-solid.png"></div>

    </div>
</div>

<div class="filler">

</div>




<script src="js/forside.js"></script>
</body>
</html>
