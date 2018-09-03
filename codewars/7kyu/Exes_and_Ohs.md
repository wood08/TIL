Exes and Ohs(javascript)
===============

link: [Exes and Ohs](http://www.codewars.com/kata/exes-and-ohs/train/javascript)

문제
--
Check to see if a string has the same amount of 'x's and 'o's. The method must return a boolean and be case insensitive. The string can contain any char.  
  
Examples input/output:
<pre>
XO("ooxx") => true
XO("xooxx") => false
XO("ooxXm") => true
XO("zpzpzpp") => true // when no 'x' and 'o' is present should return true
XO("zzoo") => false
</pre>


답변
--
<pre>
function XO(str) {
    //code here
    var arr = str.split("");
    var result = 0;
    arr.map(x=> x.toUpperCase() == 'X' ? result++ : (x.toUpperCase() == 'O' ? result-- : '') );
    return result ? false : true;
}
// Time: 643ms
</pre>

다른 사람들의 답변
------------
<pre>
function XO(str) {
  let x = str.match(/x/gi);
  let o = str.match(/o/gi);
  return (x && x.length) === (o && o.length);
}
</pre>

<pre>
const XO = str => {
  str = str.toLowerCase().split('');
  return str.filter(x => x === 'x').length === str.filter(x => x === 'o').length;
}
</pre>

<pre>
function XO(str) {
    var a = str.replace(/x/gi, ''),
        b = str.replace(/o/gi, '');
    return a.length === b.length;
}
</pre>

생각할 점
------------------------
1. 나름 map 도 쓰고 그랬음
2. 정규식쓰는 방법이 더 깔끔해보이는 슬픔
3. array.filter() 메소드는 제공된 함수로 구현된 테스트를 통과하는 모든 요소가 있는 새로운 배열을 만듭니다.
link: [array.filter()](https://developer.mozilla.org/ko/docs/Web/JavaScript/Reference/Global_Objects/Array/filter)
