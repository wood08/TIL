Make the Deadfish swim.(javascript)
===============

link: [Make the Deadfish swim.](https://www.codewars.com/kata/make-the-deadfish-swim)

문제
--
Write a simple parser that will parse and run Deadfish.  
  
Deadfish has 4 commands, each 1 character long:  
  
i increments the value (initially 0)  
d decrements the value  
s squares the value  
o outputs the value into the return array  
Invalid characters should be ignored.  
<pre>
parse("iiisdoso") => [ 8, 64 ]
</pre>

답변
--
<pre>
// Return the output array, and ignore all non-op characters
function parse( data )
{
  data = data.split('');
  var result = 0;
  var result_arr = [];
  for(var i = 0; i < data.length; i++){
    switch(data[i]){
      case 'i' : 
          result++;
        break;
        case 'd' : 
          result--;
        break;
        case 's' : 
          result *= result;
        break;
        case 'o' : 
          result_arr.push(result);
        break;
    }
  }
  return result_arr;
  
}
// Time: 620ms
</pre>

다른 사람들의 답변
------------
<pre>
var map = {
  'i' : function(x){return x + 1;},
  'd' : function(x){return x - 1;},
  's' : function(x){return x * x;}
}

function parse( data )
{
  var array = [], val = 0;
  data.split('').forEach(function(x){
    if(x === 'o'){
      array.push(val); 
    } else {
      val = map[x](val);
    }
  });
  return array;
}
</pre>

<pre>
function parse(data) {
  let res = [];

  data.split('').reduce((cur, s) => {
    if (s === 'i') cur++;
    if (s === 'd') cur--;
    if (s === 's') cur = Math.pow(cur, 2);
    if (s === 'o') res.push(cur);
    
    return cur;
  }, 0);
  
  return res;
}
</pre>

<pre>
const parse = (data) => {
  let result = []
  let val = 0
  data.split('').forEach(x => {
    switch(x){
      case 'i':
        val++
        break
      case 'd':
        val--
        break
      case 's':
        val*=val
        break
      case 'o':
        result.push(val)
    }
  })
  return result
}
</pre>

생각할 점
------------------------
1. 배열관련 함수 뭔가 써볼려고 했는데 생각하기 귀찮았다.
2. 뭔가 6kyu 라고 하기에는 쉬운 느낌? 문제마자 레벨 차이가 좀 심한듯하다.
3. 슬슬 5kyu 도 해봐야하나.. 그전에 영어랑 수학 공부좀 해야할꺼같은데...