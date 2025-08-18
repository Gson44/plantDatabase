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
    <title>Document</title>
    <link rel="stylesheet" href="style/my-plants.css">
</head>
<body>
    <h1>My Plants</h1>
    <a href="create-new-plant.php">Add new Plant</a>
    <a href="plant-dashboard.php">Planty Database</a>
            <table>
                    <tr>
                        <th>ID</th>
                        <th>Plant Name</th>
                        <th>Date Planted</th>
                        <th>Action</th>
                    </tr>
                <?php foreach($plants as $plant) { ?>
                
                    <tr>
                        <td><?= $plant["ID"] ?></td>
                        <td><?= $plant["Plant_Name"] ?></td>
                        <td><?= $plant["Plant_Date"] ?></td>
                        <td><a href="delete.php?id=<?= $plant["ID"] ?>">Delete</a></td>
                    </tr>
  
                <?php }?>
            </table>
     
</body>
</html>