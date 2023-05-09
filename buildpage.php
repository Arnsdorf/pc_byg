<?php
require "settings/init.php";


?>


<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Lille Test</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link rel="stylesheet" href="https://unpkg.com/mvp.css@1.12/mvp.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<!-- pc-byg -->
<section>
    <div class="container py-5">
        <h2 class="display-6 text-center text-white fw-bold mb-5">Din anbefalede <span>computer</span></h2>
        <div class="row justify-content-center">
            <div class="col-md-6 mb-5 mb-lg-0">
                <div class="card border-0 rounded-4">
                    <img class="bg-black" src="images/pc_done.png" alt="Din færdige pc">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card bg-dark text-white">
                    <div class="card-body">

                        <p class="card-text fs-5 mb-4">Grafisk ydeevne</p>
                        <img class="stats mb-4" src="images/grafiskydeevne.png" alt="Din færdige pc">

                        <p class="card-text fs-5 mb-4">Hastighed</p>
                        <img class="stats mb-4" src="images/hastighed.png" alt="Din færdige pc">

                        <p class="card-text fs-5 mb-4">Lagerplads</p>
                        <img class="stats mb-4" src="images/lagerplads.png" alt="Din færdige pc">

                        <p class="card-text fs-5 mb-4">Multitasking</p>
                        <img class="stats mb-3" src="images/multitasking.png" alt="Din færdige pc">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="js/select_graphic.js"></script>
</body>
</html>

