<?php
    // ��ª���������ު�
    // Let's �����󫸣���
    
    $rank = array();
    
    $input_lines = fgets(STDIN);    // �ʱ� ������ �Է�
    $init = explode(' ', $input_lines);

    $input_lines = fgets(STDIN);    // �ʱ� ���� ���� �Է�
    $c = explode(' ', $input_lines);

    for ($i=0; $i<$init[1]; $i++){
        $input_lines = fgets(STDIN);    // ȹ�� ���� �Է�
    
        $x = explode(' ', $input_lines);
        
        $scor = 0;
        for($j=0; $j<$init[0]; $j++){   // �������
            $scor += $c[$j] * $x[$j];
        }
        $rank[$i] = round($scor);
    }
    
    rsort($rank);   // ����
    
    for ($i=0; $i<$init[2]; $i++){
        echo $rank[$i]."\n";
    }
    
?>
