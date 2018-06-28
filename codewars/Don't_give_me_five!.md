Don't give me five!(javascript)
=============
문제
------------

Link: [Don't give me five!](https://www.codewars.com/kata/dont-give-me-five/train/javascript)  

In this kata you get the start number and the end number of a region and should return the count of all numbers except numbers with a 5 in it. The start and the end number are both inclusive!  

Examples:  

1,9 -> 1,2,3,4,6,7,8,9 -> Result 8  
4,17 -> 4,6,7,8,9,10,11,12,13,14,16,17 -> Result 12  
The result may contain fives. ;-)  
The start number will always be smaller than the end number. Both numbers can be also negative!  

I'm very curious for your solutions and the way you solve it. Maybe someone of you will find an easy pure mathematics solution.  

Have fun coding it and please don't forget to vote and rank this kata! :-)  

I have also created other katas. Take a look if you enjoyed this kata!  
  
입력값 n과 m의 사이의 숫자에서 5라는 글자가 포함된 숫자를 뺀 나머지 수의 갯수를 return  

답변
--------------
<pre>
function dontGiveMeFive(start, end)
{
  var cnt = 0;
  for( ; start <= end; start++){
    if(start.toString().indexOf('5') == -1 ){
      cnt++;
    }
  }
  return cnt;
}
</pre>

생각할 점
------------------------
1. indexOf() 가 문자열에서만 사용 가능해서 숫자를 문자열로 바꿔줘야 함!
2. 문제 자체는 쉬웠는데 무슨 문제인지 제대로 파악이 안돼서 좀 오래걸렸다. 영어공부를 좀 해야할 듯.