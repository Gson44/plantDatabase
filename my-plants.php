<?php 
$pdo = require "connection.php"; // will return PDO object

    $sql = "SELECT * FROM my_plants";
    $stmt = $pdo->query($sql);
    $plants = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>Document</title>
    <link rel="stylesheet" href="style/my-plants.css">
    
</head>
<body>
    <h1>My Plants</h1>
    <a href="create-new-plant.php">Add new Plant</a>
    <a href="plant-dashboard.php">Planty Database</a>
    <div class="plant_table">
        <div class="item item-1">
            <h2 class="sub-item">IDs</h2>
            <h2 class="sub-item"> Plant Name</h2>
            <h2 class="sub-item">Date Plated</h2>
            <h2 class="sub-item">Action</h2>
        </div>
         <?php foreach($plants as $plant) { ?>
            <div class="item item-2">
                <h3 class="sub-item"><?= $plant["ID"] ?></h3>
                <h3 class="sub-item"><?= $plant["Plant_Name"] ?></h3>
                <h3 class="sub-item"><?= $plant["Plant_Date"] ?></h3>
                <h3 class="sub-item"><a href="delete.php?id=<?= $plant["ID"] ?>">Delete</a></h3>
            </div>
             <?php }?>
    </div>

            
     
</body>
</html>