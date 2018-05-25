Find The Parity Outlier
===============

link: [Find The Parity Outlier](https://www.codewars.com/kata/find-the-parity-outlier/php)

문제
--

입력된 숫자 중 한개만 양수이거나 음수인데 이 수를 출력.

ex)
<pre>
[2, 4, 0, 100, 4, 11, 2602, 36]
Should return: 11 (the only odd number)

[160, 3, 1719, 19, 11, 13, -21]
Should return: 160 (the only even number)
</pre>

답변
--
<pre>
function find($integers) {
  $integers_arr = array_map('test',$integers);
  if(array_count_values($integers_arr)[0] == 1){
    $k = array_search(0, $integers_arr);
  } else {
    $k = array_search(1, $integers_arr);
  }
  return $integers[$k];
}
function test($a){return abs($a)%2;}
</pre>

다른 사람들의 답변
------------
<pre>
function find($a) {
  $odds = [];
  $evens = [];
  foreach ($a as $n) {
    if ($n % 2) array_push($odds, $n);
    else array_push($evens, $n);
  }
  return count($evens) === 1 ? $evens[0] : $odds[0];
}
</pre>

<pre>
function find($i) {
   foreach ($i as $x)
      $x % 2 == 0 ? $even[] = $x : $odd[] = $x;
   return $odd < $even ? $odd[0] : $even[0];
}
</pre>

괜히 너무 복잡하게 생각한거 같다.  
음수배열 하나, 양수배열 하나 만들어서 배열크기가 1인것을 출력시키는 쪽으로 했으면 금방인데..  
쉽게생각하자~