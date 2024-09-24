<?php
//function that returns the database data
function data()
{
    $db = new PDO(
        'mysql:host=DB;dbname=collectorapp',
        'root',
        'password'

    );
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

//function that returns only the dog array from database
function getDogData($db)
{
    $dog_query = $db->prepare("SELECT * FROM `dogs`;");
    $dog_result = $dog_query->execute();

    if ($dog_result) {
        $dog_data = $dog_query->fetchAll();
        return $dog_data;
    }
}


var_dump(getDogData(data()));
//function that returns only the cat array from database
function getCatData($db)
{
    $cat_query =$db->prepare("SELECT * FROM `cats`;");

    $cat_result = $cat_query->execute();
    if ($cat_result){
        $cat_data = $cat_query -> fetchAll();
        return $cat_data;
//        echo '<pre>';
//        var_dump($cat_data);
    }
}
//function that returns only the owner array from database
function getOwnerData($db)
{
    $owners_query = $db->prepare("SELECT * FROM `owners`;");

    $owner_result = $owners_query->execute();

    if ($owner_result){
        $owner_data = $owners_query -> fetchAll();
        return $owner_data;
//        echo '<pre>';
//        var_dump($owner_data);
    }
}










