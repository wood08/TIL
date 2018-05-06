Sum of positive
===============
원래 paiza 에서 문제 조금씩 풀고 있었는데, 여기선 문제 유출하지 말라고 그래서...
codewars는 상관 없는거 같으니 여기에 있는 문제 조금씩 풀어서 올리기로 함.

근데 영어다.
....
그래 뭐 영어공부도 같이 하지 뭐.

어떻게 사용하는지 아직 잘 파악 안돼서 우선 젤 쉬워보이는 문제로;;

link: [Sum of positive](https://www.codewars.com/kata/sum-of-positive)

문제
--

You get an array of numbers, return the sum of all of the positives ones.  
Example [1,-4,7,12] => 1 + 7 + 12 = 20  
Note: array may be empty, in this case return 0.  

배열로 숫자를 받고 양수인 숫자를 모두 더한 값을 return.  
배열이 비어있는 경우에는 return 0.  

간단한 문젠데... 사실 어려운 문제는 영어때문에 문제가 뭔지 파악하기도 힘들다ㅠㅠ  
오늘은 늦었으니까 우선 이거 하나 하고, 영어공부 합시다..흡...  

답변
--
  function positive_sum($arr) {
    // Your code here
    $result = 0;
    foreach($arr as $k=>$v){
      if($v > 0) $result += $v;
    }
    return $result;
  }

다른 사람들의 답변
------------
1. array_sum 랑 array_filter 를 쓰는 방법은 생각을 못했다. 사실 있는줄도 몰랐음.
2. array_reduce 를 사용하는 사람도 있음.