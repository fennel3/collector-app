<?php
require_once 'db_structures.php';
$db = data();
$pets = getPet(data());
function displayPets(array $pets): string
{
    $pet_string = '';
    foreach ($pets as $pet)
    {
        $pet_string .=
            '<div>'.
                '<div class="collection_item">' .
                '<h4>'.$pet['species'].' name:</h4>' . '<p>'.$pet['name'].'</p>' .
                '<h4>'.$pet['species'].' breed:</h4>' . '<p>'.$pet['breed'].'</p>' .
                '<em>'.'</em>' .
                '</div>  
                    <img class="collection_item_image" src="' . $pet['image'] . '">' .
            '</div>';
    }
    return $pet_string;
}

$addition = $_POST['petname'];
echo ($addition);

"INSERT INTO `pet_names` (`name`) values ($addition);";




