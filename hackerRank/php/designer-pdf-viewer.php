<?php

// Complete the extraLongFactorials function below.
function designerPdfViewer($h, $word) {
    $word = str_split($word);
    $height = 0;
    $wide = count($word);
    for($i=0;$i<$wide;$i++){
        $tmp = $h[(ord($word[$i])-97)];
        if( $height < $tmp ){
            $height = $tmp;
        }
    }

    return $height * $wide;
}