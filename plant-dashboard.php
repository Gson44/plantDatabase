<?php
    $pdo = require_once "connection.php";
    $sql = "SELECT * FROM plants";
    $stmt = $pdo->query($sql);
    $plants = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/dashboard.css">
</head>
<body>
    <h1>Planty Dashboard</h1>
    <a href="planty-post.php">Add new Plant Data</a>
    <a href="my-plants.php">My Plants</a>

    <div id="dashboard">
       
            <?php foreach($plants as $plant) { ?>
                 <div id="card">
                    <h3>Name: <span class="plant_data"><?= $plant["Plant_Name"] ?></span></h3>
                    <h3>Description: <span class="plant_data"><?= $plant["Plant_Description"] ?></span></h3>
                    <h3>Light Source: <span class="plant_data"><?= $plant["Lights"] ?></span></h3>
                    <h3>Depth of Soil: <span class="plant_data"><?= $plant["Depth"] ?></span></h3>
                    <h3>Germination Time: <span class="plant_data"><?= $plant["Germination"] ?></span></h3>
                    <h3>Maturation Time: <span class="plant_data"><?= $plant["Maturation"] ?></span></h3>
                    <a href="delete.php?id=<?php htmlspecialchars($plant["ID"]) ?>">Delete Plant</a>
                
                </div>
                    <?php }?>
        
    </div>
</body>
</html>