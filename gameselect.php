<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Vælg 2 spil</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link rel="tab icon" type="img" href="images/buildmate_favicon_pink.svg">
    <link rel="stylesheet" href="https://unpkg.com/mvp.css@1.12/mvp.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Link til Montserrat skrifttypen -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<!--NAVBAR-->
<?php include 'includes/navbar.php'?>


<!-- pc-byg -->
<section class="d-flex align-items-center justify-content-center">
    <div class="">
        <h2 class="display-6 text-center text-white fw-bold">Vælg dine top 2 <span>spil.</span></h2>
        <p class="pt-3 pb-5 fs-5 text-white text-center p-2 p-max mx-auto">
            Vælg de <span>2 spil</span> du interessere dig for mest, eller de spil du godt kunne tænke dig at spille!
        </p>
    </div>
    <div class="container-fluid shadow" style="background-color: #001D31">
        <div class="row d-flex justify-content-center mt-sm-5 mb-sm-5">
            <div class="pb-3 pt-3">
                <div class="container">

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 d-flex justify-content-center">


                        <div class="image shadow p-0 m-2 border-0">
                            <img src="images/fortnite.png" alt="fortnite" class="img" data-component-class="2">
                        </div>


                        <div class="image shadow p-0 m-2 border-0 ">
                            <img src="images/gta.png" alt="gta" class="img" data-component-class="2">
                        </div>


                        <div class="image shadow p-0 m-2 border-0">
                            <img src="images/hoqwarts.png" alt="hogwarts" class="img" data-component-class="3">
                        </div>

                        <div class="image shadow p-0 m-2 border-0">
                            <img src="images/csgo.png" alt="csgo" class="img" data-component-class="1" >
                        </div>

                        <div class="image shadow p-0 m-2 border-0 ">
                            <img src="images/minecraft.png" alt="minecraft" class="img" data-component-class="1">
                        </div>

                        <div class="image shadow p-0 m-2 border-0 ">
                            <img src="images/warzone.png" alt="warzone" class="img" data-component-class="3">
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-3 mt-sm-5 flex-sm-row flex-column">
        <a class="m-2 p-3 bg-black text-white text-decoration-none shadow button-guide" href="#">< Gå tilbage</a>
        <a class="m-2 p-3 bg-black text-white text-decoration-none shadow button-guide" href="graphicspage.php">Gå videre ></a>
    </div>
</section>

<div class="pt-2 m-0 p-0">
    <div class="row justify-content-center m-0 p-0 pb-4">

        <div class=" dot-div-s ps-1"></div>
        <div class="dot-div ps-1 ms-2 opacity-75"></div>
        <div class="dot-div ps-1 ms-2 opacity-50"></div>
        <div class="dot-div ps-1 ms-2 opacity-25"></div>
        <div class="dot-div ps-1 ms-2 opacity-25"></div>

    </div>
</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/select_game.js"></script>

</body>
</html>
