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
1. 
<pre>
function predictAge(...a){
  return ~~(a.reduce((a,x)=>a+x*x,0)**0.5/2)
}
</pre>

2. 
<pre>
function predictAge(...n){
   return (Math.hypot(...n)/2)>>0 
}
</pre>

거의 하드코딩 수준으로 해서...  

function 에서 인수앞에 ... 을 넣으면 '나머지 매개변수' 라고 한다.  
함수에 전달되는 인수의 값들이 하나의 배열로 생성된다.  
마지막 인수만 사용 가능함.  
https://developer.mozilla.org/ko/docs/Web/JavaScript/Reference/Functions/rest_parameters  

1번 소스에서 ...a 로 값을 받고 있으니 a라는 배열에 age1,age2,age3,age4,age5,age6,age7,age8 의 값들이 배열로 들어가는 것이다.  

reduce 는 배열의 요소를 왼쪽에서 오른쪽으로 이동하면서 누적계산을 한다.  
https://developer.mozilla.org/ko/docs/Web/JavaScript/Reference/Global_Objects/Array/Reduce  
예제를 보면 이해가 가는데 막상 설명하려니 어렵다. 이해를 제대로 못한거겠지.  

Math.sqrt 와 **0.5 는 동일한 기능인데(제곱근 구하기), 왜 **0.5 로 했을까. 검색을 해보니 이거가지고 레딧에서 토론한것도 있더라(파이썬이지만).  
https://www.reddit.com/r/Python/comments/jzgn8/sqrtx_vs_x05/  
하, 근데 영어야...  
번역기 돌려서 대충 봐보니 여러의견이 충돌한거 같은데, 이 논란의 글이 거의 6년전꺼라..  

~~ 은 Math.floor() 와 같은 기능이라고 함.  
https://stackoverflow.com/questions/5971645/what-is-the-double-tilde-operator-in-javascript  
아무래도 1번 코드 만든 사람이 이런 약어? 를 좋아하는거 같다.

Math.hypot 는 제곱합의 제곱근을 반환하는 함수.  
https://msdn.microsoft.com/ko-kr/library/dn858234(v=vs.94).aspx  