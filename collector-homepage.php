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
    <?php $dog_info = returnDogs(getDogData($db));
    echo  $dog_info;

    ?>

</div>

<h4>cats</h4>

<div class="item_container">
    <?php $cat_info = returnCats(getCatData($db));
    echo $cat_info;

    ?>

</div>

<h4>owners</h4>

<div class="item_container">
    <?php $owner_info = returnOwners(getOwnerData($db));
    echo $owner_info;

    ?>

</div>







</body>
</html>




