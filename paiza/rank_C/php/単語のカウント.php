<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_lines = fgets(STDIN);

    $input = explode(' ', $input_lines);
    $in_array = array();
    
    for($i=0; $i<count($input); $i++){
        $string = trim($input[$i]); // 문자 앞뒤 공백 제거
        if(empty($in_array[$string])){   // 해당 문자의 배열이 없는 경우 초기화
            $in_array[$string] = 0;
        }
        $in_array[$string]++;
    }
    
    foreach($in_array as $key=>$value){
        echo $key.' '.$value."\n";
    }
?>