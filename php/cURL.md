cURL
====================
['http://php.net/manual/kr/book.curl.php'](http://php.net/manual/kr/book.curl.php){: target="_blank" }</br>

	public function cURL_test(){

        $url = 'https://www.google.com';

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_AUTOREFERER, true);

        $https_check = explode('/', $url);
		
        if($https_check[0] == 'https:'){	// https 인증 관련 추가
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        }
        $c = curl_exec($ch);
        $resultCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if( $resultCode == '200'){
			// result success
        } else {
            // result fail
			exit;
        }

        echo("<meta http-equiv='refresh' content='0; url=".$url."'>");   	// 새창이 아님
        // echo("<script>window.open('".$url."', '_blank');</script>");    	// 새창으로 띄우기

        exit;
    }