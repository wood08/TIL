Scramblies(javascript)
===============

link: [Scramblies](https://www.codewars.com/kata/scramblies?utm_source=newsletter)

문제
--
Complete the function scramble(str1, str2) that returns true if a portion of str1 characters can be rearranged to match str2, otherwise returns false.

Notes:
- Only lower case letters will be used (a-z). No punctuation or digits will be included.
- Performance needs to be considered
Examples
<pre>
scramble('rkqodlw', 'world') ==> True
scramble('cedewaraaossoqqyt', 'codewars') ==> True
scramble('katas', 'steak') ==> False
</pre>

답변
--
<pre>
function scramble(str1, str2) {
  //code me
  var result = true;

  str2 = str2.split('');
  
  str2.every(c=>
  {
    var str = str1.replace(c, '');
    if(str.length == str1.length){
      result = false; 
    } else {
      str1 = str;
    }
    return result;
  });
  return result;
}
// Time: 시간초과

</pre>

다른 사람들의 답변
------------
<pre>
//1
function scramble(str1, str2) {
  let occurences = str1.split("").reduce((arr, cur) => { arr[cur] ? arr[cur]++ : arr[cur] = 1; return arr; }, {});
  return str2.split("").every((character) => --occurences[character] >= 0);
}
</pre>

<pre>
//2
function scramble(str1, str2) {
  var hashtab = [...new Array(256)].map(x => 0);
  
  str2.split('').forEach(ele => hashtab[ele.charCodeAt(0)]++);
  str1.split('').forEach(ele => hashtab[ele.charCodeAt(0)]--);
  
  hashtab = hashtab.filter (x=>x > 0);
  
  return hashtab.length == 0;
}
</pre>

생각할 점
------------------------
아무리 코드 고쳐도 자꾸 시간초과가 떠서..괴롭다...  
array.every 가 일반 for 문보다 느리다는 이야기가..?
1. 뭔가 제일 많은 추천받은 코드가 문제가 있는지 논란이 있다. 가독성 문제인거 같은데...
2. 현재 사용되고 있는 글자의 갯수를 체크해서 필터하는 방법도 있구만!ㅠㅠ 이건 생각 못했다.

