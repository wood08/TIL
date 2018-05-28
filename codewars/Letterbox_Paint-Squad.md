Letterbox Paint-Squad(javascript)
===============

link: [Letterbox Paint-Squad](https://www.codewars.com/kata/letterbox-paint-squad)

문제
--

Example  
For start = 125, and end = 132  
  
The letterboxes are  
  
125 = 1, 2, 5  
126 = 1, 2, 6  
127 = 1, 2, 7  
128 = 1, 2, 8  
129 = 1, 2, 9  
130 = 1, 3, 0  
131 = 1, 3, 1  
132 = 1, 3, 2  
The digit frequencies are 1 x 0, 9 x 1, 6 x 2 etc...  
  
and so the method would return [1,9,6,3,0,1,1,1,1,1]  

답변
--
<pre>
var paintLetterboxes = function(start, end) {
  // Your code here
  var result = [0,0,0,0,0,0,0,0,0,0];
  for(start; start<=end; start++){
    start.toString().split('').map((c,i) => result[c]++);
  }
  return result;
}
</pre>

.map은 저번에 
[Mumbling](https://github.com/wood08/TIL/blob/master/codewars/Mumbling.md) 
에서 했던게 생각나서 써봤더니 잘 돌아갔다.

다른 사람들의 답변
------------
<pre>
const paintLetterboxes = (start, end) => {
  let res = Array(10).fill(0);
  for (let i = start; i <= end; i++) {
    for (let n of (i + '')) {
      res[n]++;
    }
  }
  return res;
}
</pre>

<pre>
const paintLetterboxes = (start, end) => Array(10).fill(0).map((_,i)=> Array(end - start+1).fill(0).reduce((s,a,i)=> s + (start +i),'').split('').filter(e=> e==i).length);
</pre>

사람들이 const를 생각보다 많이쓴다.  
[var, let, const 차이점은?](https://gist.github.com/LeoHeo/7c2a2a6dbcf80becaaa1e61e90091e5d) 
차이점 설명이 잘 되어있는 글이다.
