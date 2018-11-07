Your order, please(javascript)
===============

link: [Your order, please](https://www.codewars.com/kata/your-order-please/train/javascript)

문제
--
Your task is to sort a given string. Each word in the string will contain a single number. This number is the position the word should have in the result.  
  
Note: Numbers can be from 1 to 9. So 1 will be the first word (not 0).  
  
If the input string is empty, return an empty string. The words in the input String will only contain valid consecutive numbers.  
  
Examples
<pre>
"is2 Thi1s T4est 3a"  -->  "Thi1s is2 3a T4est"
"4of Fo1r pe6ople g3ood th5e the2"  -->  "Fo1r the2 g3ood 4of th5e pe6ople"
""  -->  ""
</pre>

답변
--
<pre>
function order(words){
  // ...
  words = words.split(' ');
  var result = [];
  for(var j=1; j<10; j++){
    for(var i=0; i<words.length; i++){
      if(words[i].indexOf(String(j))!=-1){
        result[j-1] = words[i];
      }
    }
  }
  return result.join(' ');
}
// Time: 735ms

</pre>

다른 사람들의 답변
------------
<pre>
//1
function order(words){
  
  return words.split(' ').sort(function(a, b){
      return a.match(/\d/) - b.match(/\d/);
   }).join(' ');
}    
</pre>

생각할 점
------------------------
이중 반복문 쓰기 싫었는데..
우선 문자를 자르는거랑 join 하는건 다른 사람들도 쓰는거 같은데, sort로 정렬하는건 생각 못했다.
정규식에서 '\d' 가 숫자를 표현한다는 것!!

