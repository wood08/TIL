Shortest Word
===============

link: [Shortest Word](http://www.codewars.com/kata/57cebe1dc6fdc20c57000ac9/train/javascript)

문제
--

Simple, given a string of words, return the length of the shortest word(s).

String will never be empty and you do not need to account for different data types.  

입력된 문장중에 제일 짧은 문자열이 몇글자인지 확인하는 문제

답변
--
<pre>
function findShort(s){
  return s.split(' ').reduce((c,i)=> (c.length > i.length ? i : c) ).length;
}
</pre>

다른 사람들의 답변
------------
<pre>
function findShort(s){
  return Math.min.apply(null, s.split(' ').map(w => w.length));
}
</pre>

apply  
예제에 배열에서 최대값이랑 최소값을 구하는 부분이 있다.   
https://developer.mozilla.org/ko/docs/Web/JavaScript/Reference/Global_Objects/Function/apply

<pre>
function findShort(s){
    return Math.min(...s.split(" ").map (s => s.length));
}
</pre>


