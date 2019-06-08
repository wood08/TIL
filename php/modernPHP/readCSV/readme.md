CSV 파일 read
============================

csv 파일에 있는 url 읽어서, 해당 url 로 접속이 가능한지 알아보는 스크립트

composer.json 파일과 composer.lock 파일 생성을 위해 다음 명령어 실행

csv 파일을 읽기 위한 컴포넌트 설치
https://packagist.org/packages/league/csv
    
    $ composer require league/csv
    
HTTP 메시지를 처리하는 컴포넌트 설치
https://packagist.org/packages/guzzlehttp/guzzle

    $ composer require guzzlehttp/guzzle


composer.lock 파일이 있는 경우 다음 명령어로 컴포넌트 설치 가능(vender 폴더 생성)

    $ composer install

컴포넌트의 버전 update 등으로 composer.lock 파일을 갱신하고 싶으면 다음 명령어 실행

    $ composer update

스크립트 실행방법

    $ php index.php data.csv 