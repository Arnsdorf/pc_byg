<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Din anbefalede computer</title>

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


<!-- Din anbefalet computer -->
<section>
    <div class="container py-5 pt-0">
        <h2 class="display-6 text-center text-white fw-bold mb-5">Din anbefalet <span>computer</span></h2>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 mb-5 mb-lg-0">
                <div class="border-0 d-flex justify-content-center">
                    <img class="bg-pcblue rounded-3 pc_comp_img shadow d-flex justify-content-center" src="images/pc_done.png" alt="Din færdige pc">
                </div>
            </div>
            <!-- PC Stats -->
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card border-0">
                    <div class="card-body shadow rounded-3 d-flex justify-content-center flex-column">

                        <p class="card-text text-white fs-5 mb-4">Grafisk ydeevne</p>
                        <img class="stats mb-4" src="images/grafiskydeevne.png" alt="Din færdige pc">

                        <p class="card-text text-white fs-5 mb-4">Hastighed</p>
                        <img class="stats mb-4" src="images/hastighed.png" alt="Din færdige pc">

                        <p class="card-text text-white fs-5 mb-4">Lagerplads</p>
                        <img class="stats mb-4" src="images/lagerplads.png" alt="Din færdige pc">

                        <p class="card-text text-white fs-5 mb-4">Multitasking</p>
                        <img class="stats mb-3" src="images/multitasking.png" alt="Din færdige pc">

                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <p class="text-center fs-5 text-white">Pris: <span class="bg-pcblue">10.000 DKK</span></p>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <div class="text-center fs-5 text-white"></div>
                    </div>

                    <div class="d-flex justify-content-center mt-3">
                        <a class="m-2 p-3 px-4 rounded-3 bg-black text-white text-decoration-none shadow" href="#">Køb nu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Dine Spil -->
<section style="background-color: #001D31">
    <div class="pt-5">
        <h2 class="display-6 text-center text-white fw-bold">Dine <span>spil</span></h2>
        <p class="pt-3 pb-5 fs-5 text-white text-center p-max mx-auto">
            <span>FPS</span> (Frames pr. sekund) bestemmer, hvor godt din computer kan
            køre dit ønskede <span>spil</span>. En optimal FPS ligger typisk mellem
            60+ og 120. Alt under dette niveau kan resultere i en <span>forringet</span>
            gamingoplevelse.
        </p>
    </div>
    <div class="container-fluid shadow">
        <div class="row d-flex justify-content-center mt-sm-5 mb-sm-5">
            <div class="pb-2 pt-2">
                <div class="container">

                    <div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-4 d-flex justify-content-md-evenly justify-content-center">

                        <div class="p-0 mx-sm-2 mt-5 mt-lg-0 position-relative d-flex justify-content-center">
                            <img src="images/fortnite.png" alt="graphic_game" class="shadow done_game">
                            <div class="position-absolute bottom-50 start-50 translate-middle-x text-center">
                                <h3 class="text-white p-min fw-bold">FPS</h3>
                            </div>
                        </div>

                        <div class="p-0 mx-sm-2 mt-5 mt-lg-0 position-relative d-flex justify-content-center">
                            <img src="images/minecraft.png" alt="graphic_game" class="shadow done_game">
                            <div class="position-absolute bottom-50 start-50 translate-middle-x text-center">
                                <h3 class="text-white p-min fw-bold">FPS</h3>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- PC Komponenter -->
