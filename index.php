<?php
require_once 'src/db_structures.php';
require_once 'src/functions.php';
$db = data();
$dog_SQL_table = getDogs($db);
$cat_SQL_table = getCats($db);
$owner_SQL_table = getOwners($db);
$dog_info = displayDogs($dog_SQL_table);
$cat_info = displayCats($cat_SQL_table);
$owner_info = displayOwners($owner_SQL_table);


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

        <h3>dogs</h3>

        <div class="item_container">
            <?php
                echo  $dog_info;
            ?>
        </div>

        <h3>cats</h3>

        <div class="item_container">
            <?php
                echo $cat_info;
            ?>
        </div>

        <h4>owners</h4>

        <div class="item_container">
            <?php
                echo $owner_info;
            ?>
        </div>

    </body>
</html>