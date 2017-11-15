삽입정렬(Insertion sort)
==================
</br>
최악의 복잡도 : O(n^2)</br>
최선의 복잡도 : O(n^2)</br>
평균 복잡도 : O(n^2)</br>

video
-------------------
[![Insertion sort](http://img.youtube.com/vi/ROalU379l3U/0.jpg)](https://youtu.be/ROalU379l3U?t=0s)

ex
------------------
array = [4,3,1,2,5];</br>
1.
- array = [**4,3**,1,2,5];
	- array = [**4,4**,1,2,5];	<3>
	- array = [**3,4**,1,2,5];	<3>

2.
- array = [**3,4,1**,2,5];
	- array = [**3,4,4**,2,5];	<1>
	- array = [**3,3,4**,2,5];	<1>
	- array = [**1,3,4**,2,5];	<1>
	
3.
- array = [**1,3,4,2**,5];
	- array = [**1,3,4,4**,5];	<2>
	- array = [**1,3,3,4**,5];	<2>
	- array = [**1,2,3,4**,5];	<2>
	
4.
- array = [**1,2,3,4,5**];
	- 정렬완료

source code
--------------------
insertion_sort.php
	
	<?php
		$array = [3,2,6,1,5,4];
		
		echo 'before array=';
		for($i=0; $i<count($array); $i++){
			echo $array[$i].' ';
		}
		echo "\n";
		
		
		
		echo 'after array=';
		for($i=0; $i<count($array); $i++){
			echo $array[$i].' ';
		}
	?>