<?php

require_once 'src/functions.php';

use PHPUnit\Framework\TestCase;


class functionMalformedTest extends TestCase{
    public function testCatsMalformedInputs(): void
    {

        $this->expectException(TypeError::class);


        returnCats(123);

    }

    public function testDogsMalformedInputs(): void
    {

        $this->expectException(TypeError::class);


        returnDogs(123);

    }

}