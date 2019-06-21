<?php
use PHPUnit\Framework\TestCase;

include 'larrys-array.php';

// # .\vendor\bin\phpunit --bootstrap vendor\autoload.php larrys-array_test.php

class larrysArrayTest extends TestCase
{
    public function testCase(){
        $A = [
            [3, 1, 2],
            [1, 3, 4, 2],
            [1, 2, 3, 5, 4],
            [1, 6, 5, 2, 3, 4],
            [7, 11, 8, 13]
        ];
        $result = [
            'YES',
            'YES',
            'NO',
            'NO',
            'NO',
        ];

        for($i=0;$i<count($result);$i++){
            $test = larrysArray($A[$i]);
            $this->assertEquals($result[$i], $test);
        }
    }
}