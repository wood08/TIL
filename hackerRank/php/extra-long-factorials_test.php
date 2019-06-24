<?php
use PHPUnit\Framework\TestCase;

include 'extra-long-factorials.php';

// # .\vendor\bin\phpunit --bootstrap vendor\autoload.php extra-long-factorials_test.php

class isValidTest extends TestCase
{
    public function testCase(){
        $A = [
            '25',
            '45'
        ];
        $result = [
            '15511210043330985984000000',
            '119622220865480194561963161495657715064383733760000000000'
        ];

        for($i=0;$i<count($result);$i++){
            $test = extraLongFactorials($A[$i]);
            $this->assertEquals($result[$i], $test);
        }
    }
}