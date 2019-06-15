<?php
foreach (file('people.txt') as $line){
    $line = trim($line);
    $info = explode('|', $line);
    print 'name='.$info[1].', email='.$info[0]."\n";
}

$fh = fopen('people.txt', 'rb');
while ((!feof($fh) && ($line = fgets($fh)))){
    $line = trim($line);
    $info = explode('|', $line);
    print 'name='.$info[1].', email='.$info[0]."\n";
}
fclose($fh);