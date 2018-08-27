Multiples of 3 or 5(javascript)
===============

link: [Multiples of 3 or 5](https://www.codewars.com/kata/multiples-of-3-or-5/train/javascript)

문제
--
If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.  
  
Finish the solution so that it returns the sum of all the multiples of 3 or 5 below the number passed in.  
<pre>
Note: If the number is a multiple of both 3 and 5, only count it once.
</pre>

답변
--
<pre>
function solution(number){
  var result = 0;
  for(var cnt=1; cnt<number; cnt++){
  	if(cnt%3==0 || cnt%5==0){
  		result += cnt;
  	}
  }
  return result;
}
// Time: 629ms
</pre>

다른 사람들의 답변
------------
<pre>
function solution(number){
  var n3 = Math.floor(--number/3), n5 = Math.floor(number/5), n15 = Math.floor(number/15);
  return (3 * n3 * (n3 + 1) + 5 * n5 * (n5 + 1) - 15 * n15 * (n15+1)) /2;
}
</pre>

생각할 점
------------------------
1. 다른 답변 완전 복잡...!