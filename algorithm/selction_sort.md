선택정렬(Selction sort)
==================
배열에서 최소값을 찾아서 해당 값을 맨 앞의 값과 자리를 바꾼다. 이 방법을 자리교체가 없을때까지 반복하는 정렬.</br>
최악의 복잡도 : O(n^2)</br>
최선의 복잡도 : O(n)</br>
평균 복잡도 : O(n^2)</br>

video
-------------------
[![Selction sort](http://img.youtube.com/vi/Ns4TPTC8whw/0.jpg)](https://youtu.be/Ns4TPTC8whw?t=0s)

ex
------------------
array = [4,3,1,2];</br>
1. 첫번째 roop
- array = [**4**,3,**1**,2];
	- 배열에서 제일 작은 요소인 1과, 첫번째 요소인 4의 자리를 바꾼다.
	- array = [**1**,3,**4**,2];
	
2. 두번째 roop
- array = [1,**3**,4,**2**];
	- 정렬되지 않은 배열에서 제일 작은 요소인 2와, 정렬되지 않은 배열의 첫번째 요소인 3의 자리를 바꾼다.
	- array = [1,**2**,4,**3**];
	
3. 세번째 roop
- array = [1,2,**4**,**3**];
	- 정렬되지 않은 배열에서 제일 작은 요소인 3과, 정렬되지 않은 배열의 첫번째 요소인 4의 자리를 바꾼다.
	- array = [1,2,**3**,**4**];
	
4. 네번째 roop
- array = [1,2,3,4];
	- 요소를 바꿀 필요가 없음.

source code
--------------------
selction_sort.php
	
	<?php
		$array = [2,3,4,1,5];
		
		echo 'before array=';
		for($i=0; $i<count($array); $i++){
			echo $array[$i].' ';
		}
		echo "\n";
		
		$check = 1;
		$tmp = 0;
		$min_idx = 0;
		for($i=0; $i<count($array); $i++){
			if($check ==  0) break;
			$min_idx = $i;
			$check = 0;
			for($j=$i+1; $j<count($array); $j++){
				if($array[$j] < $array[$min_idx]){
					$min_idx = $j;
					$check = 1;
				}
			}
			$tmp = $array[$min_idx];
			$array[$min_idx] = $array[$i];
			$array[$i] = $tmp;
		}
		
		echo 'after array=';
		for($i=0; $i<count($array); $i++){
			echo $array[$i].' ';
		}
	?>