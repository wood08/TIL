Reverse Letters in Sentence
===============

link: [Reverse Letters in Sentence](https://www.codewars.com/kata/reverse-letters-in-sentence)

문제
--

입력된 문자를 거꾸로 출력하기

ex)
<pre>
"Hi mom" => "iH mom"
" A fun little challenge! " => " A nuf elttil !egnellahc "
</pre>

답변
--
<pre>
function reverser(string $sentence): string {
  // Your code here
  $sentence = explode(" ", $sentence);
  $result = "";
  foreach($sentence as $k=>$v){
    $sentence[$k] = strrev($v);
  }
  return join($sentence, " ");
}
</pre>

[Mumbling](https://github.com/wood08/TIL/blob/master/codewars/Mumbling.md) 에서 join 했던 부분이 생각나서 php에도 같은 함수 있을꺼 같아서 검색해보니 있었다.  

다른 사람들의 답변
------------
<pre>
function reverser(string $sentence): string {
  return join(' ',array_map('strrev',explode(' ',$sentence)));
}
</pre>

strrev 는 문자열을 반대로 출력하는 함수.  
array_map 는 자바스크립트의 map 이랑 같은 함수인거같다. 각 배열의 요소들을 하나씩 불러오고 있으니... 이거 [Mumbling](https://github.com/wood08/TIL/blob/master/codewars/Mumbling.md) 랑 같은문제 잖아.  

array_map  
http://php.net/manual/kr/function.array-map.php