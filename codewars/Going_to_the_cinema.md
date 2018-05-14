Going to the cinema
=============
문제
------------

영화 관람을 위한 카드 가격 card.  
평범하게 영화를 관람할 경우 영화 한 회의 가격 ticket.  
카드를 구입한 경우 티켓값의 perc 만큼만 내면 됨.  

카드를 구입한 경우 몇번 영화를 봐야지 이득인지 계산하라.

Link: [Going to the cinema](https://www.codewars.com/kata/going-to-the-cinema/php)


답변
--------------

    function movie($card, $ticket, $perc) {
      // your code

      $cnt = 1;
      $card_price = $card;
      while(true){
        $ticket_price = $ticket * $cnt;
        $card_price += $ticket * pow ($perc, $cnt);
        if(ceil($card_price) < $ticket_price){
          return $cnt;
        }
        $cnt++;
      }
    }



다른 사람들의 답변
------------------------
1. do while 은 첨봤다.  
제곱도 함수가 아니라 별 두개로 처리하고.  
최대한 변수를 선언하지 않을려고 했다.

<pre>
function movie($card, $ticket, $perc) {
    $need = 0;
    do {
        $need++;
        $card += $ticket * ($perc ** $need);
    } while (ceil($card) >= ($ticket * $need));   
    return $need;
}
</pre>
