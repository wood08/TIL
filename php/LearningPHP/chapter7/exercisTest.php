<?php
use PHPUnit\Framework\TestCase;

include 'exercis_2.php';

class actionTest extends TestCase {
    public function testWithAction1() {
        $case = '+';
        $num1 = 2;
        $num2 = 3;
        $result = action($num1, $num2, $case);
        $this->assertEquals(5, $result);
    }

    public function testWithAction2() {
        $case = '-';
        $num1 = 2;
        $num2 = 3;
        $result = action($num1, $num2, $case);
        $this->assertEquals(6, $result);
    }

    public function testWithAction3() {
        $case = '*';
        $num1 = 6;
        $num2 = 2;
        $result = action($num1, $num2, $case);
        $this->assertEquals(12, $result);
    }

    public function testWithAction4() {
        $case = '/';
        $num1 = 6;
        $num2 = 2;
        $result = action($num1, $num2, $case);
        $this->assertEquals(3, $result);
    }
}