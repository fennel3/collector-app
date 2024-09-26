<?php
function data(): PDO
{
    $db = new PDO(
        'mysql:host=DB;dbname=collectorapp',
        'root',
        'password'
    );
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}
function getDogs(PDO $db)
{
    $dog_query = $db->prepare("SELECT `id`, `owner_id`, `name`, `breed`, `image` FROM `pet_names` WHERE `species_id` = 2;");
    $dog_result = $dog_query->execute();

    if ($dog_result) {
        $dog_data = $dog_query->fetchAll();
        return $dog_data;
    } else return 'could not return dog data';
}
function getCats(PDO $db)
{
    $cat_query =$db->prepare("SELECT `id`, `owner_id`, `name`, `breed`, `image` FROM `pet_names` WHERE `species_id` = 1;");

    $cat_result = $cat_query->execute();
    if ($cat_result){
        $cat_data = $cat_query -> fetchAll();
        return $cat_data;
    } else return 'could not return cat data';
}
function getOwners(PDO $db)
{
    $owners_query = $db->prepare("SELECT `id`, `name` FROM `owners`;");

    $owner_result = $owners_query->execute();

    if ($owner_result){
        $owner_data = $owners_query -> fetchAll();
        return $owner_data;
    } else return 'could not return owner data';
}