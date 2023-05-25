<?php
require "settings/init.php";


?>


<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Vælg et kabinet</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

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
        <h2 class="display-6 text-center text-white fw-bold">Computer <span>kabinet.</span></h2>
        <p class="pt-3 pb-5 fs-5 text-white text-center p-max mx-auto semi-font p-2">
            Din computer, din stil. Vælg det <span>kabinet</span>, som viser din indre gamer ånd.
        </p>
    </div>
    <div class="container-fluid shadow" style="background-color: #001D31">
        <div class="row d-flex justify-content-center mt-sm-5 mb-sm-5">
            <div class="pb-2 pt-2">
                <div class="container">

                    <div class="row row-cols-sm-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 d-flex justify-content-evenly">

                        <div class="p-0 mx-sm-2 mt-2 mb-2 d-flex justify-content-center m-0 case-animation case-key case">
                            <img src="images/hvidt_case.png" alt="hvidt kabinet" class="cas-img" data-id="51">
                        </div>

                        <div class="p-0 mx-sm-2 mt-2 mb-2 d-flex justify-content-center m-0 case-animation case-key case">
                            <img src="images/sort_case.png" alt="sort kabinet" class="cas-img" data-id="50">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-3 mt-sm-5 flex-sm-row flex-column">
        <a class="m-2 p-3 bg-black text-white text-decoration-none shadow button-guide" href="storageselect.php">< Gå tilbage</a>
        <a class="m-2 p-3 bg-black text-white text-decoration-none shadow button-guide" href="buildpage.php">Gå videre ></a>
    </div>
</section>
<div class="pt-2 m-0 p-0">
    <div class="row justify-content-center m-0 p-0 pb-4">

        <div class=" dot-div opacity-25 ps-1"></div>
        <div class="dot-div ps-1 ms-2 opacity-50"></div>
        <div class="dot-div ps-1 ms-2 opacity-75"></div>
        <div class="dot-div-s ps-1 ms-2 opacity-100"></div>
        <div class="dot-div ps-1 ms-2 opacity-75"></div>

    </div>
</div>
<script src="js/select_case.js"></script>


<!--Script for Bootstrap-->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
