<?php 
include_once "{$_SERVER['DOCUMENT_ROOT']}/connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php 
        $sql = "SELECT * FROM esp001;";
        $result = mysqli_query($connect, $sql);
        $rows = [];
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }
            echo json_encode($rows);
        } else {
            echo "Empty";
        }
    ?>
    <script src="/script.js"></script>
</body>
</html>