<section class="build">
    <div class="pt-5 mt-4">
        <h2 class="display-6 text-center text-white fw-bold">PC <span>Komponenter</span></h2>
        <p class="pt-3 pb-5 fs-5 text-white text-center p-max mx-auto">
            Ramte vi ikke helt plet? Eller ønsker du at ændre
            din <span>computer</span> yderligere så har du muligheden for
            at <span>ændre</span> din computer som du ønsker!
        </p>
    </div>
    <!-- PC Komponenter Overview -->
    <div class="pb-5 pt-2">
        <div class="container w-85 shadow mx-auto rounded-3 m-2 bg-pcparts d-flex flex-column flex-md-row">
            <div class="row">
                <div class="p-md-3 mt-3 mt-md-0 d-flex align-items-center">
                    <img src="images/cpu.png" class="com_icon shadow" alt="image">
                    <div class="d-flex flex-column">
                        <p class="fs-6 ps-3 fw-bold text-white"><span>Processor:</span></p>
                        <p class="fs-6 ps-3 text-white cpu">

                        </p>
                    </div>
                </div>
                <div class="p-md-3 mt-3 mt-md-0 d-flex align-items-center">
                    <img src="images/gpu.png" class="com_icon" alt="image">
                    <div class="d-flex flex-column">
                        <p class="fs-6 ps-3 fw-bold text-white"><span>Grafikkort:</span></p>
                        <p class="fs-6 ps-3 text-white gpu"></p>
                    </div>
                </div>
                <div class="p-md-3 mt-3 mt-md-0 d-flex align-items-center">
                    <img src="images/ssd.png" class="com_icon" alt="image">
                    <div class="d-flex flex-column">
                        <p class="fs-6 ps-3 fw-bold text-white"><span>Lagring:</span></p>
                        <p class="fs-6 ps-3 text-white storage_ssd storage_capacity"></p>
                    </div>
                </div>
                <div class="p-md-3 mt-3 mt-md-0 d-flex align-items-center">
                    <img src="images/case.png" class="com_icon" alt="image">
                    <div class="d-flex flex-column">
                        <p class="fs-6 ps-3 fw-bold text-white"><span>Kabinet:</span></p>
                        <p class="fs-6 ps-3 text-white cabinet"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="p-md-3 mt-3 mt-md-0 d-flex align-items-center">
                    <img src="images/bundkort.png" class="com_icon" alt="image">
                    <div class="d-flex flex-column">
                        <p class="fs-6 ps-3 fw-bold text-white"><span>Bundkort:</span></p>
                        <p class="fs-6 ps-3 text-white motherboard"></p>
                    </div>
                </div>
                <div class="p-md-3 mt-3 mt-md-0 d-flex align-items-center">
                    <img src="images/køling.png" class="com_icon" alt="image">
                    <div class="d-flex flex-column">
                        <p class="fs-6 ps-3 fw-bold text-white"><span>Køling:</span></p>
                        <p class="fs-6 ps-3 text-white">Corsair iCUE H150i RGB ELITE</p>
                    </div>
                </div>
                <div class="p-md-3 mt-3 mt-md-0 d-flex align-items-center">
                    <img src="images/ram.png" class="com_icon" alt="image">
                    <div class="d-flex flex-column">
                        <p class="fs-6 ps-3 fw-bold text-white"><span>RAM:</span></p>
                        <p class="fs-6 ps-3 text-white ram ram_storage"></p>
                    </div>
                </div>
                <div class="p-md-3 mt-3 mb-3 mb-md-0 mt-md-0 d-flex align-items-center">
                    <img src="images/psu.png" class="com_icon" alt="image">
                    <div class="d-flex flex-column">
                        <p class="fs-6 ps-3 fw-bold text-white"><span>PSU:</span></p>
                        <p class="fs-6 ps-3 text-white psu">Corsair RM850e V2 (ATX3.0) - 850 Watt</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Prøv igen -->
<section class="shadow" style="background-color: #001D31">
    <div class="pt-5">
        <p class="pt-3 pb-3 fs-5 text-white text-center p-max mx-auto">
            Ikke helt hvad du leder efter? Det er fint! ikke alle <span>gamer</span> vinder deres første <span>spil</span>.
        </p>
        <div class="d-flex justify-content-center mb-5">
            <a class="m-2 p-3 px-4 bg-black text-white text-decoration-none shadow" href="gameselect.php">Prøv igen?</a>
        </div>
    </div>
</section>
<?php include 'includes/footer.php'?>

<script type="module">
    const buildModules = [
        "./js/builds.js",
        "./js/builds1.js",
        "./js/builds2.js",
        "./js/builds3.js",
        "./js/builds4.js",
        "./js/builds5.js"
    ];

    buildModules.forEach(modulePath => {
        import(modulePath)
            .then(BuildsModule => {
                const builds = new BuildsModule.default();
                builds.init();
            })
            .catch(error => console.error(error));
    });
</script>


<script src="js/select_case.js"></script>
<!--Script for Bootstrap-->
<script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

