<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    checkValue();
} else {
    showForm();
}

function showForm () {
    require "form.php";
}

function checkValue () {
    $num1 = trim($_POST['num1'] ?? '');
    $num2 = trim($_POST['num2'] ?? '');
    $case = $_POST['case'];
    if (!strlen($num1) || !strlen($num2)) {
        print_r("숫자를 입력해주세요.");
        return;
    }
    $result = action($num1, $num2, $case);
    print_r("$num1 $case $num2 = $result");
}

function action($num1, $num2, $case) {
    $result = $num1 + $num2;
    switch($case){
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            $result = $num1 / $num2;
            break;
    }

    return $result;
}