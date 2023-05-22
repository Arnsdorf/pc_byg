<?php
require "settings/init.php";

$data = json_decode(file_get_contents('php://input'), true);

header("Content-Type: application/json; charset=utf-8");

if (isset($data["password"]) && $data["password"] == "CSS") {
    if (empty($data["id"])) {
        header("HTTP/1.1 400 Bad Request");
        $error["errorMessage"] = "Forkert forespørgsel";
        echo json_encode($error);
        exit;
    }

    // Prepare the SQL query to select components by ID
    $sql = "SELECT component_name FROM components WHERE id = :id";

    // Bind the parameter
    $bind = [":id" => $data["id"]];

    // Execute the SQL query
    $components = $db->sql($sql, $bind);

    header("HTTP/1.1 200 OK");
    echo json_encode($components);
} else {
    header("HTTP/1.1 401 Unauthorized");
    $error["errorMessage"] = "Kodeord mislykkedes";
    echo json_encode($error);
}
?>

