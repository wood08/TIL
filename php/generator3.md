generator 3
======================

[https://www.php.net/manual/ja/language.generators.comparison.php]

제너레이터와 Iterator 오브젝트의 비교
---------------------
제너레이터의 최대의 메리트는, 심플하게 쓸 수 있다는 것이다.
Iterator 를 실장하는것과 비교해서, 필요한 문구의 수가 꽤 적어진다.
또, 제너레이터를 쓴 코드가, 일반적으로 읽기 쉬워진다.
예를들면, 다음 함수와 클래스를 비교해보자.
이건 둘 다 같은 내용의 코드이다.

    <?php
    function getLinesFromFile($fileName) {
        if (!$fileHandle = fopen($fileName, 'r')) {
            return;
        }
     
        while (false !== $line = fgets($fileHandle)) {
            yield $line;
        }
     
        fclose($fileHandle);
    }
    
    // これを、下のクラスと比べてみると……
    
    class LineIterator implements Iterator {
        protected $fileHandle;
     
        protected $line;
        protected $i;
     
        public function __construct($fileName) {
            if (!$this->fileHandle = fopen($fileName, 'r')) {
                throw new RuntimeException('Couldn\'t open file "' . $fileName . '"');
            }
        }
     
        public function rewind() {
            fseek($this->fileHandle, 0);
            $this->line = fgets($this->fileHandle);
            $this->i = 0;
        }
     
        public function valid() {
            return false !== $this->line;
        }
     
        public function current() {
            return $this->line;
        }
     
        public function key() {
            return $this->i;
        }
     
        public function next() {
            if (false !== $this->line) {
                $this->line = fgets($this->fileHandle);
                $this->i++;
            }
        }
     
        public function __destruct() {
            fclose($this->fileHandle);
        }
    }
    ?>

그러나, 유연성을 실현하기 위해 희생하는것도 있다.
제너레이터는 전방으로 밖에 진행하지 않는 이터레이터 이기 때문에, 이런 반복처리가 시작되면 되돌리는 것이 불가능하다.
이건 즉, 같은 제너레이터를 몇번이나 재활용할 수 밖에 없다는 것이다.
제너레이터 함수를 불러서 다시 한번 만들 필요가 있다. 
