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

<!---------- Frontpage ------------->
<div class="image_box position-relative shadow">
    <img class="image_front" src="images/gaming-room-designs-blurr.jpg" alt="frontpage">

    <!--NAVBAR-->
    <?php include 'includes/navbar.php'?>

    <!-- Front-text -->
    <div class="frontpage-text position-relative justify-content-center d-flex ">
        <h1 class="front-font display-6">Spil efter dine:
            <span id="typewriter-text"></span></h1>
    </div>

    <div class="paragraph position-relative justify-content-center d-flex ">
        <h5 class="paragraph-font text-center">Byg en computer der passer dine behov <br> med BuildMate</h5>
    </div>
    <!-- Front-text-end -->


    <!-- Forside knap -->
    <div class="button_box d-flex position-relative justify-content-center">
    <a class="text-decoration-none" href="#"><div class="button rounded-2 justify-content-center"><span class="justify-content-center d-flex p-2 knap-text position-relative">Byg en pc</span></div></a>
    </div>
    <!-- Forside knap-end --><
    <div class="d-flex justify-content-center scroll_icon position-relative ">
        <div class='scrolldown'>
            <div class="chevrons ">
                <div class='chevrondown'></div>
                <div class='chevrondown'></div>
            </div>
        </div>
    </div>
    <!-- Social-icon-front -->
    <div class="icon_box position-relative justify-content-center justify-content-md-start d-flex">
        <a class="text-decoration-none text-white " href="#" target="_blank"> <i class="bi bi-facebook ps-md-3 icon_front"></i></a>
        <a class="text-decoration-none text-white " href="#" target="_blank">  <i class="bi bi-instagram ps-md-2 px-2 px-md-0 icon_front"></i></a>
        <a class="text-decoration-none text-white " href="#" target="_blank" >  <i class="bi bi-linkedin ps-md-2 icon_front"></i></a>
    </div>
    <!-- Social-icon-front-end -->

    <!-- Scroll animation -->

    <!-- Scroll animation-end -->
</div>

<!---------- Frontpage-end ------------->
<!-----------content-------------------->
<div class="john1 m-0 p-0">

    <div class="text_body_font_box ">
        <div class="header-font-box justify-content-center d-flex"><h1 class="header-font text-center">Træt af at computer-bygning kun er <br> for erfarne brugere?</h1></div>
        <div class="soft-header-box justify-content-center d-flex pt-4 text-center"><h3 class="soft-header-font">Introducerer <span class="">en bedre måde at bygge på</span>!</h3></div>
    </div>

    <div class="card_box mt-5">
        <div class="row gap-5 p-0 m-0 justify-content-center ">

            <div class="card_front shadow col-10 col-md-5 col-lg-4 col-xl-3 mt-3 ">
                <div class="justify-content-center d-flex pt-5"> <img class="card-image text-center" src="images/desktop-solid.png"></div>
                <div class="card-rubrik"><h3 class=" ps-2 pe-2 pt-5 rubrik1 text-center">Få en forståelse for din PC</h3></div>
                <div class="justify-content-center d-flex"><h6 class="card-text1 text-white pt-4 ps-4 pe-4 pt-lg-5 pb-5">Hos BuildMate tilbyder vi en nemmere måde at bygge din drømme-PC på, samtidig med at man får en bedre forståelse for den maskine man har samlet.</h6></div>
            </div>

            <div class="card_front shadow col-10 col-md-5 col-lg-4 col-xl-3 mt-3 mb-3">
                <div class="justify-content-center d-flex pt-5"> <img class="card-image text-center" src="images/keyboard-solid.png"></div>
                <div class="card-rubrik"><h3 class="pt-4 rubrik2 text-center">Kom direkte tind i PC-bygning</h3></div>
                <div class="justify-content-center d-flex"><h6 class="card-text1 text-white pt-4 ps-4 pe-4 pt-lg-5 pb-5">Med vores PC-bygningsguide kan du hurtig kom i gang med at lave en PC som passer til din stil og behov, uden at rode rundt i en jungle af forvirrende information.</h6></div>
            </div>

            <div class="card_front shadow col-10 col-md-5 col-lg-4 col-xl-3 mb-3 mt-md-3">
                <div class="justify-content-center d-flex pt-5 "> <img class="card-image text-center" src="images/gamepad-solid.png"></div>
                <div class="card-rubrik"><h3 class="pt-4 rubrik3 text-center">Dine spil, dine behov</h3></div>
                <div class="justify-content-center d-flex"><h6 class="card-text1 text-white pt-4 ps-4 pe-4 pt-lg-5 pb-5">BuildMate computere giver dig friheden til at udforske gamingverden, uden at blive hæmmede af en computer som ikke passer til hvad man har brug for.</h6></div>
            </div>
            <!-----button1----->
            <div class="button_box1 d-flex position-relative justify-content-center pb-5">
                <a class="text-decoration-none" href="#"><div class="button1 rounded-2 justify-content-center"><span class="justify-content-center d-flex p-2 knap-text position-relative">Byg en pc</span></div></a>
            </div>
            <!-----button1-end----->
        </div>
    </div>

