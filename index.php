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

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<!-- pc-byg -->
<section>
    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="pt-5">
                <h2 class="display-6 text-center text-white fw-normal">Sammensæt din egen gamer-computer😍</h2>
                <p class="pt-3 pb-5 fs-5 text-white text-center p-max mx-auto">
                    Byg din egen drømmecomputer med vores omfattende udvalg af hardwarekomponenter og skræddersy din oplevelse til dine behov og ønsker.
                </p>
            </div>
            <div class="pb-3">
                <h2 class="rounded-top text-white text-sm-start text-center mt-3 pb-3">Vælg 2 gamer-spil.</h2>

                <div class="container">

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 d-flex justify-content-center">

                        <div class="image shadow p-0 m-2 border-0 rounded-5">
                            <img src="images/fortnite.png" alt="fortnite" class="img" id="mid">

                        </div>

                        <div class="image shadow p-0 m-2 border-0 rounded-5">
                            <img src="images/gta.png" alt="gta" class="img" id="mid">
                        </div>

                        <div class="image shadow p-0 m-2 border-0 rounded-5">
                            <img src="images/hoqwarts.png" alt="hogwarts" class="img" id="high">
                        </div>

                        <div class="image shadow p-0 m-2 border-0 rounded-5">
                            <img src="images/csgo.png" alt="csgo" class="img" id="low">
                        </div>

                        <div class="image shadow p-0 m-2 border-0 rounded-5">
                            <img src="images/minecraft.png" alt="minecraft" class="img" id="low">
                        </div>

                        <div class="image shadow p-0 m-2 border-0 rounded-5">
                            <img src="images/warzone.png" alt="warzone" class="img" id="high">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="mx-auto m-2">Gå videre ></button>
    </div>
    <div class="text-center text-white mt-4">
        <p class="text-white" id="imageCount"></p>
    </div>
</section>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    let imageCount = 0;
    const maxImages = 2;

    document.querySelectorAll('.img').forEach(img => {
        img.addEventListener('click', () => {
            if (imageCount < maxImages) {
                imageCount++;
                document.getElementById('imageCount').textContent = `You have selected ${imageCount} image${imageCount === 1 ? '' : 's'}.`;
            }
        });
    });



</script>

</body>
</html>

