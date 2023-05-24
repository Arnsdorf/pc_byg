<?php
require "settings/init.php";


?>


<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Vælg grafisk ydeevne</title>

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
<section>
    <div class="">
        <h2 class="display-6 text-center text-white fw-bold">Vælg din grafiske <span>ydeevne.</span></h2>
        <p class="pt-3 pb-5 fs-5 text-white text-center p-max mx-auto">
            Grafisk ydeevne omhandler den visuelle oplevelse man oplever under <span>spil</span>, og hvor realistiske denne oplevelse er.
        </p>
    </div>
    <div class="container-fluid shadow" style="background-color: #001D31">
        <div class="row d-flex justify-content-center mt-sm-5 mb-sm-5">
            <div class="pb-2 pt-2">
                <div class="container">

                    <div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-4 d-flex justify-content-lg-between justify-content-center">

                        <div class="p-0 mx-sm-2 mt-5 mt-lg-0 position-relative d-flex justify-content-center">
                            <img src="images/lowgraphic.png" alt="graphic_game" class="graphic_game shadow" data-component-class="1">
                            <div class="position-absolute bottom-0 start-50 translate-middle-x text-center">
                                <h5 class="text-white mb-5 p-min"><span>Lav</span> grafisk ydeevne</h5>
                            </div>
                        </div>

                        <div class="p-0 mx-sm-2 mt-5 mt-lg-0 position-relative d-flex justify-content-center">
                            <img src="images/midgraphic.png" alt="graphic_game" class="graphic_game shadow" data-component-class="2">
                            <div class="position-absolute bottom-0 start-50 translate-middle-x text-center">
                                <h5 class="text-white mb-5 p-min"><span>Mellem</span> grafisk ydeevne</h5>
                            </div>
                        </div>

                        <div class="p-0 mx-sm-2 mt-5 mt-lg-0 position-relative d-flex justify-content-center">
                            <img src="images/highgraphic.png" alt="graphic_game" class="graphic_game shadow" data-component-class="3">
                            <div class="position-absolute bottom-0 start-50 translate-middle-x text-center">
                                <h5 class="text-white mb-5 p-min"><span>Høj</span> grafisk ydeevne</h5>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-3 mb-3 mt-sm-5 flex-sm-row flex-column">
        <a class="m-2 p-3 bg-black text-white text-decoration-none shadow" href="gameselect.php">< Gå tilbage</a>
        <a class="m-2 p-3 bg-black text-white text-decoration-none shadow" href="storageselect.php">Gå videre ></a>
    </div>
</section>


<script src="js/select_graphic.js"></script>
<!--Script for Bootstrap-->
<script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
