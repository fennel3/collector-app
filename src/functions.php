<?php
require_once 'db_structures.php';
$pets = getPet(data());
function displayPets(array $pets): string
{
    $pet_string = '';
    foreach ($pets as $pet)
    {
        $pet_string .=
            '<div class="collection_item">' .
            '<h4>'.$pet['species'].' name:</h4>' . '<p>'.$pet['name'].'</p>' .
            '<h4>'.$pet['species'].' breed:</h4>' . '<p>'.$pet['breed'].'</p>' .
            '<em>'.'</em>' .
            '</div>  
                <img class="collection_item_image" src="' . $pet['image'] . '">';
    }
    return $pet_string;
}
