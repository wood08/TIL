Pizza Payments(javascript)
=============
문제
------------

Link: [Pizza Payments](http://www.codewars.com/kata/pizza-payments/javascript)

Kate and Michael want to buy a pizza and share it. Depending on the price of the pizza, they are going to divide the costs:

If the pizza is less than €5,- Michael invites Kate, so Michael pays the full price.
Otherwise Kate will contribute 1/3 of the price, but no more than €10 (she's broke :-) and Michael pays the rest.
How much is Michael going to pay? Calculate the amount with two decimals, if necessary.

답변
--------------

<pre>
function michaelPays(costs) {
  //Insert your code here
  if(costs < 5){
    costs = Number(costs.toFixed(2));
  } else if (costs < 30){
    costs = Number((costs/3*2).toFixed(2));
  } else {
    costs = Number((costs-10).toFixed(2));
  }
  return costs;
}
</pre>


생각할 점
------------------------
1. 자바스크립트 오류인지 계산과정이 복잡해지면 소수점 아래가 지저분해진다. ex)12.000000000001  
toFixed 를 사용하면 정리 가능.
2. toFixed 를 쓰면 문자열로 인식된다. Number 를 써줘야지 숫자열로 바뀜.
