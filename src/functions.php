<?php
require_once 'src/db_structures.php';

function pets($petdata)
{
    
}
function displayDogs(array $dog_data): string
{
    $dog_string = '';

        foreach ($dog_data as $dog)
        {
            if ($dog['owner_id'] == 2) {
                $belongs = 'I belong to Finn';
            } else {$belongs = 'I belong to Nan';}

            $dog_string .=
                '<div class="collection_item">' .
                '<h4>Dog name:</h4>' . '<p>'.$dog['name'].'</p>' .
                '<h4>Dog breed:</h4>' . '<p>'.$dog['breed'].'</p>' .
                '<em>'.$belongs.'</em>' .
                '</div>  
                <img class="collection_item_image" src="' . $dog['image'] . '">';
        }
    return $dog_string;
}
function displayCats(array $cat_data): string
{
    $cat_string = '';

        foreach ($cat_data as $cat) {
            if ($cat['owner_id'] == 2) {
                $belongs = 'I belong to Finn';
            } else {$belongs = 'I belong to Nan';}

            $cat_string .=
                '<div class="collection_item">' .
                '<h4>Cat name:</h4>' . '<p>'.$cat['name'].'</p>' .
                '<h4>Cat breed:</h4>' . '<p>'.$cat['breed'].'</p>' .
                '<em>'.$belongs.'</em>' .
                '</div>  
                   <img class="collection_item_image" src="' . $cat['image'] . '">';
            }
    return $cat_string;
}
function displayOwners(array $owner_data): string
{
    $owner_string = '';

        foreach ($owner_data as $owner) {
            $owner_string .= '<div class="collection_item">' . '<br>' . $owner['name'] . '</div>';
        }
    return $owner_string;
}