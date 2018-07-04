Descending Order(javascript)
=============
문제
------------

Link: [Descending Order](https://www.codewars.com/kata/descending-order/train/javascript)  

Your task is to make a function that can take any non-negative integer as a argument and return it with its digits in descending order. Essentially, rearrange the digits to create the highest possible number.  
  
Examples:  
Input: 21445 Output: 54421  
  
Input: 145263 Output: 654321  
  
Input: 1254859723 Output: 9875543221  

답변
--------------
<pre>
function descendingOrder(n){
  //...
  return Number(n.toString().split("").sort(function(a,b){return b-a;}).join(""));
}
</pre>

다른 사람들의 답변
------------------------
<pre>
function descendingOrder(n){
  return parseInt(String(n).split('').sort().reverse().join(''))
}
</pre>

1. 정렬에 reverse()가 있었다니.. 몰랐다!

생각할 점
------------------------
1. 7kyu는 이제 별 문제 없으면 20분 정도 걸리는듯? 가능하면 6kyu 문제 풀어봐야 할꺼같은데...