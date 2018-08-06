Two Sum(javascript)
===============

link: [Two Sum](http://www.codewars.com/kata/two-sum/train/javascript)

문제
--
Write a function that takes an array of numbers (integers for the tests) and a target number. It should find two different items in the array that, when added together, give the target value. The indices of these items should then be returned in an array like so: [index1, index2].  

For the purposes of this kata, some tests may have multiple answers; any valid solutions will be accepted.  

The input will always be valid (numbers will be an array of length 2 or greater, and all of the items will be numbers; target will always be the sum of two different items from that array).  

Based on: http://oj.leetcode.com/problems/two-sum/

답변
--
<pre>
function twoSum(numbers, target) {
  // ...
  for(var i=0; i < numbers.length; i++){
    for(var j=i+1; j < numbers.length; j++){
      var result = numbers[i] + numbers[j];
      if ( target == result ) return [i, j];
    }
  }
}
// Time: 691ms
</pre>


생각할 점
------------------------
1. 급하게 후다닥 했는데 쉽게 풀렸다. (약 10분? 걸린듯)
2. 다른 사람들 답변도 나랑 비슷해서 깜놀.