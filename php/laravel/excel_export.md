엑셀파일 export
=========================

	// excelExport.php
	
	use PHPExcel_NamedRange;
	use PHPExcel_Cell_DataValidation;
	// require_once("/apppath//vendor/phpoffice/phpexcel/Classes/PHPExcel/NamedRange.php");
    // require_once("/apppath/vendor/phpoffice/phpexcel/Classes/PHPExcel/Cell/DataValidation.php");

	public function excelExport(){
		Excel::create($subject, function($excel) use($data) {
		
			$excel->sheet('sheet1', function($sheet) use($data) {	// sheet1 생성
				$sheet->SetCellValue("A1", "test1");		// A1 칸에 test1 값을 넣는다.
				$sheet->SetCellValue("A2", "test1");
				$sheet->SetCellValue("A3", "test1");
				$sheet->SetCellValue("A4", "test2");
				$sheet->SetCellValue("A5", "test3");
				$sheet->SetCellValue("A6", "test4");
			});

			$excel->sheet('sheet2', function($sheet) use($data) {	// sheet2 생성

				$sheet->setHeight(1, 31);		// 행 높이 설정(높이, 열갯수)
				$sheet->setAutoSize(true);		// 파일 크기 자동설정
				$sheet->freezeFirstRow();		// 행 고정
				$sheet->setColumnFormat(array(	// 특정 열 서식을 설정
					'R' => '0'
				));

				$sheet->setSize('A', 0, 20);	// A 열 넓이 0 으로 설정

				$sheet->row(1, [
					"data1", "data2", "data3", "data4"
				]);
				
				$sheet->row(1, function($row) {
					// call cell manipulation methods
					$row->setBackground('#dedede');		// 배경색 설정
					$row->setFontWeight('bold');		// 글꼴 설졍
					$row->setAlignment('center');		// 수평 정렬 설정
					$row->setValignment('center');		// 수직 정렬 설정
				});

				foreach($data as $key => $val) {
					$sheet->row(($key+2), [
						$val->data1, $val->data2, $val->data3, $val->data4
					]);
				}
				
				// dropdown 버튼 만들기 =================
				$variantsSheet = $sheet->_parent->getSheet(0);		// 0번시트(시트인덱스. 여기서는 sheet1을 가리킨다)를 가져옴

				$sheet->_parent->addNamedRange(		// dropdown 할 데이터 범위를 지정한다.
					new PHPExcel_NamedRange(
						'countries', $variantsSheet, 'A1:A6'		// index 0 번시트의 A1~A6번 데이터 선택
					)
				);

				$objValidation = $sheet->getCell('E1')->getDataValidation();	// E1번 칸에 dropdown 버튼 생성
				$objValidation->setType(PHPExcel_Cell_DataValidation::TYPE_LIST);
				$objValidation->setErrorStyle(PHPExcel_Cell_DataValidation::STYLE_INFORMATION);
				$objValidation->setAllowBlank(false);
				$objValidation->setShowInputMessage(true);
				$objValidation->setShowErrorMessage(true);
				$objValidation->setShowDropDown(true);
				$objValidation->setErrorTitle('Input error');
				$objValidation->setError('Value is not in list.');
				$objValidation->setPromptTitle('Pick from list');
				$objValidation->setPrompt('Please pick a value from the drop-down list.');
				$objValidation->setFormula1('countries'); //note this!
					
			});
		})->export('xlsx');
	}
	