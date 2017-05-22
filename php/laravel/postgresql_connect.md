postgresql 연동 방법
========================
.env 파일 수정

DB_CONNECTION=pgsql</br>
DB_HOST=127.0.0.1	# DB 접속 IP</br>
DB_PORT=5432		# DB 접속 포트</br>
DB_DATABASE=[DB 이름]</br>
DB_USERNAME=[user 이름]</br>
DB_PASSWORD=[패스워드]</br>


config/database.php 파일 수정

'connections' => [</br>
	'pgsql' => [		// 없으면 추가하기</br>
		'driver' => 'pgsql',</br>
		'host' => env('DB_HOST', 'localhost'),</br>
		'port' => env('DB_PORT', '5432'),</br>
		'database' => env('DB_DATABASE', [DB 이름]),</br>
		'username' => env('DB_USERNAME', [user 이름]),</br>
		'password' => env('DB_PASSWORD', [패스워드]),</br>
		'charset' => 'utf8',</br>
		'prefix' => '',</br>
		'schema' => 'public',</br>
	],</br>
],</br>