Replace With Alphabet Position(javascript)
===============

link: [Replace With Alphabet Position](https://www.codewars.com/kata/546f922b54af40e1e90001da)

문제
--
Welcome.  

In this kata you are required to, given a string, replace every letter with its position in the alphabet.  

If anything in the text isn't a letter, ignore it and don't return it.  

a being 1, b being 2, etc.  

As an example:  

<pre>
alphabet_position("The sunset sets at twelve o' clock.")
</pre>
Should return "20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11" as a string.  

답변
--
<pre>
function alphabetPosition(text) {
  var str = 'abcdefghijklmnopqrstuvwxyz';
  text = text.split("").map(a => str.indexOf(a.toLowerCase()) > -1 ? str.indexOf(a.toLowerCase()) + 1 : "");

  var result = "";
  for(var i=0; i<text.length; i++){
    if(text[i] != ""){
      if(result != "") result += " ";
      result += text[i];
    }
  }
  return result;
}
// Time: 660ms
</pre>

다른 사람들의 답변
------------
<pre>
function alphabetPosition(text) {
  var result = "";
  for (var i = 0; i < text.length; i++){
    var code = text.toUpperCase().charCodeAt(i)
    if (code > 64 && code < 91) result += (code - 64) + " ";
  }

  return result.slice(0, result.length-1);
}
</pre>

<pre>
function alphabetPosition(text) {
  return text
    .toUpperCase()
    .match(/[a-z]/gi)
    .map( (c) => c.charCodeAt() - 64)
    .join(' ');
}
</pre>

<pre>
let alphabetPosition = (text) => text.toUpperCase().replace(/[^A-Z]/g, '').split('').map(ch => ch.charCodeAt(0) - 64).join(' ');
</pre>

<pre>
function alphabetPosition(text) {
  return text.match(/[a-zA-Z]/g).map( (el) => el.toLowerCase().charCodeAt() - 96 ).join(' ');
}
</pre>

생각할 점
------------------------
1. join 쓰고 싶었는데 빈배열이 나와서 쓸 수 없었다. 영문자 외에는 미리 정규식 같은걸로 거르면 될꺼 같았는데 정규식을 쓰기 싫었다...