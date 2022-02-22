<?php
    require_once "Warehouse.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?= $warehouse->name ?>
    </h1>
    <p><?php var_dump($warehouse->getCrate()) ?></p>
    <p><?= $warehouse->getNrOfCrates() ?></p>
</body>
</html>