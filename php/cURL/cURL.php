<?php
function cURL_test(){

    $url = 'https://www.google.com';
    $access_token = 'ACCESS_TOKEN';

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);

    if($access_token != 'ACCESS_TOKEN'){
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$access_token));
    }

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

cURL_test();