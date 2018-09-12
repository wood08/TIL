Find sum of top-left to bottom-right diagonals(javascript)
===============

link: [Find sum of top-left to bottom-right diagonals](http://www.codewars.com/kata/find-sum-of-top-left-to-bottom-right-diagonals/train/javascript)

문제
--
Given a "square" array of subarrays, find the sum of values from the first value of the first array, the second value of the second array, the third value of the third array, and so on...  

Example 1:
<pre>
var exampleArray = [[1, 0, 0, 0],
                   [0, 1, 0, 0],
                   [0, 0, 1, 0],
                   [0, 0, 0, 1]]

diagonalSum(exampleArray) // => 4
</pre>
Example 2:
<pre>
var exampleArray = [[1, 0, 0, 0, 0],
                   [0, 1, 0, 0, 0],
                   [0, 0, 1, 0, 0],
                   [0, 0, 0, 1, 0],
                   [0, 0, 0, 0, 1]]

diagonalSum(exampleArray) // => 5
</pre>

답변
--
<pre>
function diagonalSum(matrix){
  //...
  var length = matrix.length;
  var result = 0;
  for(var i = 0; i < length; i++){
    result += matrix[i][i];
  }
  return result;
}
// Time: 588ms
</pre>

다른 사람들의 답변
------------
<pre>
function diagonalSum(m){
  return m.reduce(function(s,r,i){return s+r[i]},0)
}
</pre>

생각할 점
------------------------
1. 넘 올만이다. 칸 채울려고 푼 느낌. 반성.. 그래도 안한것보다는 나아!
2. 한줄코딩 대단해! 난 아직 멀었다...
