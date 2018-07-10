Sum of two lowest positive integers(javascript)
===============

link: [Sum of two lowest positive integers](https://www.codewars.com/kata/558fc85d8fd1938afb000014)

문제
--
Create a function that returns the sum of the two lowest positive numbers given an array of minimum 4 integers. No floats or empty arrays will be passed.  

For example, when an array is passed like [19, 5, 42, 2, 77], the output should be 7.  

[10, 343445353, 3453445, 3453545353453] should return 3453455.  

Hint: Do not modify the original array.  

답변
--
<pre>
function sumTwoSmallestNumbers(numbers) {  
  //Code here
  numbers.sort(function(a,b){return a-b;});
  return numbers[0]+numbers[1];
};
// Time: 661ms
</pre>

다른 사람들의 답변
------------
<pre>
const sumTwoSmallestNumbers = numbers => numbers.sort((x, y) => x - y).slice(0, 2).reduce((x, y) => x + y);
</pre>

생각할 점
------------------------
1. 힌트에서 원래 배열을 수정하지 말랬는데 무슨뜻인지 모르겠다. 정렬해야할꺼 같아서 정렬은 했는데 이것도 수정인건지?
2. 다른 사람들 답변도 우선 정렬하고 있으니 괜찮은건가?