</div>

<div class="john">
    <div class="row p-0 m-0">

    </div>
</div>
<!--Instabox-->

<div class="instaheader pt-2 pt-md-0">
    <div class="row j d-flex p-0 m-0 ">

            <div><h1 class="instafont text-center pt-5">Følg os på <a class="tag text-decoration-none" href="#" target="#"><span class="tag">@BuildMate</span></a></h1></div>

            <div class="icon_box1 icons position-relative justify-content-center d-flex pt-4">
                <a class="text-decoration-none text-white " href="#" target="_blank"> <i class="bi bi-facebook ps-md-3 icon_front1"></i></a>
                <a class="text-decoration-none text-white " href="#" target="_blank"> <i class="bi bi-instagram ps-md-3 px-3 px-md-0 icon_front1"></i></a>
                <a class="text-decoration-none text-white " href="#" target="_blank"> <i class="bi bi-linkedin ps-md-3 icon_front1"></i></a>
            </div>

    </div>
</div>

<div class="insta-container shadow ">
    <div class="row m-0 p-0">

        <div class="instabox col-6 col-lg-2 col-md-3 p-0"><img class="instaimage" src="insta/insta_1.webp"><div class="mask">hej</div></div>
        <div class="instabox col-6 col-lg-2 col-md-3 p-0"><img class="instaimage" src="insta/insta_2.webp"></div>
        <div class="instabox col-6 col-lg-2 col-md-3 p-0"><img class="instaimage" src="insta/insta_3.webp"></div>
        <div class="instabox col-6 col-lg-2 col-md-3 p-0"><img class="instaimage" src="insta/insta_4.webp"></div>

        <div class="instabox col-6 col-lg-2 col-md-3 p-0"><img class="instaimage" src="insta/insta_5.webp"></div>
        <div class="instabox col-6 col-lg-2 col-md-3 p-0"><img class="instaimage" src="insta/insta_6.webp"></div>
        <div class="instabox col-6 col-lg-2 col-md-3 p-0"><img class="instaimage" src="insta/insta_7.webp"></div>
        <div class="instabox col-6 col-lg-2 col-md-3 p-0"><img class="instaimage" src="insta/insta_8.webp"></div>

        <div class="instabox col-6 col-lg-2 col-md-3 p-0"><img class="instaimage" src="insta/insta_9.webp"></div>
        <div class="instabox col-6 col-lg-2 col-md-3 p-0"><img class="instaimage" src="insta/insta_10.webp"></div>
        <div class="instabox col-6 col-lg-2 col-md-3 p-0"><img class="instaimage" src="insta/insta_11.webp"></div>
        <div class="instabox col-6 col-lg-2 col-md-3 p-0"><img class="instaimage" src="insta/insta_12.webp"></div>

    </div>
</div>
<!--Instabox-end-->
<!--content-end-->





<script src="js/forside.js"></script>
</body>
</html>
