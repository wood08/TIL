Sort and Star(javascript)
=============
문제
------------

Link: [Sort and Star](http://www.codewars.com/kata/sort-and-star/train/javascript)  

You will be given an vector of string(s). You must sort it alphabetically (case-sensitive!!) and then return the first value.  
  
The returned value must be a string, and have "***" between each of its letters.  
  
You should not remove or add elements from/to the array.  

답변
--------------
<pre>
function twoSort(s) {
  return s.sort()[0].split("").join("***");
}
</pre>

생각할 점
------------------------
1. 이번주의 메일 문제. 암생각없이 풀었는데 8kyu였다...