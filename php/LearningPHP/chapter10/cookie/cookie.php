<?php
$cnt = isset($_COOKIE['cnt']) ? ($_COOKIE['cnt']+1) : 1;
setcookie('cnt', $cnt);
print '열람횟수='.$cnt."\n";

if($cnt % 5 == 0){
    print '열람 감사감사'."\n";
}

if($cnt == 20){
    setcookie('cnt', '');
    print '초기화합니다';
}


