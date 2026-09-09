<?php
// GREJARTE BSIT-3J
header('Content-Type: application/json');

$user_profile = array('id' => 3, 'name' => 'Althea', 'email' => 'grejartealtheakyle_bsit@plmun.edu.ph','status' => 'active');

echo json_encode($user_profile);
?>
