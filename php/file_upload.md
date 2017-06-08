파일업로드
===========================
	// upload.html
	// 라라벨 기준(laravel) 일때
	{{Form::open(array('url' => '_URL_','files'=>'true') )}}
	<div class="layer-content">
		<input type="file" name="userfile" id="userfile" value="파일선택">
		<button type="submit">파일전송</button>
	</div>
	{{ Form::close() }}
	
	// php
	<form enctype="multipart/form-data" action="_URL_" method="POST">
		<div class="layer-content">
			<input type="file" name="userfile" id="userfile" value="파일선택">
			<button type="submit">파일전송</button>
		</div>
	</form>



	// upload.php
	public function upload(Request $request){
        $target_dir = "uploads/";
        $today = date("Ymd");

		$filename = $_FILES["userfile"]["name"];
		$saveFilename =  $today."_".$filename;
		$tmp_file = $_FILES['userfile']['tmp_name'];

		$UpFilePathInfo = pathinfo($filename);
		$UpFileExt		= strtolower($UpFilePathInfo["extension"]);

		if($UpFileExt != "xls" && $UpFileExt != "xlsx") {
			echo("<script>alert('엑셀 파일이 아님.');</script>");
			exit;
		}
            
		@move_uploaded_file($tmp_file, $target_dir.$saveFilename);   // 파일복사
		@unlink($tmp_file);
		
		// 파일 저장 완료
		            
		$excelData = Excel::selectSheets('sheet1')->load($target_dir.$saveFilename);
		$excelData = $excelData->select(array('1', '2', '3'))->get();	// 1,2,3 열의 데이터를 읽어온다.

		foreach ($excelData as $exkey => $exval){
			$exval = json_decode($exval, true);		// json 형식인 데이터를 배열형식으로 바꾼다.
			echo $exval['1'].', '.$exval['2'].', '.$exval['3'];
		}

        @unlink($target_dir.$saveFilename); // 파일 삭제
        exit;
    }