<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Support</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Favicon -->
    <link rel="icon" href="images/buildmate_favicon_pink.svg">

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

    <!--NAVBAR-->
    <?php include 'includes/navbar.php'?>

    <!--Main Text-->
    <div class="container mt-5">

        <h2>Har du oplevede et problem med din PC?</h2>
        <p>Du kan udfylde en support-ticket, og så svarer vi hurtigst muligt. Alternativt kan du kontakte os direkte.</p>

    </div>

    <br>

    <!--Support Form & Contact Info-->
    <div class="container d-flex flex-column flex-md-row justify-content-between">

        <!--Support Form-->
        <div class="">

            <form action="">
                <label for="name">Navn:</label><br>
                <input type="text" id="name" name="name" value=""><br><br>

                <label for="email">E-Mail:</label><br>
                <input type="text" id="email" name="email" value=""><br><br>

                <label for="email"> Forklar dit problem: <br>
                    <textarea rows = "5" cols = "50" name = "description"></textarea>
                </label><br><br>

                <input type="submit" value="Submit">
            </form>

        </div>

        <!--Contact Info-->
        <div class="w-25 bg-dark text-center">

            <br>

            <i class="bi bi-envelope-fill contact_icon"></i>
            <p>support@buildmate.dk</p>

            <br>

            <i class="bi bi-telephone-fill contact_icon"></i>
            <p>+45 12 34 56 78</p>

            <br>

            <i class="bi bi-clock-fill contact_icon"></i>
            <p>MAN-FRE: kl. 9-17</p>

            <br>

        </div>

    </div>

    <!--FOOTER-->
    <?php include 'includes/footer.php'?>

    <!--Script for Bootstrap-->
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
