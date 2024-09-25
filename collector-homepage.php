<?php
require_once 'src/db_structures.php';
require_once 'src/functions.php';
$db = data();
$dog_SQL_table = getDogData($db);
$cat_SQL_table = getCatData($db);
$owner_SQL_table = getOwnerData($db);
$dog_info = returnDogs($dog_SQL_table);
$cat_info = returnCats($cat_SQL_table);
$owner_info = returnOwners($owner_SQL_table);

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
        <h4>dogs</h4>

        <div class="item_container">
        <?php
        echo  $dog_info;
        ?>
        </div>

        <h4>cats</h4>

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