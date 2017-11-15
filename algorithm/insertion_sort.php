<?php
/*
	$array = [3,2,6,1,5,4];

	echo 'before array=';
	for($i=0; $i<count($array); $i++){
		echo $array[$i].' ';
	}
	echo "\n";
	
	$tmp = 0;
	for($i=1; $i<count($array); $i++){
		echo '$array[$i]='.$array[$i].', $array[$i-1]='.$array[$i-1].', $i='.$i."\n";
		$tmp = $array[$i];
		for($j=$i-1; $j>=0; $j--){
			echo '$array[$j]='.$array[$j].', $j='.$j."\n";
			if($tmp < $array[$j]){
				echo '=$array[$j]='.$array[$j]."\n";
				$array[$j] = $array[$j-1];
				
			} else {
				echo '==$array[$j]='.$array[$j].', $tmp='.$tmp."\n";
				$array[$j] = $tmp;
				break;
			}
		}
	}
	
	echo 'after array=';
	for($i=0; $i<count($array); $i++){
		echo $array[$i].' ';
	}
	*/
	

	$array = [3,2,6,1,5,4];

	echo 'before array=';
	for($i=0; $i<count($array); $i++){
		echo $array[$i].' ';
	}
	echo "\n";
	
	$tmp = 0;
	for($i=2; $i<=count($array)-1; $i++){
		echo '$array[$i]='.$array[$i].', $array[$i-1]='.$array[$i-1].', $i='.$i."\n";
		$tmp = $array[$i];
		$j = $i;
		while($array[$j-1] > $tmp && $j >= 1){
			$array[$j] = $array[$j-1];	
			$j--;
		}
		$array[$j] = $tmp;
	}
	
	echo 'after array=';
	for($i=0; $i<count($array); $i++){
		echo $array[$i].' ';
	}

?>
