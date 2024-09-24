<?php
require_once 'src/db_structures.php';
//function that converts the dog array into its individual fields from the db_functions
function returnDogs($dog_data){

    $dog_string = '';

    foreach ($dog_data as $dog) {
        if ($dog['owner_id'] == 2) {
            $belongs = 'I belong to fin';

        } else {
            $belongs = 'I belong to nan';
        }

        $dog_string .= '<div class="collection_item">'
            . "dog name:" . '<br>' . $dog['dog_name'] . '<br>' . '<br>' . "dog breed:" . '<br>' . $dog['breed'] . '<br>' . '<br>' . $belongs . '</div>';
    } return $dog_string;

}
//function that converts the cat array into its individual fields from the db_functions
function returnCats($cat_data)
{
    $cat_string = '';
    foreach ($cat_data as $cat) {
        if ($cat['owner_id'] == 2) {
            $belongs = 'I belong to fin';

        } else {$belongs = 'I belong to nan';}
        $cat_string .=  '<div class="collection_item">' . "cat name:" . '<br>' . $cat['cat_name'] . '<br>' . '<br>' . "cat breed:" . '<br>' . $cat['breed'] . '<br>' . '<br>' .$belongs.'</div>';

    } return $cat_string;
}

//function that converts the owners array into its individual fields from the db_functions
function returnOwners($owner_data)
{
    $owner_string = '';
    {
        foreach ($owner_data as $owner)
            $owner_string .= '<div class="collection_item">' . '<br>' . $owner['owner_name'] . '</div>';
    } return $owner_string;
}