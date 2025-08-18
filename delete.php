<?php
    $pdo = require_once "connection.php";
    $id = $_GET["id"];
    echo $id;
    $sql = "DELETE FROM my_plants WHERE ID = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);

    header("Location: my-plants.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>