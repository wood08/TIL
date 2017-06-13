애플 날짜 관련 이슈
================================

아이폰(애플)인 경우 yyyy-mm-dd hh:mm:ss 인 날짜 포맷을 지원하지 않는다.</br>
디바이스정보를 가져와서 애플인 경우 mm/dd/yyyy hh:mm:ss 로 변경 필요함.</br>
</br>
javascript 기준</br>

	if( navigator.userAgent.match('iPhone') || navigator.userAgent.match('iPod') || navigator.userAgent.match('iPad')) {
		var date = inDate.substring(0,10).split('-');
		var time = inDate.substr(11);
		inDate= date[1] + '/' + date[2] + '/' + date[0] + ' ' + time;
	}