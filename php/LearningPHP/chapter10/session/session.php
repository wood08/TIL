<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    action();
} else {
    showForm();
}

function showForm () {
    require "form.php";
}

function action() {
    $color = $_POST['color'];

    $_SESSION['colors'][] = $color;
    print '저장완료';
    print <<< _FORM_
<a href="session.php">확인</a>
_FORM_;

}