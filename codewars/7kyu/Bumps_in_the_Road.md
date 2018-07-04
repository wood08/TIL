Bumps in the Road(javascript)
=============
문제
------------

Link: [Bumps in the Road](https://www.codewars.com/kata/bumps-in-the-road/javascript)

입력값에서 n이 15개 이하이면 "Woohoo!" 출력.
15개 넘으면 "Car Dead" 출력.

답변
--------------

<pre>
function bump(x){
  return (x.match(/n/g) == null ? "Woohoo!" : (x.match(/n/g).length < 16 ? "Woohoo!" : "Car Dead") );
}
</pre>


다른 사람들의 답변
------------------------
1. 내 답변에서 비교문쪽이 좀 맘에 안들었는데
<pre>
function bump(x){
  x=x.match(/n/ig);
  return x?(x.length>15?"Car Dead":"Woohoo!"):"Woohoo!";
}
</pre>
이렇게 확인을 할 수도 있었음.

2. 페이지에서 제일 위에 있던 답변은
<pre>
const bump=x=>x.split('n').length>16?"Car Dead":"Woohoo!"
</pre>
이거였는데, n을 기준으로 배열을 만들어서 갯수를 세는 방법.  
이거라면 n이 0개라면 배열이 0개, 1개라면 배열이 2개임.  
n이 있을때 갯수를 1개 늘려서 체크하면 0개 일때도 따로 비교문을 안써도 체크가 가능하다.
