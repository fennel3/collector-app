<?php
require_once 'src/functions.php';

use PHPUnit\Framework\TestCase;

class functionNameTest extends TestCase{
    public function testDogInfoIsCorrect(): void
    {

        $dogs = [[
            'name' => 'Rolly',
            'breed' => 'King Charles',
            'owner_id' => 1,
            'image' => 'rolly.jpeg'
        ]];

        $actual = displayDogs($dogs);

        $expected = '<div class="collection_item">' .
            '<h4>Dog name:</h4>' . '<p>Rolly</p>' .
            '<h4>Dog breed:</h4>' . '<p>King Charles</p>' .
            '<em>I belong to Nan</em>' .
            '</div>  
            <img class="collection_item_image" src="rolly.jpeg">';

        $this->assertEquals($expected, $actual);
    }
    public function testCatInfoIsCorrect(): void
    {
        $cats = [[
            'name' => 'Boggle',
            'breed' => 'Ragdoll',
            'owner_id' => 2,
            'image' => 'boggle.jpeg'
        ]];

        $actual = displayCats($cats);

        $expected = '<div class="collection_item">' .
            '<h4>Cat name:</h4>' . '<p>Boggle</p>' .
            '<h4>Cat breed:</h4>' . '<p>Ragdoll</p>' .
            '<em>I belong to Finn</em>' .
            '</div>  
            <img class="collection_item_image" src="boggle.jpeg">';
        $this->assertEquals($expected, $actual);

    }
}