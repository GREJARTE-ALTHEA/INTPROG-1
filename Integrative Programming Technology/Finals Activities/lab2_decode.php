<?php
// GREJARTE BSIT-3J
$json ='{"name":"Althea","age":20,"email":"grejartealtheakyle_bsit@plmun.edu.ph"}';

$obj = json_decode($json);

$arr = json_decode($json, true);

echo "Object: " . $obj->name . "<br>";
echo "Array: " . $arr['email'];
?>
