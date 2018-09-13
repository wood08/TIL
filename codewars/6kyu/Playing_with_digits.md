Playing with digits(javascript)
===============

link: [Playing with digits](http://www.codewars.com/kata/playing-with-digits/javascript)

문제
--
Some numbers have funny properties. For example:  
<pre>
89 --> 8¹ + 9² = 89 * 1  

695 --> 6² + 9³ + 5⁴= 1390 = 695 * 2  

46288 --> 4³ + 6⁴+ 2⁵ + 8⁶ + 8⁷ = 2360688 = 46288 * 51  
</pre>
Given a positive integer n written as abcd... (a, b, c, d... being digits) and a positive integer p we want to find a positive integer k, if it exists, such as the sum of the digits of n taken to the successive powers of p is equal to k * n. In other words:  
<pre>
Is there an integer k such as : (a ^ p + b ^ (p+1) + c ^(p+2) + d ^ (p+3) + ...) = n * k  
</pre>
If it is the case we will return k, if not return -1.  

Note: n, p will always be given as strictly positive integers.  
<pre>
digPow(89, 1) should return 1 since 8¹ + 9² = 89 = 89 * 1
digPow(92, 1) should return -1 since there is no k such as 9¹ + 2² equals 92 * k
digPow(695, 2) should return 2 since 6² + 9³ + 5⁴= 1390 = 695 * 2
digPow(46288, 3) should return 51 since 4³ + 6⁴+ 2⁵ + 8⁶ + 8⁷ = 2360688 = 46288 * 51
</pre>

답변
--
<pre>
function digPow(n, p){
  // ...
  var num_arr = String(n).split('');
  var sum_num = 0;
  num_arr.forEach(x => { sum_num+=Math.pow(Number(x), p); p++;});
  if ( sum_num % n == 0 ) return sum_num / n;
  return -1;
}
// Time: 719ms
</pre>

다른 사람들의 답변
------------
<pre>
function digPow(n, p) {
  var x = String(n).split("").reduce((s, d, i) => s + Math.pow(d, p + i), 0)
  return x % n ? -1 : x / n
}
</pre>

<pre>
function digPow(n, p){
  var ans = (''+n).split('')
    .map(function(d,i){return Math.pow(+d,i+p) })
    .reduce(function(s,v){return s+v}) / n
  return ans%1 ? -1 : ans    
}//z.
</pre>

<pre>
function digPow(n, p){
  var ans = n.toString().split('')
             .map((v,i) => Math.pow(parseInt(v), i+p))
             .reduce((a,b) => a+b) / n;
  return ans%1 == 0 ? ans : -1;
}
</pre>

생각할 점
------------------------
1. reduce 를 쓰고싶었는데 forEach 써버렸다.
2. 숫자 나눌때 다른사람들도 string 으로 변환한담에 split() 쓰는거 보고 왠지 안심.
3. if 문 안쓰고 ? 써도 됐는데 왜 if 문이 땡겼는지 모르겠음.