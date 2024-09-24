<?php
require_once 'src/db_structures.php';
require_once 'src/functions.php';
$db = data()
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
    echo returnDogs(getDogData($db));

    ?>

</div>

<h4>cats</h4>

<div class="item_container">
    <?php
    echo returnCats(getCatData($db));

    ?>

</div>

<h4>owners</h4>

<div class="item_container">
    <?php
    echo returnOwners(getOwnerData($db));

    ?>

</div>







</body>
</html>




