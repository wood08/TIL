<?php
use PHPUnit\Framework\TestCase;

include 'time-conversion.php';

// # .\vendor\bin\phpunit --bootstrap vendor\autoload.php time-conversion_test.php

class timeConversion extends TestCase
{
    public function testCase(){
        $Time = [
            '07:05:45PM',
            '12:40:22AM',
            '12:45:54PM'
        ];
        $result = [
            '19:05:45',
            '00:40:22',
            '12:45:54'
        ];
        for($i=0;$i<count($result);$i++){
            $test = timeConversion($Time[$i]);
            $this->assertEquals($result[$i], $test);
        }
    }
}
