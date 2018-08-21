Find the odd int(javascript)
===============

link: [Find the odd int](https://www.codewars.com/kata/find-the-odd-int/train/javascript)

문제
--
Given an array, find the int that appears an odd number of times.  
  
There will always be only one integer that appears an odd number of times.  

답변
--
<pre>
function findOdd(A) {
  //happy coding!
  var cnt_arr = {};
  for(var i = 0; i < A.length; i++){
    if( cnt_arr[A[i]] == undefined ){
      cnt_arr[A[i]] = 1;
    } else {
      cnt_arr[A[i]]++;
    }
  }
  for( var key in cnt_arr ) {
    if( cnt_arr[key] % 2 == 1){
      return Number(key);
    }
  }
}
// Time: 633ms
</pre>

다른 사람들의 답변
------------
<pre>
const findOdd = (xs) => xs.reduce((a, b) => a ^ b);
</pre>

<pre>
function findOdd(A) {
  var obj = {};
  A.forEach(function(el){
    obj[el] ? obj[el]++ : obj[el] = 1;
  });
  
  for(prop in obj) {
    if(obj[prop] % 2 !== 0) return Number(prop);
  }
}
</pre>

<pre>
function findOdd(A) {
  return A.reduce(function(c,v){return c^v;},0);
}
</pre>

생각할 점
------------------------
1. 문제가 뭔지 제대로 못알아들어서 좀 헤맸다.
2. 한줄 코드 넘 충격이다.