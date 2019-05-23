Iterator 인터페이스
======================
[https://www.php.net/manual/ja/class.iterator.php]

소개
---------------------
외부의 이터레이터 또는 오브젝트 자신을 반복이용을 하기 위한 인터페이스다.

인터페이스 개요
---------------------
    Iterator extends Traversable {
        /* メソッド */
        abstract public current ( void ) : mixed
        abstract public key ( void ) : scalar
        abstract public next ( void ) : void
        abstract public rewind ( void ) : void
        abstract public valid ( void ) : bool
    }
    
정의가 된 이터레이터
--------------------
PHP에는 많은 이터레이터가 이미 준비되어 있으며, 일상의 업무에 사용할 수 있다.
그 일람은 SPL이터레이터 를 참조 해주십시오.

예
---------------------

예1. 기본적인 이용법  
이 예는, 이터레이터로 foreach 를 썻을때, 어떤 순번으로 메소드가 불러지는지 나타내고 있다.
    
    <?php
    class myIterator implements Iterator {
        private $position = 0;
        private $array = array(
            "firstelement",
            "secondelement",
            "lastelement",
        );  
    
        public function __construct() {
            $this->position = 0;
        }
    
        public function rewind() {
            var_dump(__METHOD__);
            $this->position = 0;
        }
    
        public function current() {
            var_dump(__METHOD__);
            return $this->array[$this->position];
        }
    
        public function key() {
            var_dump(__METHOD__);
            return $this->position;
        }
    
        public function next() {
            var_dump(__METHOD__);
            ++$this->position;
        }
    
        public function valid() {
            var_dump(__METHOD__);
            return isset($this->array[$this->position]);
        }
    }
    
    $it = new myIterator;
    
    foreach($it as $key => $value) {
        var_dump($key, $value);
        echo "\n";
    }
    ?>
    
위 예의 출력은, 예를 들면 아래와 같다.

    string(18) "myIterator::rewind"
    string(17) "myIterator::valid"
    string(19) "myIterator::current"
    string(15) "myIterator::key"
    int(0)
    string(12) "firstelement"
    
    string(16) "myIterator::next"
    string(17) "myIterator::valid"
    string(19) "myIterator::current"
    string(15) "myIterator::key"
    int(1)
    string(13) "secondelement"
    
    string(16) "myIterator::next"
    string(17) "myIterator::valid"
    string(19) "myIterator::current"
    string(15) "myIterator::key"
    int(2)
    string(11) "lastelement"
    
    string(16) "myIterator::next"
    string(17) "myIterator::valid"