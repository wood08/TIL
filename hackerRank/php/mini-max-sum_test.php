<?php
use PHPUnit\Framework\TestCase;

include 'mini-max-sum.php';

// # .\vendor\bin\phpunit --bootstrap vendor\autoload.php mini-max-sum_test.php

class miniMaxSumTest extends TestCase
{
    public function testCase(){
        $A = [
            [1, 3, 5, 7, 9],
            [1, 2, 3, 4, 5],
        ];
        $result = [
            [16, 24],
            [10, 14],
        ];

        for($i=0;$i<count($result);$i++){
            $test = miniMaxSum($A[$i]);
            $this->assertEquals($result[$i], $test);
        }
    }
}