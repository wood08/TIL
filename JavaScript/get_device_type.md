디바이스 정보-핸드폰종류 알아내는 방법
======================
html 페이지를 만든다.

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>핸드폰 종류 알아보기(애플/안드로이드)</title>
	</head>
	<body>

	</body>
	</html>

	<script>
		alert(navigator.userAgent);
		if( navigator.userAgent.match('iPhone') || navigator.userAgent.match('iPod') ){
			alert('애플~');
		} else {
			alert('안드로이드~');
		}
	</script>
