<?php 
$pdo = require "connection.php"; // will return PDO object

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST["name"];
    $description = $_POST["description"];
    $info = $_POST["info"];
    $lights = $_POST["lights"];
    $depth = $_POST["depth-of-soil"];
    $germination = $_POST["germination"];
    $maturation = $_POST["maturation"];

    $sql = "INSERT INTO plants (Plant_Name, Plant_Description, Plant_Growth_Info, Lights, Depth, Germination, Maturation)
            VALUES (:Plant_Name, :Plant_Description, :info, :Lights, :Depth, :Germination, :Maturation)";
    
    $statement = $pdo->prepare($sql);
    $statement->execute([
        ':Plant_Name' => $name,
        ':Plant_Description' => $description,
        ':info' => $info,
        ':Lights' => $lights,
        ':Depth' => $depth,
        ':Germination' => $germination,
        ':Maturation' => $maturation
    ]);

    
    echo "Insert data successfully";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/plant-data.css">
</head>
<body>
    <h1>Planty-Post</h1>
    <a href="plant-dashboard.php">Planty Database</a>
    <div id="container">
        
            <form action="planty-post.php" method="post">
                <label for="name">Name</label>
                <input type="text" name="name" id=""><br>
                <label for="description">Description</label>
                <input type="text" name="description" id=""><br>
                <label for="info">Info</label>
                <input type="text" name="info" id=""><br>
                <label for="lights">Lights</label>
                <input type="text" name="lights" id=""><br>
                <label for="depth-of-soil">Depth-of-soil</label>
                <input type="text" name="depth-of-soil" id=""><br>
                <label for="germination">Germination</label>
                <input type="text" name="germination" id=""><br>
                <label for="maturation">Maturation</label>
                <input type="text" name="maturation" id=""><br>
                <input type="submit" value="submit" id="btn">
            </form>
    </div>
   
</body>
</html>