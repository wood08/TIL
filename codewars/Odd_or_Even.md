Odd or Even?
=============
문제
------------
숫자 배열을 입력받고, 해당 배열의 합이 홀수(odd)인지, 짝수(even)인지 확인하는 문제

Link: [Odd or Even?](https://www.codewars.com/kata/odd-or-even)

답변
--------------

    function odd_or_even(array $a): string {
      // Your code here
      return array_sum($a)%2==0 ? 'even' : 'odd';
    }

이거 왠지 php 에서 배열값을 다 더해주는 함수가 있을꺼 같아서 찾아보니 역시나였다.  
http://php.net/manual/kr/function.array-sum.php

다른 사람들의 답변
------------------------
1. 2의 나머지 값이 0인지 아닌지 꼭 확인 할 필요도 없음. 1이면 true, 0이면 false이니 다음과 같이 코드를 더 줄일 수 있다.

</pre>
    function odd_or_even(array $a): string {
      return array_sum($a) % 2 ? 'odd' : 'even';
    }
</pre>
