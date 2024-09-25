<?php
require_once 'src/functions.php';

use PHPUnit\Framework\TestCase;

class functionNameTest extends TestCase{
    public function testDogInfoIsCorrect(): void
    {

        $dogs = [[
            'name' => 'Rolly',
            'breed' => 'King Charles',
            'owner_id' => 1
        ]];

        $actual = returnDogs($dogs);

        $expected = '<div class="collection_item">'
            . "dog name:" . '<br>' . 'Rolly' . '<br>' . '<br>' . "dog breed:" . '<br>' . 'King Charles' . '<br>' . '<br>' . 'I belong to nan' . '</div>';

        $this->assertEquals($expected, $actual);

    }

    public function testCatInfoIsCorrect(): void
    {
        $cats = [[
            'name' => 'Boggle',
            'breed' => 'Ragdoll',
            'owner_id' => 2
        ]];

        $actual = returnCats($cats);

        $expected = '<div class="collection_item">' . "cat name:" . '<br>' . 'Boggle' . '<br>' . '<br>' . "cat breed:" . '<br>' . 'Ragdoll' . '<br>' . '<br>' . 'I belong to fin' .'</div>';

        $this->assertEquals($expected, $actual);

    }
}



