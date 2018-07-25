Inverting a Hash(javascript)
===============

link: [Inverting a Hash](https://www.codewars.com/kata/inverting-a-hash/train/javascript)

문제
--
Summary  
Given a Hash made up of keys and values, invert the hash by swapping them.  

Examples
<pre>
Given:

  { a: '1',
    b: '2',
    c: '3' }

Return:

  { 1: 'a',
    2: 'b',
    3: 'c' }



Given:

  { foo:   'bar',
    hello: 'world' }

Return:

  { bar:   'foo',
    world: 'hello' }
</pre>
Notes  
Keys and values may be of any type appropriate for use as a key.  
All hashes provided as input will have unique values, so the inversion is involutive. In other words, do not worry about identical values stored under different keys.  

답변
--
<pre>
function invertHash(hash) {
  var result = new Object();
  for(var key in hash){
    result[hash[key]] = key;
  }
  return result;
}
// Time: 669ms
</pre>

다른 사람들의 답변
------------
<pre>
function invertHash(hash) {
  return Object.entries(hash).reduce((invertedHash, [key, value]) => {
    invertedHash[value] = key;
    return invertedHash;
  }, {});
}
</pre>

<pre>
const invertHash = hash => 
  Object.entries(hash).reduce((h, [k, v]) => ({ ...h, [v]: k }), {})
</pre>


생각할 점
------------------------
1. 원래 이거말고 6짜리 풀고 있었는데, 도저히 시간이 안될꺼 같아서 7로 하나 풀음 ㅠㅠ. 반성이다.
2. json 에 집착하느라 reduce 같은거 전혀 신경도 못씀.