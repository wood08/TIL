<?php
    // í»ÝÂªÎÔðëòªÊåëåÞªÇ
    // Let's «Á«ã«ì«ó«¸£¡£¡
    
    $rank = array();
    
    $input_lines = fgets(STDIN);    // ÃÊ±â ¼³Á¤°ª ÀÔ·Â
    $init = explode(' ', $input_lines);

    $input_lines = fgets(STDIN);    // ÃÊ±â ¼³Á¤ Á¡¼ö ÀÔ·Â
    $c = explode(' ', $input_lines);

    for ($i=0; $i<$init[1]; $i++){
        $input_lines = fgets(STDIN);    // È¹µæ Á¡¼ö ÀÔ·Â
    
        $x = explode(' ', $input_lines);
        
        $scor = 0;
        for($j=0; $j<$init[0]; $j++){   // Á¡¼ö°è»ê
            $scor += $c[$j] * $x[$j];
        }
        $rank[$i] = round($scor);
    }
    
    rsort($rank);   // Á¤·Ä
    
    for ($i=0; $i<$init[2]; $i++){
        echo $rank[$i]."\n";
    }
    
?>
