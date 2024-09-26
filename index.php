<?php
require_once 'src/db_structures.php';
require_once 'src/functions.php';
$db = data();
$pet_SQL_table = getPet($db);
$pet_info = displayPets($pet_SQL_table);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
    <body>
        <h1>Pet collection</h1>
        <p>A collection of pets who are owned by my gran or myself!</p>
        <h3>Pets</h3>

        <div class="item_container">
            <?php
                echo  $pet_info;
            ?>
        </div>

    </body>
</html>