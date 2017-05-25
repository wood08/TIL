카카오톡에 링크 보내기
==================
1. 카카오 개발자 등록을 한다. (https://developers.kakao.com)
2. 앱등록을 한다.</br>
![make_app](img/make_app.PNG)</br>
3. 설정>일반 페이지로 이동</br>
![setting](img/setting.PNG)</br>
4. 플랫폼추가>웹에 링크하고 싶은 사이트 도메인을 입력</br>
![in_url](img/in_url.PNG)</br>
5. 테스트 페이지 만들기

link_test.html

	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"/>
	<title>API Demo - Kakao JavaScript SDK</title>
	<script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>

	</head>
	<body>
	<a id="kakao-link-btn" href="javascript:;">
		<img src="//dev.kakao.com/assets/img/about/logos/kakaolink/kakaolink_btn_small.png"/>
	</a>
	</body>
	</html>

	<script type='text/javascript'>
	Kakao.init([개발자센터에서 발급받은 JavaScript key 입력]);
	var test_url = 'www.google.co.kr';	// 카톡 개발자>설정>일반>플랫폼>웹에 입력한 사이트도메인과 동일해야함.
	Kakao.Link.createTalkLink({
		container: '#kakao-link-btn',
		label: 'test',

		webLink: {
			text: 'kakao link test',
			url: test_url
		},
		fail: function () {
			alert('fail');
		}
	});
	</script>
	
	
자세한 설명은 개발가이드 참고
https://developers.kakao.com/docs/js