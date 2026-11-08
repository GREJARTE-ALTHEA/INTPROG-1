
<?php
// Declare a JSON string
$json = '{"name":"Althea","age":20,"email":"grejartealtheakyle_bsit@plmun.edu.ph"}';

// Convert JSON string into a PHP object
$object = json_decode($json);

// Convert JSON string into a PHP associative array
$array = json_decode($json, true);
?>
