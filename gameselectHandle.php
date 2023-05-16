<?php
require "settings/init.php";

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data["password"]) && $data["password"] == "CSS"){
    $buildId = $_GET['buildId'];
    $sql = "SELECT * FROM builds WHERE build_id = $buildId";
    $bind = [];

    $builds = $db->sql($sql, $bind);
    header("HTTP/1.1 200 OK");

} else{
    header("HTTP/1.1 401 Unauthorized");
    $error["errorMessage"] = "Hov Skipper, kodeordet er vidst nok forkert, kammerat";

    echo json_encode($error);
}
?>