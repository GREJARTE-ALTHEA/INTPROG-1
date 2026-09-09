<?php
$raw_data = file_get_contents('php://input');
$data = json_decode($raw_data, true);

if ($data) {
    echo "username= " . $data['username'] . "\n";
    echo "password= " . $data['password'] . "\n";
}
?>

