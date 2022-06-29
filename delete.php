<?php

include_once "{$_SERVER['DOCUMENT_ROOT']}/connect.php";
$sql_query = "DELETE FROM esp001; ALTER TABLE esp001 AUTO_INCREMENT 1;";

$result = mysqli_multi_query($connect, $sql_query);
