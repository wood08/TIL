<?php

// Complete the larrysArray function below.
function larrysArray($A) {
    $cnt = 0;
    for($i=0;$i<count($A)-1;$i++){
        for($j=$i+1;$j<count($A);$j++){
            if($A[$i]>$A[$j]){
                $cnt++;
            }
        }
    }
    echo 'cnt='.$cnt;
    return $cnt % 2 == 0 ? 'YES' : 'NO';
}
