generator 
======================
인터넷에서 PHP랑 자바스크립트 관련으로 검색하면서 떠돌다가, [PHP에서 GCM 푸시 빠르게 보내기](https://www.slideshare.net/wan2land/php-gcm-feat-async-generator) 라는 슬라이드를 발견.  
대용량 푸시 보낼때의 고충을 알기때문에 슬라이드를 보다가 메모리 문제 때문에 제너레이터를 썼다고 되어있더라.
근데 내가 제너레이트가 뭔지 몰라서 PHP 매뉴얼 공부겸 겸사겸사 서툴지만 일한 번역을..

[https://www.php.net/manual/ja/language.generators.overview.php]

generator 란
---------------------
제너레이터를 쓰면, 심플한 이터레이터를 간단하게 실장(実装) 할 수 있다. 인터레이터 인터페이스를 실장한 클래스를 준비(用意)하는 오버헤드나 복잡함을 걱정할 필요가 없다.  

제너레이터를 사용하면, foreach 로 데이터를 순서대로 처리하는 코드를 작성할때 메모리내에서 배열을 구성하지 않아도 된다.
메모리내에서 배열을 구성하면 memory_limit 를 넘어버릴수도 있고, 무시할 수 없을 정도로 시간이 걸릴수도 있다.
배열을 만드는 대신에, 제너레이터 함수를 사용하기로 한다.
이건 보통의 함수와 같지만, 제너레이터함수는 한번만 return 하는것이 아니라, 필요에 따라서 몇번이나 yield 하는것이 가능하다.
즉, 값을 반복해서 돌려준다는 것이다.

심플한 예로, range() 함수를 제너레이터로 실장해서 수정해봅시다.
원 range() 함수는, 모든 값을 가지고 있는 배열을 만들어서 그것을 돌려준다.
결과적으로, 꽤 큰 배열이 될 가능성이 있다.
예를들면 range(0, 1000000) 을 실행하면, 100MB 를 넘는 메모리를 사용하게 됩니다.

그 대체로, 제너레이터 xrange()를 실장합니다.
필요한 메모리는 이터레이터 오브젝트를 만들어서 제너레이터 내부에 상태를 기록(状態を記録)할때 쓰는것 뿐입니다.(이 부분 제대로 이해 가능하도록 수정 필요)
1KB 미만으로 해결되겠지요.

예1. 제너레이터를 써서 range() 를 실장

    <?php
    function xrange($start, $limit, $step = 1) {
        if ($start < $limit) {
            if ($step <= 0) {
                throw new LogicException('Step must be +ve');
            }
    
            for ($i = $start; $i <= $limit; $i += $step) {
                yield $i;
            }
        } else {
            if ($step >= 0) {
                throw new LogicException('Step must be -ve');
            }
    
            for ($i = $start; $i >= $limit; $i += $step) {
                yield $i;
            }
        }
    }
    
    /*
     * 次の例で、range() と xrange() が同じ結果を返すことに注目しましょう
     */
    
    echo 'Single digit odd numbers from range():  ';
    foreach (range(1, 9, 2) as $number) {
        echo "$number ";
    }
    echo "\n";
    
    echo 'Single digit odd numbers from xrange(): ';
    foreach (xrange(1, 9, 2) as $number) {
        echo "$number ";
    }
    ?>

위 예의 출력은 아래와 같음.

    Single digit odd numbers from range():  1 3 5 7 9 
    Single digit odd numbers from xrange(): 1 3 5 7 9 

generator 오브젝트
----------------------- 
제너레이터 함수를 처음에 불렀을때는, 내부 클래스 제너레이터의 오브젝트를 돌려준다.
이 오브젝트의 이터레이터 인터페이스를 실장해서, 진행밖에 할수없는 이터레이터 오브젝트와 똑같은 행동을 한다.
그리고, 이 오브젝트가 제공하는 메소드를 써서, 값을 보내거나 받거나 해서 제너레이터의 상태를 조작할 수 있다.
 
-------------------------
첨에 제너레이트를 찾아보니 파이썬 이야기가 많이 나오더라.  
그리고 자바스크립트도.  
PHP는 영문서가 많아서 일한번역을 해봤는데, 이거 은근 내용을 자세하게 보게돼서 괜찮은거 같다.  
근데 자바스크립트에서 generator 는 ES6(ES2015) 내용이고, 그 후에 ES8(ES2017) 에서 async/await 가 나왔다고...
요부분은 추가로 공부가 필요할 것 같다.
우선 그 전에 이터레이터에 관해서 보도록 하자.