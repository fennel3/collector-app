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
function insertMaker(){
    return '<form action="index.php" method="post">
                <label for="petname">Add another pet name</label>
                <input type="text" id="name" name="petname"/>

                <label for="breed">Add the breed</label>
                <input type="text" id="name" name="breed"/>

                
                
                <label for="species">Select the species</label>
                    <select id="species" name="species" required>
                        <option value="" disabled selected>Select a species</option>
                        <option value="1">Cat</option>
                        <option value="2">Dog</option>
                    </select>
                    
                    <input type="submit" value="press me">
                
                ';



}