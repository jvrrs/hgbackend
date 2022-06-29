<?php

include_once "{$_SERVER['DOCUMENT_ROOT']}/connect.php";
$update_query = "INSERT INTO ".$_GET['id']." 
(utc, temp, hum, rainfall, rainflag) 
VALUES 
(
    '".$_GET['utc']."', 
    '".$_GET['temp']."',
    '".$_GET['hum']."',
    '".$_GET['rainfall']."',
    '".$_GET['rainflag']."'
);";

$result = mysqli_query($connect, $update_query);
$file = fopen("result.txt", "w");
fwrite($file, $result);
fclose($file);

echo 'done';

?>