Array.diff(javascript)
===============

link: [Array.diff](https://www.codewars.com/kata/array-dot-diff?utm_source=newsletter)

문제
--
Your goal in this kata is to implement a difference function, which subtracts one list from another and returns the result.

It should remove all values from list a, which are present in list b.
<pre>
array_diff([1,2],[1]) == [2]
</pre>
If a value is present in b, all of its occurrences must be removed from the other:
<pre>
array_diff([1,2,2,2,3],[2]) == [1,3]
</pre>

답변
--
<pre>
function array_diff(a, b) {
	for(var i=0; i<b.length; i++){
		while(a.indexOf(b[i]) != -1){
		  a.splice(a.indexOf(b[i]),1);
		}
	}
  return a;
}
// Time: 675 ms
</pre>

다른 사람들의 답변
------------
<pre>
function array_diff(a, b) {
  return a.filter(function(x) { return b.indexOf(x) == -1; });
}
</pre>

<pre>
function array_diff(a, b) {
  return a.filter(e => !b.includes(e));
}
</pre>

<pre>
function array_diff(a, b) {

    var arr = new Array();
    
    for(var i = 0;i<a.length;i++){
        if(b.indexOf(a[i])<0){
            arr.push(a[i]);
        }
    }
  
    return arr;
}
</pre>

생각할 점
------------------------
1. [array.filter](https://developer.mozilla.org/ko/docs/Web/JavaScript/Reference/Global_Objects/Array/filter)
