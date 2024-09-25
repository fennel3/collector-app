<?php
require_once 'src/db_structures.php';
//function that converts the dogs array into its individual fields from the db_functions
function returnDogs(array $dog_data): string
{

    $dog_string = '';

    foreach ($dog_data as $dog) {
        if ($dog['owner_id'] == 2) {
            $belongs = 'I belong to fin';

        } else {
            $belongs = 'I belong to nan';
        }
        $dog_string .=
        '<div class="collection_item">' .
        'dog name:' . '<br>' . $dog['name'] . '<br>' . '<br>' .
        'dog breed:' . '<br>' . $dog['breed'] . '<br>' . '<br>' .
        $belongs .
        '</div>  
            <img class="collection_item_image" src="' . $dog['image'] . '">';
    } return $dog_string;

}
//function that converts the cat array into its individual fields from the db_functions
function returnCats(array $cat_data): string
{
    $cat_string = '';
    foreach ($cat_data as $cat) {
        if ($cat['owner_id'] == 2) {
            $belongs = 'I belong to fin';

        } else {$belongs = 'I belong to nan';}
        $cat_string .=
            '<div class="collection_item">' .
            'cat name:' . '<br>' . $cat['name'] . '<br>' . '<br>' .
            'cat breed:' . '<br>' . $cat['breed'] . '<br>' . '<br>' .
            $belongs .
            '</div>  
            <img class="collection_item_image" src="' . $cat['image'] . '">';


    } return $cat_string;
}

//function that converts the owners array into its individual fields from the db_functions
function returnOwners(array $owner_data): string
{
    $owner_string = '';
    {
        foreach ($owner_data as $owner)
            $owner_string .= '<div class="collection_item">' . '<br>' . $owner['name'] . '</div>';
    } return $owner_string;
}