Are the numbers in order?(javascript)
===============

link: [Are the numbers in order?](http://www.codewars.com/kata/are-the-numbers-in-order?utm_source=newsletter)

문제
--
In this Kata, your function receives an array of positive integers as input. Your task is to determine whether the numbers are in ascending order.  

For the purposes of this Kata, you may assume that all inputs are valid (i.e. arrays containing only positive integers with a length of at least 2).  

For example:
<pre>
in_asc_order({1,2,4,7,19}, 5); // returns true
in_asc_order({1,2,3,4,5}, 5); // returns true
in_asc_order({1,6,10,18,2,4,20}, 7); // returns false
in_asc_order({9,8,7,6,5,4,3,2,1}, 9); // returns false because the numbers are in DESCENDING order
</pre>
Extra Challenge: If time, try to optimise and shorten your code as much as possible.

답변
--
<pre>
function inAscOrder(arr) {
  // Code your algorithm here :)
  var result = arr.reduce( (a,b)=> a < b ? (a==-1?a:b) : -1 );
  return result==-1?false:true;
}
// Time: 628ms
</pre>

다른 사람들의 답변
------------
<pre>
function inAscOrder(arr) {
  return arr.every((_,i)=>i==0||arr[i]>arr[i-1]);
}
</pre>

<pre>
function inAscOrder(arr) {
  for(let i = 0; i < arr.length - 1; i++) {
    if (arr[i] > arr[i+1]) {
      return false; 
    }
  }
  return true;
}
</pre>

생각할 점
------------------------
1. 시간 최대한 줄여볼려고 했는데 for문이나 배열 자르고 그러면 따로 시간 더 걸리고 그래서 결국 reduce 로 모든 배열 확인을 해버림.
2. 다른 사람들 답변들도 시간은 비슷하게 나오는듯.
3. arr.every 쓴 사람이 많았다.
