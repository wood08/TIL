버블정렬(Bubble sort)
=======================
배열의 i번째 요소와 i+1번째 요소를 비교하여, i번째 요소보다 i+1번째 요소의 값이 작으면 서로의 자리를 바꾼다. 이 방법을 자리교체가 없을때까지 반복하는 정렬.</br>
최악의 복잡도(역정렬 되어있는 배열) : O(n^2)</br>
최선의 복잡도(이미 정렬 되어있는 배열) : O(n)</br>
평균 복잡도 : O(n^2)</br>

video
-------------------
[![Bubble sort](http://img.youtube.com/vi/lyZQPjUT5B4/0.jpg)](https://youtu.be/lyZQPjUT5B4?t=0s)


ex
-------------------
array = [4,3,1,2];</br>
1. 첫번째 roop
- array = [**4,3**,1,2];
	- 첫번째 요소인 4와 두번째 요소인 3을 비교한다.
	- 3이 더 작으므로 서로의 자리를 바꾼다.
	- array = [**3,4**,1,2];

- array = [3,**4,1**,2];
	- 두번째 요소인 4와 세번째 요소인 1을 비교한다.
	- 1이 더 작으므로 서로의 자리를 바꾼다.
	- array = [3,**1,4**,2];

- array = [3,1,**4,2**];
	- 세번째 요소인 4와 네번째 요소인 2를 비교한다.
	- 2가 더 작으므로 서로의 자리를 바꾼다.
	- array = [3,1,**2,4**];

2. 두번째 roop
- array = [**3,1**,2,4];
	- 첫번째 요소인 3과 두번째 요소인 1을 비교한다.
	- 1이 더 작으므로 서로의 자리를 바꾼다.
	- array = [**1,3**,2,4];

- array = [1,**3,2**,4];
	- 두번째 요소인 3과 세번째 요소인 2를 비교한다.
	- 2가 더 작으므로 서로의 자리를 바꾼다.
	- array = [1,**2,3**,4];

- array = [1,2,**3,4**];
	- 세번째 요소인 3과 네번째 요소인 4를 비교한다.
	- 4가 더 크므로 서로의 자리를 바꾸지 않는다.
	- array = [1,2,**3,4**];

3. 세번째 roop
- array = [1,2,3,4];
	- 각 요소를 바꿀 필요가 없음.

source code
--------------------------------
bubble_sort.php
	
	<?php
		$array = [4,2,1,5,3];

		echo 'before array=';
		for($i=0; $i<count($array); $i++){
			echo $array[$i];
		}
		echo "\n";

		$check = 1;
		for($i=0; $i<count($array); $i++){
			if($check == 0) continue;
			$check = 0;
			for($j=0; $j<count($array)-1; $j++){
				if($array[$j] > $array[$j+1]){
					$tmp = $array[$j];
					$array[$j] = $array[$j+1];
					$array[$j+1] = $tmp;
					$check = 1;
				}
			}
		}

		echo 'after array=';
		for($i=0; $i<count($array); $i++){
			echo $array[$i];
		}
	?>