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


if (isset($_POST['petname'], $_POST['breed'], $_POST['species'])){
    $petname = $_POST['petname'];
    $petbreed = $_POST['breed'];
    $petspecies = $_POST['species'];


    getUserInput(data(), $petname, $petbreed, $petspecies);
    echo 'you have added ' . $petname . ' to the database';
}



function getUserInput($db, $petname, $petbreed, $petspecies)
{
    $cat_query =$db->prepare("INSERT INTO `pet_names` (`name`, `breed`, `species_id`) VALUES (:petname, :petbreed, :petspecies);");

    $cat_query->execute
    ([
        'petname' => $petname,
        'petbreed' => $petbreed,
        'petspecies' => $petspecies

    ]);
}

