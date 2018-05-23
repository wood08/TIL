Mumbling(javascript)
===============

link: [Mumbling](https://www.codewars.com/kata/mumbling)

문제
--

examples
<pre>
accum("abcd");    // "A-Bb-Ccc-Dddd"
accum("RqaEzty"); // "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
accum("cwAt");    // "C-Ww-Aaa-Tttt"
</pre>

답변
--
<pre>
function accum(s) {
	// your code
	var arr = s.split("");
	var result = "";
	for(var i=0;i<arr.length;i++){
		result += (i==0?"":"-");
		for(var j=0;j<=i;j++){
			result += (j==0?arr[i].toUpperCase():arr[i].toLowerCase());
		}
	}
	return result;
}
</pre>

다른 사람들의 답변
------------
<pre>
function accum(s) {
  return s.split('').map((c, i) => (c.toUpperCase() + c.toLowerCase().repeat(i))).join('-');
}
</pre>

map은 각 배열 요소에 대해서 한번씩 순서대로 불러서 그 함수의 결과값으로 새로운 배열을 만듬.  
https://developer.mozilla.org/ko/docs/Web/JavaScript/Reference/Global_Objects/Array/map  

repeat는 지정된 문자열을 지정된 수 만큼 복사해서 새 문자열을 생성한다.  
https://developer.mozilla.org/ko/docs/Web/JavaScript/Reference/Global_Objects/String/repeat  

join은 배열의 각 요소를 구분할 문자열을 지정. 해당 문자열로 배열을 연결시킨다.  
https://developer.mozilla.org/ko/docs/Web/JavaScript/Reference/Global_Objects/Array/join  

map 은 잘 아직 잘 모르겠고, 내 소스를 약간 수정한다면 다음과 같이 할 수 있을꺼 같다.
<pre>
function accum(s) {
	// your code
	var arr = s.split("");
	var result = "";
	for(var i=0;i<arr.length;i++){
		arr[i] = arr[i].toUpperCase()+arr[i].toLowerCase().repeat(i);
	}
	return arr.join("-");
}
</pre>
