<?php 
$pdo = require "connection.php"; // will return PDO object

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST["name"];
    $date = $_POST["date"];
   

    $sql = "INSERT INTO my_plants (Plant_Name, Plant_Date)
            VALUES (:Plant_Name, :Plant_Date)";
    
    $statement = $pdo->prepare($sql);
    $statement->execute([
        ':Plant_Name' => $name,
        ':Plant_Date' => $date
    ]);

    
    echo "Insert data successfully";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/add-plant.css">
</head>
<body>
    <h1>Planty-Post</h1>
    <a href="my-plants.php">My Plants</a>
    <div id="container">
        <form action="create-new-plant.php" method="post">
                <label for="name">Plant Name</label>
                <input type="text" name="name" id=""><br>
                <label for="date">Plant Date</label>
                <input type="date" name="date" id="">
                <input type="submit" value="submit">
            </form>
    </div>
    
</body>
</html>