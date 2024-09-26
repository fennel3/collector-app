<?php
require_once 'src/functions.php';
use PHPUnit\Framework\TestCase;
class functionNameTest extends TestCase
{
    public function testPetInfoIsDisplayedCorrectly(): void
    {
        $pet = [[
            'name' => 'Rolly',
            'breed' => 'King Charles',
            'owner_id' => 1,
            'image' => 'rolly.jpeg',
            'species' => 'Dog'
        ]];

        $actual = displayPets($pet);

        $expected =
            '<div>'.
                '<div class="collection_item">' .
                '<h4>Dog name:</h4>' . '<p>Rolly</p>' .
                '<h4>Dog breed:</h4>' . '<p>King Charles</p>' .
                '<em>'.'</em>' .
                '</div>  
                    <img class="collection_item_image" src="rolly.jpeg">' .
            '</div>';

        $this->assertEquals($expected, $actual);
    }
}