<?php
require "settings/init.php";

if (isset($_GET['id1']) && isset($_GET['id2'])) {
    $sql = "SELECT * FROM builds WHERE build_id IN (:id1, :id2)";
    $bind = [":id1" => $_GET["id1"], ":id2" => $_GET["id2"]];
    $builds = $db->sql($sql, $bind);
} else {
    echo "Error: missing required parameters";
}

if (isset($_GET['build_id'])) {
    $build_id = $_GET['build_id'];
    error_log("Clicked on build with id: $build_id");
} else {
    echo "Error: missing required parameter";
}


?>




<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Lille Test</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link rel="icon" href="uploads/buildmate_favicon_green.svg">
    <link rel="stylesheet" href="https://unpkg.com/mvp.css@1.12/mvp.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>




<!-- pc-byg -->
<section>
    <div class="pt-5">
        <h2 class="display-6 text-center text-white fw-bold">Vælg dine top 2 <span>spil.</span></h2>
        <p class="pt-3 pb-5 fs-5 text-white text-center p-max mx-auto">
            Vælg de <span>2 spil</span> du interessere dig for mest, eller de spil du godt kunne tænke dig at spille!
        </p>
    </div>
    <div class="container-fluid shadow" style="background-color: #001D31">
        <div class="row d-flex justify-content-center mt-sm-5 mb-sm-5">
            <div class="pb-3 pt-3">
                <div class="container">

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 d-flex justify-content-center">

                        <div class="image shadow p-0 m-2 border-0 rounded-5">
                            <img src="images/fortnite.png" alt="fortnite" class="img" data-build-id="2" >
                        </div>


                        <div class="image shadow p-0 m-2 border-0 rounded-5">
                            <img src="images/gta.png" alt="gta" class="img" data-build-id="2">
                        </div>


                        <div class="image shadow p-0 m-2 border-0 rounded-5">
                            <img src="images/hoqwarts.png" alt="hogwarts" class="img" data-build-id="3" >
                        </div>

                        <div class="image shadow p-0 m-2 border-0 rounded-5">
                            <img src="images/csgo.png" alt="csgo" class="img" data-build-id="1" >
                        </div>

                        <div class="image shadow p-0 m-2 border-0 rounded-5">
                            <img src="images/minecraft.png" alt="minecraft" class="img" data-build-id="1" >
                        </div>

                        <div class="image shadow p-0 m-2 border-0 rounded-5">
                            <img src="images/warzone.png" alt="warzone" class="img" data-build-id="3">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-sm-5 flex-sm-row flex-column">
        <a class="m-2 p-3 bg-black text-white text-decoration-none shadow" href="#">< Gå tilbage</a>
        <a class="m-2 p-3 bg-black text-white text-decoration-none shadow" id="submit_btn">Gå videre ></a>
    </div>
</section>


<script type="module" src="js/builds.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/select_game.js"></script>

</body>
</html>

