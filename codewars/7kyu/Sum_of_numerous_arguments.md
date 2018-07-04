Sum of numerous arguments(javascript)
===============

link: [Sum of numerous arguments](http://www.codewars.com/kata/sum-of-numerous-arguments)

문제
--
입력된 숫자의 합을 구한다.
음수가 입력되면 -1 을 return 한다.

ex
<pre>
findSum(1,2,3,4); // returns 10 
findSum(1,-2);    // returns -1 
findSum();        // returns 0
</pre>

답변
--
<pre>
function findSum(...a){
  //code here
  var result = 0;
  for(var i=0;i<a.length;i++){
    if(a[i]<0){
      result = -1;
      break;
    }
    result += a[i];
  }
  return result;
}
</pre>

reduce 를 쓰는 방법이 있을꺼 같은데 이거의 사용방법을 아직 잘 몰라서...ㅠㅠ

다른 사람들의 답변
------------
<pre>
function findSum(...nums) {
  return nums.reduce((a, b) => a < 0 || b < 0 ? - 1 : a + b, 0)
}
</pre>

<pre>
function findSum(){
  var args = [].slice.call(arguments);
  var sum = 0;
  if(!args.length > 0) return 0;
  var isPositive = args.every(function(item) {
    sum += item;
    return item >= 0;
  });
  return !isPositive ? -1 : sum;
}
</pre>

역시나 reduce 를 쓰는 방법이 있었다. 더할 숫자가 둘 다 음수인지 확인하면 됐었군. 암튼 reduce 는 많이 안써봐서, 많이 써보는게 답일꺼 같다.  
every 라는건 true, false 만 return 해주니 일을 한번 더 하는 셈인듯.  
  
every  
https://msdn.microsoft.com/ko-kr/library/ff679981(v=vs.94).aspx
