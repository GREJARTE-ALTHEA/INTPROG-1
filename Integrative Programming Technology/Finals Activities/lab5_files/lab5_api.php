<?php
header('Content-Type: application/json');

$raw = file_get_contents('php://input');
$data = json_decode($raw, true);

if (isset($data['name'])) {
    echo json_encode([
        "status" => "active",
        "message" => "Mabuhay, " . $data['name'] . "!"
    ]);

} else {
    echo json_encode([
        "status" => "error",
        "message" => "No name provided"
    ]);
}
?>
