<?php
require "settings/init.php";

?>



<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Vælg lagring</title>
    <meta name="author" content="Sigurd, Sidney og Christian. Buildmate 2023.">
    <meta name="copyright" content="Sigurd, Tommy og Christian. Find Graphics 2022. All Rights Reserved.">
    <meta name="description" content="Leder du efter din næste computer? men ved ikke hvo du skal starte? BuildMate hjælper dig med at finde
den computer der passer dig bedst.">
    <meta name="theme-color" content="#ffffff"/>
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link rel="tab icon" type="img" href="images/buildmate_favicon_green.svg">
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

<?php include 'includes/navbar.php'?>

<!-- pc-byg -->
<section>
    <div class="">
        <h2 class="display-6 text-center text-white fw-bold">Vælg <span>lagring.</span></h2>
        <p class="pt-3 pb-5 fs-5 text-white text-center p-max mx-auto p-2">
            <span>Lagring</span> omhandler den ledige plads på din computer
            som kan opbevare filer, programmer og <span>spil</span>.
        </p>
    </div>
    <div class="container-fluid shadow" style="background-color: #001D31">
        <div class="row d-flex justify-content-center mb-4 mt-sm-5 mb-sm-5 m-lg-4">
            <div class="pb-2 pt-2">
                <div class="container">

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 d-flex justify-content-evenly">

                        <div class="p-0 mx-sm-2 mt-5 mt-lg-0 d-flex justify-content-center storage-animation storage-box sel">
                            <img src="images/lagring_lav.png" alt="storage_low" class="storage" data-type-id="4">
                        </div>

                        <div class="p-0 mx-sm-2 mt-5 mt-lg-0 d-flex justify-content-center storage-animation storage-box sel">
                            <img src="images/lagring_middel.png" alt="storage_mid" class="storage" data-type-id="5">
                        </div>

                        <div class="p-0 mx-sm-2 mt-5 mt-lg-0 d-flex justify-content-center storage-animation storage-box sel">
                            <img src="images/lagring_stor.png" alt="storage_high" class="storage" data-type-id="6">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-3 mb-3 mt-sm-5 flex-sm-row flex-column">
        <a class="m-2 p-3 bg-black text-white text-decoration-none shadow button-guide" href="graphicspage.php">< Gå tilbage</a>
        <a class="m-2 p-3 bg-black text-white text-decoration-none shadow button-guide" href="caseselect.php">Gå videre ></a>
    </div>
</section>
<div class="pt-2 m-0 p-0">
    <div class="row justify-content-center m-0 p-0 pb-4">

        <div class=" dot-div opacity-50 ps-1"></div>
        <div class="dot-div ps-1 ms-2 opacity-75"></div>
        <div class="dot-div-s ps-1 ms-2 opacity-100"></div>
        <div class="dot-div ps-1 ms-2 opacity-50"></div>
        <div class="dot-div ps-1 ms-2 opacity-25"></div>

    </div>
</div>
<!--Script for Bootstrap-->
<script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/select_storage.js"></script>
<script src="js/select1.js"></script>
</body>
</html>

