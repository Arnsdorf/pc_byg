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

<form method="post" action="insert.php"enctype="multipart/form-data">
    <div style="font-size: .9rem;" class="row text-white m-0 d-flex d-flex justify-content-center p-0">

        <div class="pt-5">
            <h2 class="display-6 text-center text-white fw-normal">builds</h2>
        </div>
        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="">build_name</label>
                <input class="form-control shadow" type="text" name="" id="" placeholder="Indtast buildets navn" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="">build_class</label>
                <input class="form-control shadow" type="number" name="" id="" placeholder="Indtast klasse-tallet" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="form-label" for="">build_img</label>
                <input type="file" class="form-control shadow" id="" name="">
            </div>
        </div>
        <div class="pt-5">
            <h2 class="display-6 text-center text-white fw-normal">builds_connect_components</h2>
        </div>
        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="">build_id</label>
                <input class="form-control shadow" type="text" name="" id="" placeholder="Indtast build id" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="">component_id_1</label>
                <input class="form-control shadow" type="number" name="" id="" placeholder="Indtast component_id_1" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="">component_id_2</label>
                <input class="form-control shadow" type="number" name="" id="" placeholder="Indtast component_id_2" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="">component_id_3</label>
                <input class="form-control shadow" type="number" name="" id="" placeholder="Indtast component_id_3" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="">component_id_4</label>
                <input class="form-control shadow" type="number" name="" id="" placeholder="Indtast component_id_4" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="">component_id_5</label>
                <input class="form-control shadow" type="number" name="" id="" placeholder="Indtast component_id_5" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-5 pt-3">
            <div class="form-group">
                <label class="" for="">component_id_6</label>
                <input class="form-control shadow" type="number" name="" id="" placeholder="Indtast component_id_6" value="">
            </div>
        </div>
    </div>
</form>



<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
