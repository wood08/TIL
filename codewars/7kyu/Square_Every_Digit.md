Square Every Digit(javascript)
=============
문제
------------

Link: [Square Every Digit](https://www.codewars.com/kata/square-every-digit/train/javascript)  

Welcome. In this kata, you are asked to square every digit of a number.

For example, if we run 9119 through the function, 811181 will come out, because 92 is 81 and 12 is 1.

Note: The function accepts an integer and returns an integer

답변
--------------
1차
<pre>
function squareDigits(num){
  //may the code be with you
  num = num.toString().split("");
  var result = '';
  for(var i=0; i < num.length; i++ ){
    result += num[i]*num[i];
  }
  return result;
}
</pre>
  
2차
<pre>
function squareDigits(num){
  //may the code be with you
  return Number(num.toString().split("").map(x=> x*x).join(""));
}
</pre>

생각할 점
------------------------
1. 푸는과정도 써놔야겠음.
2. 숫자를 문자로, 문자를 숫자로 바꾸는 과정이 좀 귀찮음. 헷갈리기도 하고.
3. map 사용 방법을 좀 알꺼 같음.