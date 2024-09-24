




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <?php
    require_once 'db_structures.php';
    $db = data();
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $dog_query = $db->prepare("SELECT * FROM `dogs`;");

    $dog_result = $dog_query->execute();

    if ($dog_result){
        $dog_data = $dog_query -> fetchAll();
//        echo '<pre>';
//        var_dump($dog_data);
    }

    $cat_query =$db->prepare("SELECT * FROM `cats`;");

    $cat_result = $cat_query->execute();
    if ($cat_result){
        $cat_data = $cat_query -> fetchAll();
//        echo '<pre>';
//        var_dump($cat_data);
    }

    $owners_query = $db->prepare("SELECT * FROM `owners`;");

    $owner_result = $owners_query->execute();

    if ($owner_result){
        $owner_data = $owners_query -> fetchAll();
//        echo '<pre>';
//        var_dump($owner_data);
    }


    ?>
    <title>Document</title>


</head>
<body>

<h1>Pet collection</h1>

<h4>dogs</h4>


<div class="item_container">
    <?php
    foreach ($dog_data as $dog) {
        if ($dog['owner_id'] == 2) {
            $belongs = 'I belong to fin';

        } else {
            $belongs = 'I belong to nan';
        }

        echo '<div class="collection_item">'
            . "dog name:" . '<br>' . $dog['dog_name'] . '<br>' . '<br>' . "dog breed:" . '<br>' . $dog['breed'] . '<br>' . '<br>' . $belongs . '</div>';
    }


    '<pre>';

    ?>

</div>

<h4>cats</h4>

<div class="item_container">
    <?php
    foreach ($cat_data as $cat) {
        if ($cat['owner_id'] == 2) {
            $belongs = 'I belong to fin';

        } else {$belongs = 'I belong to nan';}
        echo '<div class="collection_item">' . "cat name:" . '<br>' . $cat['cat_name'] . '<br>' . '<br>' . "cat breed:" . '<br>' . $cat['breed'] . '<br>' . '<br>' .$belongs.'</div>';
    }

    '<pre>';

    ?>

</div>

<h4>owners</h4>

<div class="item_container">
    <?php
    foreach ($owner_data as $owner)
        echo '<div class="collection_item">' . '<br>' . $owner['owner_name'] . '</div>';

    '<pre>';

    ?>

</div>







</body>
</html>




