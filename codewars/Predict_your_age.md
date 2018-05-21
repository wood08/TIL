Predict your age!(javascript)
===============

link: [Predict your age!](https://www.codewars.com/kata/predict-your-age)

문제
--

1. 입력값들을 각각 제곱한다.
2. 1번의 값들을 모두 합한다.
3. 2번의 값의 제곱근을 구한다.
4. 3번의 값의 반을 나눈다.
5. 4번의 값을 정수로 만든다.(소수점 버리기)

답변
--
<pre>
function predictAge(age1,age2,age3,age4,age5,age6,age7,age8){
  // your code
  var result = age1*age1 + age2*age2 + age3*age3 + age4*age4 + age5*age5 + age6*age6 + age7*age7 + age8*age8;
  return parseInt(Math.sqrt(result)/2); 
}
</pre>

다른 사람들의 답변
------------
<pre>
function predictAge(...a){
  return ~~(a.reduce((a,x)=>a+x*x,0)**0.5/2)
}
</pre>

<pre>
function predictAge(...n){
   return (Math.hypot(...n)/2)>>0 
}
</pre>

거의 하드코딩 수준으로 해서... 