<?php
require_once 'src/functions.php';
// require in the file youre testing.



//get access to php unit.

use PHPUnit\Framework\TestCase;

// give our adder test all the features that our testcase has.
class functionTest extends TestCase{
    //Write your test here
    //test method must start with test
    //make test names descriptive
    public function testDogInfoIsCorrect(): void
    {
        //make some inputs
        $dogs = [[
            'dog_name' => 'rolly',
            'breed' => 'laza',
            'owner_id' => 1
        ]];

        $actual = returnDogs($dogs);

        //define the expected result


        // what do we acc get
        $expected = '<div class="collection_item">'
            . "dog name:" . '<br>' . 'rolly' . '<br>' . '<br>' . "dog breed:" . '<br>' . 'laza' . '<br>' . '<br>' . 'I belong to nan' . '</div>';

        //compare actual with expected.
        $this->assertEquals($expected, $actual);

    }

    public function testCatInfoIsCorrect(): void
    {
        //make some inputs
        $cats = [[
            'cat_name' => 'boggle',
            'breed' => 'ragdoll',
            'owner_id' => 2
        ]];

        $actual = returnCats($cats);

        //define the expected result


        // what do we acc get
        $expected = '<div class="collection_item">' . "cat name:" . '<br>' . 'boggle' . '<br>' . '<br>' . "cat breed:" . '<br>' . 'ragdoll' . '<br>' . '<br>' . 'I belong to fin' .'</div>';

        //compare actual with expected.
        $this->assertEquals($expected, $actual);

    }


    public function testAdderMalformedInputs(): void
    {

        $this->expectException(TypeError::class);

        // Trigger the TypeError by passing a non-array type (e.g., an integer)
        returnCats(123);

    }
}
