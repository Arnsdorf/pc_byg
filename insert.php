<?php

require "settings/init.php";

if(!empty($_POST["data"])) {
    // Gem POST data i variabel
    $data = $_POST["data"];

    // Gem uploadet fil i variabel, eller sæt den til null hvis der ikke blev uploadet en fil
    $file = $_FILES;
    $buildImg = (!empty($file["build_img"]["tmp_name"])) ? $file["build_img"]["name"] : null;

    // Hvis der blev uploadet en fil, så gem den i "uploads" mappen på serveren
    if ($buildImg !== null) {
        move_uploaded_file($file["build_img"]["tmp_name"], "uploads/" . basename($file["build_img"]["name"]));
    }

    // Opret SQL queries
    $sql1 = "INSERT INTO builds (build_name, build_class, build_img) VALUES (:build_name, :build_class, :build_img)";
    $sql2 = "INSERT INTO builds_connect_components (build_id, component_id_1, component_id_2, component_id_3, component_id_4, component_id_5, component_id_6) VALUES (:build_id, :component_id_1, :component_id_2, :component_id_3, :component_id_4, :component_id_5, :component_id_6)";
    $sql3 = "INSERT INTO components (component_name, ram_capacity, price, typeId, storage_capacity, category) VALUES ( :component_name, :ram_capacity, :price, :typeId, :storage_capacity, :category)";
    $sql4 = "INSERT INTO type (type_name) VALUES ( :type_name)";

    // Binder værdier til placeholders i queries
    $bind1 = [
        ":build_name" => $data["build_name"],
        ":build_class" => $data["build_class"],
        ":build_img" => $buildImg
    ];

    $bind2 = [
        ":build_id" => $data["build_id"],
        ":component_id_1" => $data["component_id_1"],
        ":component_id_2" => $data["component_id_2"],
        ":component_id_3" => $data["component_id_3"],
        ":component_id_4" => $data["component_id_4"],
        ":component_id_5" => $data["component_id_5"],
        ":component_id_6" => $data["component_id_6"],
    ];

    $bind3 = [
        ":component_name" => $data["component_name"],
        ":ram_capacity" => $data["ram_capacity"],
        ":price" => $data["price"],
        ":typeId" => $data["typeId"],
        ":storage_capacity" => $data["storage_capacity"],
        ":category" => $data["category"],
    ];

    $bind4 = [
        ":type_name" => $data["type_name"],
    ];

    // Udfør SQL queries
    $db->sql($sql1, $bind1, false);
    $db->sql($sql2, $bind2, false);
    $db->sql($sql3, $bind3, false);
    $db->sql($sql4, $bind4, false);


    // Vis besked om at data er gemt i databasen, samt en knap til at gå tilbage
    echo "<body style='font-size: 2rem; background-color: #353758;'></body> 
        <h1 style='color: white; font-family: montserrat, sans-serif; display: flex; justify-content: center; padding: 50px;' id='echo_besked'>Svar er indsat i databasen✅</h1> 
        <a style='text-decoration: underline; color: white; font-family: montserrat, sans-serif; display: flex; justify-content: center; font-weight: bold;' href='insert.php'>Gå tilbage</a>
        ";

    exit;


}
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Indsæt til databasen</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<!-- Indtastning af data -->
<form method="post" action="insert.php" enctype="multipart/form-data" class="d-flex justify-content-center align-items-center">
    <div style="font-size: .9rem;" class="row text-white m-0 d-flex d-flex justify-content-center p-0">
        <!-- builds -->
        <div class="pt-5">
            <h2 class="display-6 text-center text-white fw-normal">builds</h2>
        </div>
        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="build_name">build_name</label>
                <input class="form-control shadow" type="text" name="data[build_name]" id="build_name" placeholder="Indtast buildets navn" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="build_class">build_class</label>
                <input class="form-control shadow" type="number" name="data[build_class]" id="build_class" placeholder="Indtast klasse-tallet" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="form-label" for="">build_img</label>
                <input type="file" class="form-control shadow" id="" name="data[build_img]">
            </div>
        </div>
        <!-- builds_connect_components -->
        <div class="pt-5">
            <h2 class="display-6 text-center text-white fw-normal">builds_connect_components</h2>
        </div>
        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="build_id">build_id</label>
                <input class="form-control shadow" type="text" name="data[build_id]" id="build_id" placeholder="Indtast build id" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="component_id_1">component_id_1</label>
                <input class="form-control shadow" type="number" name="data[component_id_1]" id="component_id_1" placeholder="Indtast component_id_1" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="component_id_2">component_id_2</label>
                <input class="form-control shadow" type="number" name="data[component_id_2]" id="component_id_2" placeholder="Indtast component_id_2" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="component_id_3">component_id_3</label>
                <input class="form-control shadow" type="number" name="data[component_id_3]" id="component_id_3" placeholder="Indtast component_id_3" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="component_id_4">component_id_4</label>
                <input class="form-control shadow" type="number" name="data[component_id_4]" id="component_id_4" placeholder="Indtast component_id_4" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="component_id_5">component_id_5</label>
                <input class="form-control shadow" type="number" name="data[component_id_5]" id="component_id_5" placeholder="Indtast component_id_5" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="component_id_6">component_id_6</label>
                <input class="form-control shadow" type="number" name="data[component_id_6]" id="component_id_6" placeholder="Indtast component_id_6" value="">
            </div>
        </div>

        <!-- components -->
        <div class="pt-5">
            <h2 class="display-6 text-center text-white fw-normal">components</h2>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="component_name">component_name</label>
                <input class="form-control shadow" type="text" name="data[component_name]" id="component_name" placeholder="Indtast component_name" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="typeId">typeId</label>
                <input class="form-control shadow" type="number" name="data[typeId]" id="typeId" placeholder="Indtast typeId" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="price">price</label>
                <input class="form-control shadow" type="number" name="data[price]" id="price" placeholder="Indtast price" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="category">category</label>
                <input class="form-control shadow" type="text" name="data[category]" id="category" placeholder="Indtast category" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="ram_capacity">ram_capacity</label>
                <input class="form-control shadow" type="text" name="data[ram_capacity]" id="ram_capacity" placeholder="Indtast ram_capacity" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="storage_capacity">storage_capacity</label>
                <input class="form-control shadow" type="text" name="data[storage_capacity]" id="storage_capacity" placeholder="Indtast storage_capacity" value="">
            </div>
        </div>

        <!-- type -->
        <div class="pt-5">
            <h2 class="display-6 text-center text-white fw-normal">type</h2>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="type_name">navn på komponent</label>
                <input class="form-control shadow" type="text" name="data[type_name]" id="type_name" placeholder="Indtast navn" value="">
            </div>
        </div>
        <div class="col-12 col-md-6 offset-md-6 mb-5 d-flex justify-content-center">
            <button class="form-control" type="submit" id="btnSubmit">Indsend data</button>
        </div>
    </div>
</form>



<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
