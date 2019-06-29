<?php
function timeConversion($s) {
    $s_arr = explode(':', $s);
    $s_last = str_split($s_arr[2],2);
    $s_arr[2] = $s_last[0];
    if($s_last[1] == 'PM'){
        if($s_arr[0] != '12'){
            $s_arr[0] = ((int)$s_arr[0])+12;
        }
    } else if($s_arr[0] == '12'){
        $s_arr[0] = '00';
    }

    return $s_arr[0].":".$s_arr[1].":".$s_arr[2];
}