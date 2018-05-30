Regex validate PIN code(javascript)
===============

link: [Regex validate PIN code](https://www.codewars.com/kata/regex-validate-pin-code)

문제
--

입력값이 4자리 혹은 6자리의 숫자이면 true / 아니면 false  
  
Example  
validatePIN("1234") === true  
validatePIN("12345") === false  
validatePIN("a234") === false  

답변
--
<pre>
function validatePIN (pin) {
  //return true or false
  if(pin.length != 4 && pin.length != 6){
    return false;
  }
  
  if( isNaN(pin) || Number.isInteger(pin) ){
    return false;
  }
  
  if( !isNaN(pin) && eval(pin).toString().length == parseInt(eval(pin)).toString().length ){
    return true;
  }
  return false;
}
</pre>

하 맘에 안든다. 다른 쉬운방법 분명 있을꺼같은데.. 우선 솔루션 볼려고 제출 ㅠㅠ

다른 사람들의 답변
------------
<pre>
function validatePIN(pin) {
  return /^(\d{4}|\d{6})$/.test(pin)
}
</pre>

<pre>
function validatePIN (pin) {
  
  var pinlen = pin.length;
  var isCorrectLength = (pinlen == 4 || pinlen == 6);
  var hasOnlyNumbers = pin.match(/^\d+$/);
    
  if(isCorrectLength && hasOnlyNumbers){
    return true;
  }
  
  return false;

}
</pre>

역시 대세는 정규식.  
정규식 공부좀 해야할꺼같은데 너무 하기싫다 ㅠㅠ
