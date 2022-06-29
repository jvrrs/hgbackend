<?php
global $connect;

$db_server = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "hg_db";

// $db_server = "127.0.0.1";
// $db_username = "u108700280_raghav";
// $db_password = "AnikandRaghav123";
// $db_name = "u108700280_chtizo_db";

$connect = mysqli_connect($db_server, $db_username, $db_password, $db_name);