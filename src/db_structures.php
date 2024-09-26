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
function getPet(PDO $db)
{
    $cat_query =$db->prepare("SELECT `pet_names`.`id`, `name`, `breed`, `image`, `species`.`species` FROM `pet_names` JOIN `species` ON `pet_names`.`species_id` = `species`.`id`;");
    $pet_result = $cat_query->execute();

    if ($pet_result){
        $pet_data = $cat_query -> fetchAll();
        return $pet_data;
    } else return 'could not return cat data';
}