Thinkful - Logic Drills: Traffic light(javascript)
===============

link: [Thinkful - Logic Drills: Traffic light](http://www.codewars.com/kata/thinkful-logic-drills-traffic-light)

문제
--
You're writing code to control your town's traffic lights. You need a function to handle each change from green, to yellow, to red, and then to green again.  
  
Complete the function that takes a string as an argument representing the current state of the light and returns a string representing the state the light should change to.  
  
For example, update_light('green') should return 'yellow'.  

답변
--
<pre>
function updateLight(current) {
  
  //your code here!
  
  var colors = ["green","yellow","red"];
  if( colors.indexOf(current) == 2){
    return colors[0];
  } else {
    return colors[colors.indexOf(current)+1];
  }

}
</pre>

인덱스 비교할때 .length 를 쓰면 배열크기가 바껴도 괜찮을꺼 같다.

다른 사람들의 답변
------------
<pre>
function updateLight(current) {
  
  return current === 'yellow' ? 'red' : current === 'green' ? 'yellow' : 'green';

}
</pre>

<pre>
const updateLight = current => ({
  green: 'yellow',
  yellow: 'red',
  red: 'green',
})[current]
</pre>

흠  
내코드 넘 구린거같아...  
