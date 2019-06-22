<?php

// Complete the isValid function below.
function isValid($s) {
    $s = str_split($s);
    $array = [0,0,0,0,0,0,0,0,0,0,
        0,0,0,0,0,0,0,0,0,0,
        0,0,0,0,0,0];
    $char_cnt = 0;
    for($i=0;$i<count($s);$i++){
        $ord = ord($s[$i])-97;
        if($array[$ord]==0) $char_cnt++;
        $array[$ord]++;
    }

    $arr = array_filter($array);
    $max = max($arr);
    $min = min($arr);

    if($max==$min) return 'YES';

    $max_cnt = 0;
    $min_cnt = 0;
    $other_cnt = 0;
    foreach($arr as $v){
        if($v == $max) $max_cnt++;
        if($v == $min) $min_cnt++;
        if($v != $min && $v != $max) $other_cnt++;
    }

    if($other_cnt > 0) return 'NO';
    if($max-$min == 1 && $max_cnt==1) return 'YES';
    if($min == 1 && $min_cnt==1) return 'YES';

    return 'NO';
}
