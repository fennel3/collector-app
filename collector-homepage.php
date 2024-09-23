<?php
require_once 'db_structures.php';
$db = data();
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$dog_query = $db->prepare("SELECT * FROM `dogs`");

$dog_result = $dog_query->execute();

if ($dog_result){
    $dog_data = $dog_query -> fetchAll();
    echo '<pre>';
    var_dump($dog_data);}

$cat_query =$db->prepare("SELECT * FROM `cats`");

$cat_result = $cat_query->execute();
if ($cat_result){
    $cat_data = $cat_query -> fetchAll();
    echo '<pre>';
    var_dump($cat_data);}

$owners_query = $db->prepare("SELECT * FROM `owners`");

$owner_result = $owners_query->execute();

if ($owner_result){
    $owner_data = $owners_query -> fetchAll();
    echo '<pre>';
    var_dump($owner_data);}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>
<body>

<h1>Pet collection</h1>

<h4>dogs</h4>


<div style="width: 100%; height: 20%; display: flex">
    <?php
    foreach ($dog_data as $dog)
        echo '<div style="width: 100px; height: 100px; display: flex; justify-content: center;  background-color: antiquewhite; padding: 10px; margin: 10px">' . $dog['dog_name'] . '</div>';

    '<pre>';

    ?>

</div>

<h4>cats</h4>

<div style="width: 100%; height: 20%; display: flex">
    <?php
    foreach ($cat_data as $cat)
        echo '<div style="width: 100px; height: 100px; display: flex; justify-content: center;  background-color: antiquewhite; padding: 10px; margin: 10px">' . $cat['cat_name'] . '</div>';

    '<pre>';

    ?>

</div>







</body>
</html>




