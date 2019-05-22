generator 2 
======================

[https://www.php.net/manual/ja/language.generators.syntax.php]

generator 의 구문
---------------------
제너레이터 함수는 보기에는 보통의 함수와 거의 비슷하다.
다른것은, 값을 돌려주는것이 아니라, 필요한 만큼 값을 yield 하는 것이다.

제너레이터 함수가 불렸을때, 반복처리가 가능한 오브젝트를 돌려준다.
이 오브젝트를(foreach 문 등으로) 반복하면, 값이 필요할때마다 PHP 가 제너레이터 함수를 부른다.
그리고, 제너레이터가 값을 yield 한 시점의 상태를 보존해서, 다음의 값이 필요해졌을때는 거기서부터 재개할 수 있도록 합니다.

yield 할 수 있는 값이 없어지면, 제너레이터 함수는 아무것도 하지 않고 종료합니다.
호출한 코드에서는, 배열의 요소를 모두 처리한것처럼, 그대로 처리가 계속된다.

주의:
제너레이터는 값을 돌려주는것이 불가능하다.
값을 돌려주려고 하면 컴파일 에러가 일어난다.
제너레이터의 안에서 빈 값을 return 하면 문법상 문제는 없으나, 거기서 제너레이터는 종료된다.

yield 키워드
-----------------------
제너레이터 함수의 핵심(肝??)이 되는것은 yield 키워드다.
매우 심플하게 쓰면, yield 문은 보기에는 return 문과 거의 같다.
단, return 의 경우에는 거기서 함수의 실행을 종료해서 값을 돌려주는것에 반해, yield 의 경우에는 제너레이터를 부른 반복문에 값을 돌려주고 제너레이터 함수의 실행을 일시정지 한다.

예1. 값을 yield 하는 단순한 예

    <?php
    function gen_one_to_three() {
        for ($i = 1; $i <= 3; $i++) {
            // yield を繰り返す間、$i の値が維持されることに注目しましょう
            yield $i;
        }
    }
    
    $generator = gen_one_to_three();
    foreach ($generator as $value) {
        echo "$value\n";
    }
    ?>

위 예의 출력 결과는 다음과 같다.

    1
    2
    3

주의: 내부적으로는 整数の連番 의 키가 yield 하는 값과 페어가 되어, 배열과 같아집니다.

경고: yield 를 식의 콘텍스트(대입식의 오른쪽 등)에 쓸 경우에는, yield 문을 괄호로 감쌀 필요가 있다.
예를들면, PHP5 에서는 다음과 같이 된다.

    $data = (yield $value);
      
다음과 같이 쓰면, PHP5 에서는 parse 에러가 난다.

    $data = yield $value;
    
PHP7 에서는, 이런 제한은 없다.
이 구문은 Generator::send() 메소드와 같이 쓸 수 있다.

값과 키의 yield
------
PHP는 숫자 배열뿐만 아니라 연관 배열에도 대응하고 있다.
제너레이터도 예외가 아니다.
앞의 예와 같이 단순한 값을 yield 하는게 아니라, 값과 동시에 키도 yield 하는 것이 가능하다.  
키와 값을 페어로 yield 하는 구문은 연관 배열의 정의와 비슷하며, 다음과 같다.

예2. 키/값의 페어 yield

    <?php
    /*
     * 入力は各フィールドをセミコロンで区切ったものです
     * 最初のフィールドが ID となり、これをキーとして使います
     */
    
    $input = <<<'EOF'
    1;PHP;$が大好き
    2;Python;インデントが大好き
    3;Ruby;ブロックが大好き
    EOF;
    
    function input_parser($input) {
        foreach (explode("\n", $input) as $line) {
            $fields = explode(';', $line);
            $id = array_shift($fields);
    
            yield $id => $fields;
        }
    }
    
    foreach (input_parser($input) as $id => $fields) {
        echo "$id:\n";
        echo "    $fields[0]\n";
        echo "    $fields[1]\n";
    }
    ?>

위 예의 출력은 아래와 같다.

    1:
        PHP
        $が大好き
    2:
        Python
        インデントが大好き
    3:
        Ruby
        ブロックが大好き

경고: 좀전의 예와 같이 값만을 yield 할때와 같이, 키/값 의 페어를 식의 콘텍스트에 yield 하는 경우에도 yield 문을 괄호로 감쌀 필요가 있다.
    
    $data = (yield $key => $value);
    
null 값의 yield
------  
아무 인수도 주지않고 yield 부르면, NULL 값을 yield 한다.
키는 자동으로 할당된다.

예3. NULL 의 yield

    <?php
    function gen_three_nulls() {
        foreach (range(1, 3) as $i) {
            yield;
        }
    }
    
    var_dump(iterator_to_array(gen_three_nulls()));
    ?>

위 예의 출력은 이하와 같음

    array(3) {
      [0]=>
      NULL
      [1]=>
      NULL
      [2]=>
      NULL
    }

참조에 의한 yield
------  
제너레이터 함수는, 값을 참조해서 yield 하는 것도 가능하다. 
함수의 결과를 참조로 돌려주는 것과 같게, 참수명의 앞에 앰퍼샌드를 붙인다.

예4. 참조에 의한 값의 yield

    <?php
    function &gen_reference() {
        $value = 3;
    
        while ($value > 0) {
            yield $value;
        }
    }
    
    /*
     * $number をループ内で変更していることに注目しましょう。
     * このジェネレータは参照を yield するので、
     * gen_reference() 内の $value が変わります。
     */
    foreach (gen_reference() as &$number) {
        echo (--$number).'... ';
    }
    ?>

위 예의 출력은 아래와 같다.

    2... 1... 0... 

yield from 에 의한 제너레이터 이양
------
PHP7에서는, 제너레이터의 이양이 가능하게 되었다.
다른 제너레이터나 Traversable 오브젝트 또는 배열에서, array by using the yield from 키워드를 써서 값을 yield 할수있다.
밖의 제너레이터는, 안의 제너레이터(또는 오브젝트나 배열)에서 받는 모든 값을 yield 해, 아무것도 받을 수 없게 되면 밖의 제너레이터의 처리를 속행한다.  
제네레이터에 대해 yield from 을 쓰는 경우, yield from 식은 내부 제너레이터 가 반환하는 값을 돌려준다.

예6. yield from 의 기본적인 사용법

    <?php
    function count_to_ten() {
        yield 1;
        yield 2;
        yield from [3, 4];
        yield from new ArrayIterator([5, 6]);
        yield from seven_eight();
        yield 9;
        yield 10;
    }
    
    function seven_eight() {
        yield 7;
        yield from eight();
    }
    
    function eight() {
        yield 8;
    }
    
    foreach (count_to_ten() as $num) {
        echo "$num ";
    }
    ?>

위의 출력값은 다음과 같다.

    1 2 3 4 5 6 7 8 9 10 

예7. yield from 의 반환값

    <?php
    function count_to_ten() {
        yield 1;
        yield 2;
        yield from [3, 4];
        yield from new ArrayIterator([5, 6]);
        yield from seven_eight();
        return yield from nine_ten();
    }
    
    function seven_eight() {
        yield 7;
        yield from eight();
    }
    
    function eight() {
        yield 8;
    }
    
    function nine_ten() {
        yield 9;
        return 10;
    }
    
    $gen = count_to_ten();
    foreach ($gen as $num) {
        echo "$num ";
    }
    echo $gen->getReturn();
    ?>

위의 출력값은 다음과 같다.

    1 2 3 4 5 6 7 8 9 10



-------------------------
제너레이터의 사용법에 관한 내용  
중간에 주의 같은거 너무 길어져서 우선 패스함...