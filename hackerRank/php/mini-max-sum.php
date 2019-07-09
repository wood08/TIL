<?php
function miniMaxSum($arr) {
    sort($arr);
    $result = [
        $arr[0]+$arr[1]+$arr[2]+$arr[3],
        $arr[1]+$arr[2]+$arr[3]+$arr[4]
    ];
    return $result;
}
