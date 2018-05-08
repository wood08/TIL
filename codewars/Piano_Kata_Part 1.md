Piano Kata, Part 1
===================

문제
------------
건반수를 입력 받고 입력한 숫자의 건반이 검은색인지 흰색인지 알아보는 문제  
첨에 영어해석을 잘못해서 헤맸다.  

Link: [Piano Kata, Part 1](https://www.codewars.com/kata/piano-kata-part-1)

답변
--------------

    function blackOrWhiteKey($keyPressCount) {
        // your code here
        $arr[0] = ['W', 'B', 'W'];
        $arr[1] = ['W', 'B', 'W', 'B', 'W'
                  , 'W', 'B', 'W', 'B', 'W', 'B', 'W'];
        $max_piano = 88;

        $keyPressCount = $keyPressCount % $max_piano;
        if($keyPressCount < 3){
          $keyPressCount = $arr[0][ ($keyPressCount==0?$keyPressCount:$keyPressCount-1)];
        } else {
          $keyPressCount -= 3;

          $keyPressCount = $keyPressCount % count($arr[1]);
          $keyPressCount = $keyPressCount==0 ? $arr[1][0] : $arr[1][$keyPressCount-1];
        }
        return $keyPressCount=='W' ? 'white' : 'black';
    }


다른 사람들의 답변
------------------------
1. 검은건반이 있는 위치(숫자) 배열을 만들고, 입력한 숫자의 나머지값에서 해당 배열에 일치하는 숫자가 있는지 확인하는 식으로 된 소스를 보니  
내소스 왜케 구리니.   
확실히 다른사람의 소스 보는게 많은 도움이 되는거 같다.
건반 구조도 제대로 알게 됐음.


    function blackOrWhiteKey($keyPressCount)
    {
      $key = ($keyPressCount - 1) % 88 % 12;
      $blackKeys = [1, 4, 6, 9, 11];
      return in_array($key, $blackKeys) ? 'black' : 'white';
    }
