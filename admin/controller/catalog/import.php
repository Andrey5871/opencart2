<?php
class ControllerCatalogImport extends Controller {
	private $error = array();

	public function index() {
    $this->load->language('catalog/import');

    $this->document->setTitle($this->language->get('heading_title'));

    $this->load->model('catalog/product');

    $this->getList();
        }

        protected function getList() {


      		$data['breadcrumbs'] = array();

      		$data['breadcrumbs'][] = array(
      			'text' => $this->language->get('text_home'),
      			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
      		);
            $url = '';
          $data['action'] = $this->url->link('catalog/import/viewImport', 'user_token=' . $this->session->data['user_token'] . $url, true);
					$data['token'] = $this->session->data['user_token'];
      		$data['breadcrumbs'][] = array(
      			'text' => $this->language->get('heading_title'),
      			'href' => $this->url->link('catalog/import', 'user_token=' . $this->session->data['user_token'], true)
      		);
      		$data['header'] = $this->load->controller('common/header');
      		$data['column_left'] = $this->load->controller('common/column_left');
      		$data['footer'] = $this->load->controller('common/footer');
						$data['getTime'] = ini_get('max_execution_time');



      		$this->response->setOutput($this->load->view('catalog/import', $data));
      	}



                  public function viewImport() {

                    $this->load->language('catalog/import');

                    $this->document->setTitle($this->language->get('heading_title'));

                    $this->load->model('catalog/product');

                    $data['breadcrumbs'] = array();

                		$data['breadcrumbs'][] = array(
                			'text' => $this->language->get('text_home'),
                			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
                		);
                      $url = '';
                    $data['action'] = $this->url->link('catalog/import/viewImport', 'user_token=' . $this->session->data['user_token'] . $url, true);

                		$data['breadcrumbs'][] = array(
                			'text' => $this->language->get('heading_title'),
                			'href' => $this->url->link('catalog/import', 'user_token=' . $this->session->data['user_token'], true)
                		);
                		$data['header'] = $this->load->controller('common/header');
                		$data['column_left'] = $this->load->controller('common/column_left');
                		$data['footer'] = $this->load->controller('common/footer');



										if (isset($_POST['updateFilter'])) {
											$this->filterUpdate();
											$data['successUpdate'] = "Фильтры обновлены";
										}

                        if(!isset($_FILES["fileProduct"])){
                            $data['files'] = "null";


                        }else{
                          $file = $_FILES["fileProduct"];
                          if($file['type'] == "text/xml"){
                            // Проверяем загружен ли файл
                   if(is_uploaded_file($_FILES["fileProduct"]["tmp_name"]))
                   {
                     // Если файл загружен успешно, перемещаем его
                     // из временной директории в конечную
										 $file = DIR_DOWNLOAD.token(32);
                     move_uploaded_file($_FILES["fileProduct"]["tmp_name"], $file);

										 $files = file_get_contents($file);
                     $price = new SimpleXMLElement($files);


										 	$searchInXML = $price->xpath("//Группа");
											if (count($searchInXML) == 0) {
												$data['actionXML'] = "Ошибка, этот XML файл не подходит!";
												unlink($file);
											}else{


												// $idCategory = $this->selectCategory();
												// foreach ($idCategory as $keyID => $valueIdCat) {
												// 	 $result = $price->xpath("//Группа[@Код='".$valueIdCat['code']."']");
												// 	 if(count($result) == 0){
												// 		 $this->deleteCategoryId($valueIdCat['category_id']);
												// 	 }
												// }
											 //
											 //



												 $arrayCategory1 = array();
												 $arrayCodeCategory1 = array();
												 $arrayCategoryDescription = array();
												 $arrayCatgoryPath = array();
												 $arrayCategoryStore = array();




												 foreach ($price as $key => $valueCategory1) {
													 if($valueCategory1["Наименование"] == "ЛОМ" or $valueCategory1["Наименование"] == "СТОЙКИ" or $valueCategory1["Наименование"] == "я_Старые"){}else{
														 array_push($arrayCategory1, "('".$valueCategory1['category_id']."'","'".$valueCategory1["Код"]."'", "'1'", "'1'", "'0'", "'1'", "NOW()", "NOW())");
														 array_push($arrayCodeCategory1, "'".$valueCategory1["Код"]."'");
													 }

												 }


												$category1 = $this->addCategory(implode(',', $arrayCategory1), "(".implode(",", $arrayCodeCategory1).")");



												 	$data['category1'] = "Загрузилась первая категория";
												 foreach ($category1 as $key => $valueIdCategoryId) {
													 $this->addPathCategory("0", $valueIdCategoryId['category_id']);
											 array_push($arrayCategoryStore, "('".$valueIdCategoryId['category_id']."'", "'0')");
											 foreach ($price as $key => $valueCategory1) {
												 if($valueCategory1["Наименование"] == "ЛОМ" or $valueCategory1["Наименование"] == "СТОЙКИ" or $valueCategory1["Наименование"] == "я_Старые"){}else{
													 if ($valueIdCategoryId['code'] == $valueCategory1['Код']) {
														 $nameCat = $valueCategory1['Наименование'];
														 $replString = array('\'', '"');
														 $nameCat = str_replace($replString, ' ', $nameCat);
														 array_push($arrayCategoryDescription, "('".$valueIdCategoryId['category_id']."'", "'1'", "'".$nameCat."'",  "'".$nameCat."'", "'".$nameCat."'", "'".$nameCat."'", "'".$nameCat."')");
													 }
												 }

													 }

									 }




											 $this->addDescriptionCategory(implode(',', $arrayCategoryDescription));
											 $this->addCategoryStore(implode(',', $arrayCategoryStore));




													 $arrayCategory2 = array();
												 $arrayCodeCategory2 = array();
												 $arrayCategoryDescription2 = array();
												 $arrayCatgoryPath2 = array();
												 $arrayCatgoryPathTwo2 = array();
												 $arrayCategoryStore2 = array();

												 $arrayElement = array();
												 $arrayElementCode = array();
												 $arrayElementDescription = array();
												 $arrayElementStore = array();
												 $arrayElementCategory = array();
												 $arrayElementLayout = array();



												 foreach ($price as $key => $valueCategory1) {
													 if($valueCategory1["Наименование"] == "ЛОМ" or $valueCategory1["Наименование"] == "СТОЙКИ" or $valueCategory1["Наименование"] == "я_Старые"){}else{
														 foreach ($valueCategory1 as $key2 => $valueCategory2) {

																 if ($key2 == "Группа") {
																	 foreach ($category1 as $valueIdCategoryId1) {
																		 if ($valueIdCategoryId1['code'] == $valueCategory2['Родитель']) {
														 array_push($arrayCategory2, "('".$valueIdCategoryId1['category_id']."'","'".$valueCategory2["Код"]."'", "'1'", "'1'", "'0'", "'1'", "NOW()", "NOW())");
														 array_push($arrayCodeCategory2, "'".$valueCategory2["Код"]."'");
																		 }
																	 }
															 }else if($key2 == "Элемент"){
																 $nameCat1 = $valueCategory2['Наименование'];
																 $replString = array('\'', '"');
																 $nameCat1 = str_replace($replString, ' ', $nameCat1);
																 array_push($arrayElement, "('".$nameCat1."'","'".$valueCategory2["Код"]."'", (int)$valueCategory2["Остаток"], "'7'", "'0'", "'0'", "'".$valueCategory2["ЦенаРозничная"]."'", "'".$valueCategory2["ЦенаМинимальная"]."'", "'0'", "'0'", "'" . $this->db->escape(date('Y-m-d')) . "'", "'1'", "'1'", "'1'", "'1'", "NOW()", "NOW())");
																 array_push($arrayElementCode, "'".$valueCategory2["Код"]."'");

																 }
														 }
													 }

												 }




												 $category2 = $this->addCategory(implode(',', $arrayCategory2), "(".implode(",", $arrayCodeCategory2).")");


												 if(count($arrayElement) == 0){

												 }else{
													 $element = $this->addProductImport(implode(',', $arrayElement), "(".implode(",", $arrayElementCode).")");
												 }






													 foreach ($category2 as $key => $valueIdCategoryId) {
												 array_push($arrayCategoryStore2, "('".$valueIdCategoryId['category_id']."'", "'0')");

												 foreach ($price as $key => $valueCategory1) {
													 if($valueCategory1["Наименование"] == "ЛОМ" or $valueCategory1["Наименование"] == "СТОЙКИ" or $valueCategory1["Наименование"] == "я_Старые"){}else{
														 foreach ($valueCategory1 as $key2 => $valueCategory2) {
																 if ($key2 == "Группа") {

																				 if("'".$valueIdCategoryId["code"]."'" == "'".$valueCategory2['Код']."'"){
																				 foreach ($category1 as $keyParent => $valueCategoryParent) {
																							 if ($valueCategoryParent['code'] == $valueCategory2['Родитель']) {
																							 $this->addPathCategory($valueCategoryParent['category_id'], $valueIdCategoryId['category_id']);
																							 }
																					 }
																					 $nameCat1 = $valueCategory2['Наименование'];
																					 $nameCat1 = str_replace('\'', ' ', $nameCat1);
																				 array_push($arrayCategoryDescription2, "('".$valueIdCategoryId['category_id']."'", "'1'", "'".$nameCat1."'",  "'".$nameCat1."'", "'".$nameCat1."'", "'".$nameCat1."'", "'".$nameCat1."')");
																	 }
																		 }

																				 }
													 }


														 }

										 }


												 $this->addDescriptionCategory(implode(',', $arrayCategoryDescription2));
												 $this->addCategoryStore(implode(',', $arrayCategoryStore2));


														if (isset($element)) {
															foreach ($element as $key => $valueElemenId) {
		 													 array_push($arrayElementStore, "('".$valueElemenId['product_id']."'", "'0')");
		 													 foreach ($price as $key => $valueCategory1) {
		 														 if($valueCategory1["Наименование"] == "ЛОМ" or $valueCategory1["Наименование"] == "СТОЙКИ" or $valueCategory1["Наименование"] == "я_Старые"){}else{
		 															 foreach ($valueCategory1 as $key2 => $valueCategory2) {
		 																	 if($key2 == "Группа"){
		 																		 $groud = $valueCategory2["Родитель"];
		 																	 }
		 																		 else if ($key2 == "Элемент") {

		 																						 if("'".$valueElemenId["sku"]."'" == "'".$valueCategory2['Код']."'"){
		 																							 foreach ($category1 as $keyCat => $valueCategoryId) {
		 																								 if($valueCategoryId['code'] == $groud){
		 																										 array_push($arrayElementCategory, "('".$valueElemenId['product_id']."'", "'".$valueCategoryId['category_id']."')");
		 																								 }
		 																							 }
		 																							 $nameCat1 = $valueCategory2['Наименование'];
		 																							 $replString = array('\'', '"');
		 																							 $nameCat1 = str_replace($replString, ' ', $nameCat1);
		 																							 $nameCat2Full = $valueCategory2['Наименование'];
		 																							 $nameCat2Full = str_replace($replString, ' ', $nameCat2Full);
		 																						 array_push($arrayElementDescription, "('".$valueElemenId['product_id']."'", "'1'", "'".$nameCat1."'",  "'".$nameCat1."'", "'".$nameCat2Full."'", "'".$nameCat1."')");
		 																			 }

		 																		 }
		 																					 }
		 														 }

		 															 }
		 												 }


		 												 $this->addProductDescription(implode(',', $arrayElementDescription));
		 												 $this->addProductStore(implode(',', $arrayElementStore));
		 												 $this->addProductCategory(implode(',', $arrayElementCategory));
													 }else{



													 }






												 $arrayCategory3 = array();
											 $arrayCodeCategory3 = array();
											 $arrayCategoryDescription3 = array();
											 $arrayCatgoryPath3 = array();
											 $arrayCatgoryPathTwo3 = array();
											 $arrayCategoryStore3 = array();

											 $arrayElement2 = array();
											 $arrayElementCode2 = array();
											 $arrayElementDescription2 = array();
											 $arrayElementStore2 = array();
											 $arrayElementCategory2 = array();
											 $arrayElementLayout2 = array();



											 foreach ($price as $key => $valueCategory1) {
												 if($valueCategory1["Наименование"] == "ЛОМ" or $valueCategory1["Наименование"] == "СТОЙКИ" or $valueCategory1["Наименование"] == "я_Старые"){}else{
													 foreach ($valueCategory1 as $key2 => $valueCategory2) {
														 foreach ($valueCategory2 as $key3 => $valueCategory3) {
															 if ($key3 == "Группа") {
																 foreach ($category2 as $valueIdCategoryId1) {
																	 if ($valueIdCategoryId1['code'] == $valueCategory3['Родитель']) {
													 array_push($arrayCategory3, "('".$valueIdCategoryId1['category_id']."'","'".$valueCategory3["Код"]."'", "'1'", "'1'", "'0'", "'1'", "NOW()", "NOW())");
													 array_push($arrayCodeCategory3, "'".$valueCategory3["Код"]."'");
																	 }
																 }
														 }else if($key3 == "Элемент"){
															 $nameCat2 = $valueCategory3['Наименование'];
															 $replString = array('\'', '"');
															 $nameCat2 = str_replace($replString, ' ', $nameCat2);
															 array_push($arrayElement2, "('".$nameCat2."'","'".$valueCategory3["Код"]."'", (int)$valueCategory3["Остаток"], "'7'", "'0'", "'0'", "'".$valueCategory3["ЦенаРозничная"]."'", "'".$valueCategory3["ЦенаМинимальная"]."'", "'0'", "'0'", "'" . $this->db->escape(date('Y-m-d')) . "'", "'1'", "'1'", "'1'", "'1'", "NOW()", "NOW())");
															 array_push($arrayElementCode2, "'".$valueCategory3["Код"]."'");
															 }
														 }

													 }
												 }

											 }


												 $category3 = $this->addCategory(implode(',', $arrayCategory3), "(".implode(",", $arrayCodeCategory3).")");
												 $element2 = $this->addProductImport(implode(',', $arrayElement2), "(".implode(",", $arrayElementCode2).")");


												 foreach ($category3 as $key => $valueIdCategoryId) {
											 array_push($arrayCategoryStore3, "('".$valueIdCategoryId['category_id']."'", "'0')");

											 foreach ($price as $key => $valueCategory1) {
												 if($valueCategory1["Наименование"] == "ЛОМ" or $valueCategory1["Наименование"] == "СТОЙКИ" or $valueCategory1["Наименование"] == "я_Старые"){}else{
													 foreach ($valueCategory1 as $key2 => $valueCategory2) {
														 foreach ($valueCategory2 as $key3 => $valueCategory3) {
															 if ($key3 == "Группа") {
																			 if("'".$valueIdCategoryId["code"]."'" == "'".$valueCategory3['Код']."'"){
																			 foreach ($category2 as $keyParent => $valueCategoryParent) {
																						 if ($valueCategoryParent['code'] == $valueCategory3['Родитель']) {
																						 $this->addPathCategory($valueCategoryParent['category_id'], $valueIdCategoryId['category_id']);
																						 }
																				 }
																				 $nameCat3 = $valueCategory3['Наименование'];
																				 $replString = array('\'', '"');
																				 $nameCat3 = str_replace($replString, ' ', $nameCat3);
																			 array_push($arrayCategoryDescription3, "('".$valueIdCategoryId['category_id']."'", "'1'", "'".$nameCat3."'",  "'".$nameCat3."'", "'".$nameCat3."'", "'".$nameCat3."'", "'".$nameCat3."')");
																 }
																	 }
														 }


																			 }
												 }


													 }

									 }

											 $this->addDescriptionCategory(implode(',', $arrayCategoryDescription3));
											 $this->addCategoryStore(implode(',', $arrayCategoryStore3));


											 foreach ($element2 as $key => $valueElemenId) {
												 array_push($arrayElementStore2, "('".$valueElemenId['product_id']."'", "'0')");
												 foreach ($price as $key => $valueCategory1) {
													 if($valueCategory1["Наименование"] == "ЛОМ" or $valueCategory1["Наименование"] == "СТОЙКИ" or $valueCategory1["Наименование"] == "я_Старые"){}else{
														 foreach ($valueCategory1 as $key2 => $valueCategory2) {
															 foreach ($valueCategory2 as $key3 => $valueCategory3) {
																 if($key3 == "Группа"){
																	 $groud = $valueCategory3["Родитель"];
																 }
																	 else if ($key3 == "Элемент") {
																					 if("'".$valueElemenId["sku"]."'" == "'".$valueCategory3['Код']."'"){
																						 foreach ($category2 as $keyCat => $valueCategoryId) {
																							 if($valueCategoryId['code'] == $valueCategory3['Родитель']){
																									 array_push($arrayElementCategory2, "('".$valueElemenId['product_id']."'", "'".$valueCategoryId['category_id']."')");
																							 }
																						 }
																						 $nameCat3 = $valueCategory3['Наименование'];
																						 $replString = array('\'', '"');
																						 $nameCat3 = str_replace($replString, ' ', $nameCat3);
																						 $fullName3 = $valueCategory3["ПолноеНаименование"];
																						 $fullName3 = str_replace($replString, ' ', $fullName3);
																					 array_push($arrayElementDescription2, "('".$valueElemenId['product_id']."'", "'1'", "'".$nameCat3."'",  "'".$nameCat3."'", "'".$fullName3."'", "'".$nameCat3."')");
																		 }

																	 }
															 }

																				 }
													 }

														 }
											 }



											 $this->addProductDescription(implode(',', $arrayElementDescription2));
											 $this->addProductStore(implode(',', $arrayElementStore2));
											 $this->addProductCategory(implode(',', $arrayElementCategory2));




				 $arrayCategory4 = array();
				 $arrayCodeCategory4 = array();
				 $arrayCategoryDescription4 = array();
				 $arrayCatgoryPath4 = array();
				 $arrayCatgoryPathTwo4 = array();
				 $arrayCategoryStore4 = array();

				 $arrayElement3 = array();
				 $arrayElementCode3 = array();
				 $arrayElementDescription3 = array();
				 $arrayElementStore3 = array();
				 $arrayElementCategory3 = array();
				 $arrayElementLayout3 = array();


				 foreach ($price as $key => $valueCategory1) {
					 if($valueCategory1["Наименование"] == "ЛОМ" or $valueCategory1["Наименование"] == "СТОЙКИ" or $valueCategory1["Наименование"] == "я_Старые"){}else{
						 foreach ($valueCategory1 as $key2 => $valueCategory2) {
							 foreach ($valueCategory2 as $key3 => $valueCategory3) {
								 foreach ($valueCategory3 as $key4 => $valueCategory4) {
									 if ($key4 == "Группа") {
										 foreach ($category3 as $valueIdCategoryId1) {
											 if ($valueIdCategoryId1['code'] == $valueCategory4['Родитель']) {
							 array_push($arrayCategory4, "('".$valueIdCategoryId1['category_id']."'","'".$valueCategory4["Код"]."'", "'1'", "'1'", "'0'", "'1'", "NOW()", "NOW())");
							 array_push($arrayCodeCategory4, "'".$valueCategory4["Код"]."'");
											 }
										 }
								 }else if($key4 == "Элемент"){
									 $name = $valueCategory4['Наименование'];
									 $replString = array('\'', '"');
									 $name = str_replace($replString, ' ', $name);
									 array_push($arrayElement3, "('".$name."'","'".$valueCategory4["Код"]."'", (int)$valueCategory4["Остаток"], "'7'", "'0'", "'0'", "'".$valueCategory4["ЦенаРозничная"]."'", "'".$valueCategory4["ЦенаМинимальная"]."'", "'0'", "'0'", "'" . $this->db->escape(date('Y-m-d')) . "'", "'1'", "'1'", "'1'", "'1'", "NOW()", "NOW())");
									 array_push($arrayElementCode3, "'".$valueCategory4["Код"]."'");
									 }
								 }

							 }

						 }
					 }

				 }

					 if(count($arrayCategory4) == 0){

					 }else{
						 $category4 = $this->addCategory(implode(',', $arrayCategory4), "(".implode(",", $arrayCodeCategory4).")");
						 foreach ($category4 as $key => $valueIdCategoryId) {
					 array_push($arrayCategoryStore4, "('".$valueIdCategoryId['category_id']."'", "'0')");

					 foreach ($price as $key => $valueCategory1) {
						 if($valueCategory1["Наименование"] == "ЛОМ" or $valueCategory1["Наименование"] == "СТОЙКИ" or $valueCategory1["Наименование"] == "я_Старые"){}else{
							 foreach ($valueCategory1 as $key2 => $valueCategory2) {
								 foreach ($valueCategory2 as $key3 => $valueCategory3) {
									 foreach ($valueCategory3 as $key4 => $valueCategory4) {
										 if ($key4 == "Группа") {
														 if("'".$valueIdCategoryId["code"]."'" == "'".$valueCategory4['Код']."'"){
														 foreach ($category3 as $keyParent => $valueCategoryParent) {
																	 if ($valueCategoryParent['code'] == $valueCategory4['Родитель']) {
																	 $this->addPathCategory($valueCategoryParent['category_id'], $valueIdCategoryId['category_id']);
																	 }
															 }
															 $nameCat4 = $valueCategory4['Наименование'];
															 $replString = array('\'', '"');
															 $nameCat4 = str_replace($replString, ' ', $nameCat4);
														 array_push($arrayCategoryDescription4, "('".$valueIdCategoryId['category_id']."'", "'1'", "'".$nameCat4."'",  "'".$nameCat4."'", "'".$nameCat4."'", "'".$nameCat4."'", "'".$nameCat4."')");
											 }
												 }
									 }

								 }


													 }
						 }


							 }

			 }
			 $this->addDescriptionCategory(implode(',', $arrayCategoryDescription4));
			 $this->addCategoryStore(implode(',', $arrayCategoryStore4));
					 }


				 if(count($arrayElement3) == 0){

				 }else{

					 $element3 = $this->addProductImport(implode(',', $arrayElement3), "(".implode(",", $arrayElementCode3).")");
					 foreach ($element3 as $key => $valueElemenId) {
						 array_push($arrayElementStore3, "('".$valueElemenId['product_id']."'", "'0')");
						 foreach ($price as $key => $valueCategory1) {
							 if($valueCategory1["Наименование"] == "ЛОМ" or $valueCategory1["Наименование"] == "СТОЙКИ" or $valueCategory1["Наименование"] == "я_Старые"){}else{
								 foreach ($valueCategory1 as $key2 => $valueCategory2) {
									 foreach ($valueCategory2 as $key3 => $valueCategory3) {
										 foreach ($valueCategory3 as $key4 => $valueCategory4) {
													if ($key4 == "Элемент") {
																 if("'".$valueElemenId["sku"]."'" == "'".$valueCategory4['Код']."'"){
																	 foreach ($category3 as $keyCat => $valueCategoryId) {
																		 if($valueCategoryId['code'] == $valueCategory4['Родитель']){
																				 array_push($arrayElementCategory3, "('".$valueElemenId['product_id']."'", "'".$valueCategoryId['category_id']."')");
																		 }
																	 }
																	 $name = $valueCategory4['Наименование'];
																	 $replString = array('\'', '"');
																	 $name = str_replace($replString, ' ', $name);
																	 $nameFull = $valueCategory4["ПолноеНаименование"];
																	 $nameFull = str_replace($replString, ' ', $nameFull);
																 array_push($arrayElementDescription3, "('".$valueElemenId['product_id']."'", "'1'", "'".$name."'",  "'".$name."'", "'".$nameFull."'", "'".$name."')");
													 }

												 }
										 }

									 }

														 }
							 }

								 }
					 }
					 $this->addProductDescription(implode(',', $arrayElementDescription3));
					 $this->addProductStore(implode(',', $arrayElementStore3));
					 $this->addProductCategory(implode(',', $arrayElementCategory3));
				 }

				 $idProduct = $this->selectProduct();
				 $productDelete = array();

				 if(count($productDelete) > 0){
					 foreach ($idProduct as $keyID => $valueIdProd) {
						 $result = $price->xpath("//Элемент[@Код='".$valueIdProd['sku']."']");
						 if(count($result) == 0){
							 //`product_id`, `status`, `date_modified`
							 array_push($productDelete, "('".$valueIdProd['product_id']."'", "'0'", "NOW() )");
						 }
					 }
					 $this->deleteProductId(implode(',', $productDelete));
				 }


				 $data['successFile'] = "Загрузка завершена успешно!";
				 unlink($file);
											}

                   } else {
                      $data['actionDownload'] = "Ошибка загрузки файла!";
                   }
                          }else{
                            $data['actionType'] = "Ошибка, данный формат не является XML!";
                          }
                        }
                        $this->response->setOutput($this->load->view('catalog/import', $data));
                  }



                  	public function addCategory($arrsCategory, $arrsCode){
                  		$this->db->query("INSERT INTO " . DB_PREFIX . "category (`parent_id`, `code`, `top`, `column`, `sort_order`, `status`, `date_added`, `date_modified`) VALUES ".$arrsCategory." ON DUPLICATE KEY UPDATE parent_id = VALUES(parent_id), code = VALUES(code), date_modified = VALUES(date_modified)");
					$query = $this->db->query("SELECT category_id, code FROM `" . DB_PREFIX . "category` WHERE code IN ".$arrsCode);
							return $query->rows;

                  	}
                  	public function addDescriptionCategory($arrsCategoryDescription){
                  		$this->db->query("INSERT INTO " . DB_PREFIX . "category_description (`category_id`, `language_id`, `name`, `description`, `meta_title`, `meta_description`, `meta_keyword`) VALUES ".$arrsCategoryDescription." ON DUPLICATE KEY UPDATE category_id = VALUES(category_id), name = VALUES(name), description = VALUES(description), meta_title = VALUES(meta_title), meta_description = VALUES(meta_description), meta_keyword = VALUES(meta_keyword)");
                  	}
                  	public function addPathCategory($parentId, $category_id){

											// MySQL Hierarchical Data Closure Table Pattern
											$level = 0;

											$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "category_path` WHERE category_id = '" . (int)$parentId . "' ORDER BY `level` ASC");

											foreach ($query->rows as $result) {
												$this->db->query("INSERT INTO `" . DB_PREFIX . "category_path` SET `category_id` = '" . (int)$category_id . "', `path_id` = '" . (int)$result['path_id'] . "', `level` = '" . (int)$level . "' ON DUPLICATE KEY UPDATE category_id = VALUES(category_id), path_id = VALUES(path_id), level = VALUES(level)");

												$level++;
											}

											$this->db->query("INSERT INTO `" . DB_PREFIX . "category_path` SET `category_id` = '" . (int)$category_id . "', `path_id` = '" . (int)$category_id . "', `level` = '" . (int)$level . "' ON DUPLICATE KEY UPDATE category_id = VALUES(category_id), path_id = VALUES(path_id), level = VALUES(level)");

                  		}

                  	public function addCategoryStore($arrstore){
                  		$this->db->query("INSERT INTO " . DB_PREFIX . "category_to_store (`category_id`, `store_id`) VALUES ".$arrstore. " ON DUPLICATE KEY UPDATE category_id = VALUES(category_id), store_id = VALUES(store_id)");
                  	}




									public function selectCategory() {
												$query = $this->db->query("SELECT category_id, code FROM `" . DB_PREFIX . "category`");
										return $query->rows;
									}





									public function deleteCategoryId($category_id) {
										$this->db->query("DELETE FROM " . DB_PREFIX . "category_path WHERE category_id = '" . (int)$category_id . "'");

										$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category_path WHERE path_id = '" . (int)$category_id . "'");

										foreach ($query->rows as $result) {
											$this->deleteCategory($result['category_id']);
										}

										$this->db->query("DELETE FROM " . DB_PREFIX . "category WHERE category_id = '" . (int)$category_id . "'");
										$this->db->query("DELETE FROM " . DB_PREFIX . "category_description WHERE category_id = '" . (int)$category_id . "'");
										$this->db->query("DELETE FROM " . DB_PREFIX . "category_filter WHERE category_id = '" . (int)$category_id . "'");
										$this->db->query("DELETE FROM " . DB_PREFIX . "category_to_store WHERE category_id = '" . (int)$category_id . "'");
										$this->db->query("DELETE FROM " . DB_PREFIX . "category_to_layout WHERE category_id = '" . (int)$category_id . "'");
										$this->db->query("DELETE FROM " . DB_PREFIX . "product_to_category WHERE category_id = '" . (int)$category_id . "'");
										$this->db->query("DELETE FROM " . DB_PREFIX . "seo_url WHERE query = 'category_id=" . (int)$category_id . "'");
										$this->db->query("DELETE FROM " . DB_PREFIX . "coupon_category WHERE category_id = '" . (int)$category_id . "'");

										$this->cache->delete('category');
									}

									public function selectProduct() {
												$query = $this->db->query("SELECT product_id, sku FROM `" . DB_PREFIX . "product`");
										return $query->rows;
									}

									public function selectProductDesc() {
												$query = $this->db->query("SELECT product_id, meta_description FROM `" . DB_PREFIX . "product_description`");
										return $query->rows;
									}

									public function deleteProductId($product_id) {
										$this->db->query("INSERT INTO " . DB_PREFIX . "product (`product_id`, `status`, `date_modified`) VALUES ".$product_id. " ON DUPLICATE KEY UPDATE product_id = VALUES(product_id), status = VALUES(status), date_modified = VALUES(date_modified)");
									}


									public function addProductImport($arrsProduct, $arrsArtikul) {
										$this->db->query("INSERT INTO " . DB_PREFIX . "product (`model`, `sku`, `quantity`, `stock_status_id`, `manufacturer_id`, `shipping`, `price`, `price2`, `points`, `tax_class_id`, `date_available`, `subtract`, `minimum`, `sort_order`, `status`, `date_added`, `date_modified`) VALUES ".$arrsProduct. " ON DUPLICATE KEY UPDATE model = VALUES(model), sku = VALUES(sku), quantity = VALUES(quantity), price = VALUES(price), price2 = VALUES(price2), status = VALUES(status), date_available = VALUES(date_available), date_modified = VALUES(date_modified)");
										$query = $this->db->query("SELECT product_id, sku FROM `" . DB_PREFIX . "product` WHERE sku IN ".$arrsArtikul);
												return $query->rows;
									}

									public function addProductDescription($arrsProductDescription){
										$this->db->query("INSERT INTO " . DB_PREFIX . "product_description (`product_id`, `language_id`, `name`, `meta_title`, `meta_description`, `meta_keyword`) VALUES ".$arrsProductDescription." ON DUPLICATE KEY UPDATE product_id = VALUES(product_id), name = VALUES(name), meta_title = VALUES(meta_title), meta_description = VALUES(meta_description), meta_keyword = VALUES(meta_keyword)");
									}



									public function addProductStore($arrstore){
										$this->db->query("INSERT INTO " . DB_PREFIX . "product_to_store (`product_id`, `store_id`) VALUES ".$arrstore." ON DUPLICATE KEY UPDATE product_id = VALUES(product_id), store_id = VALUES(store_id)");
									}

									public function addProductLayout($arrLayout){
										$this->db->query("INSERT INTO " . DB_PREFIX . "product_to_layout (`product_id`, `store_id`, `layout_id`) VALUES ".$arrLayout." ON DUPLICATE KEY UPDATE product_id = VALUES(product_id), store_id = VALUES(store_id)");
									}

									public function addProductCategory($arrToCategory){
											$this->db->query("INSERT INTO " . DB_PREFIX . "product_to_category (`product_id`, `category_id`) VALUES ".$arrToCategory." ON DUPLICATE KEY UPDATE product_id = VALUES(product_id), category_id = VALUES(category_id)");

									}


									public function filterUpdate(){
										$arrs = $this->selectProductDesc();
										foreach ($arrs as $key => $value) {
												$str2 = preg_match('/([1-6](ст|CT|СТ|ct)(-)([0-9][0-9][0-9]|[0-9][0-9]))|([1-6](ст|CT|СТ|ct) (-)([0-9][0-9][0-9]|[0-9][0-9]))|([1-6](ст|CT|СТ|ct)(-)  ([0-9][0-9][0-9]|[0-9][0-9]))|([1-6] (мтс|МТС|MTC|mtc)(-)([0-9][0-9][0-9]|[0-9][0-9]))/', trim($value['meta_description']), $matches, PREG_OFFSET_CAPTURE);
												if (count($matches) == 0) {
													// code...
												}else{
													$result = $matches[0][0];
													$str2 = preg_match('/^[1-6]/', $result, $matchesCountBanki, PREG_OFFSET_CAPTURE);
													$str3 = preg_match('/(ст|CT|СТ|ct)|(мтс|МТС|MTC|mtc)/', $result, $matchesTypeAkum, PREG_OFFSET_CAPTURE);
													$str3 = preg_match('/([0-9][0-9][0-9]|[0-9][0-9])/', $result, $matchesEmkost, PREG_OFFSET_CAPTURE);
													$this->db->query("UPDATE " . DB_PREFIX . "product SET countBanki = '" . $this->db->escape($matchesCountBanki[0][0]) .  "', typeAkum = '" . $this->db->escape($matchesTypeAkum[0][0]) . "', emkostNomin = '" . $this->db->escape($matchesEmkost[0][0]) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
													$str5 = preg_match('/(R\+)|( R )|( L )/', trim($value['meta_description']), $matches6, PREG_OFFSET_CAPTURE);
													if(count($matches6) == 0){
														$str5 = preg_match('/[а-я](\.)[а-я](\.)/u', $value['meta_description'], $matches6, PREG_OFFSET_CAPTURE);
														if (count($matches6) == 0) {
															// code...
														}else{
															$strTrim = $matches6[0][0];
															if($strTrim == "о.п."){
																$this->db->query("UPDATE " . DB_PREFIX . "product SET  polyaryti = '" . $this->db->escape("Обратная полярность") . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
															}else{
																$this->db->query("UPDATE " . DB_PREFIX . "product SET  polyaryti = '" . $this->db->escape("Прямая полярность") . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
															}
														}
													}else{
														$strTrim = trim($matches6[0][0]);
															if (trim($strTrim) == "R+" or trim($strTrim) == "R") {
																$this->db->query("UPDATE " . DB_PREFIX . "product SET  polyaryti = '" . $this->db->escape("Обратная полярность") . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
															}else if($strTrim == "L"){
																$this->db->query("UPDATE " . DB_PREFIX . "product SET  polyaryti = '" . $this->db->escape("Обратная полярность") . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
															}


													}
													$str3 = preg_match_all('/([0-9][0-9][0-9](\*)[0-9][0-9][0-9](\*)[0-9][0-9][0-9])|([0-9][0-9][0-9](x)[0-9][0-9][0-9](x)[0-9][0-9][0-9])|([0-9][0-9][0-9](х)[0-9][0-9][0-9](х)[0-9][0-9][0-9])/u', trim($value['meta_description']), $matches5, PREG_OFFSET_CAPTURE);
													if($str3 == ""){
															$str4 = preg_match_all('/[а-я][0-9][0-9][0-9][а-я][0-9][0-9][0-9][а-я][0-9][0-9][0-9]/u', trim($value['meta_description']), $matches6, PREG_OFFSET_CAPTURE);

															if (count($matches6[0]) == 0) {
																// code...
															}else{
																$result3 = $matches6[0][0][0];
																$pregs = preg_split("/[а-я]/u", $result3);
																foreach ($pregs as $key2 => $valuePreg) {
																	switch ($key2) {
																		case 1:
																			$this->db->query("UPDATE " . DB_PREFIX . "product SET  	length = '" . $this->db->escape($valuePreg) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																			break;

																			case 2:
																				$this->db->query("UPDATE " . DB_PREFIX . "product SET  	width = '" . $this->db->escape($valuePreg) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																				break;

																				case 3:
																					$this->db->query("UPDATE " . DB_PREFIX . "product SET  	height = '" . $this->db->escape($valuePreg) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																					break;

																	}
																}
															}


													}else{
														if (count($matches5) == 0){

														}else{
															$result2 = $matches5[0][0][0];
															$expl = explode("*",$result2);
															$expl2 = explode("x",$result2);
															$expl3 = explode("х",$result2);

															foreach ($expl3 as $key => $valueExpl) {
																switch ($key) {
																	case 0:
																		$this->db->query("UPDATE " . DB_PREFIX . "product SET  	length = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																		break;

																		case 1:
																			$this->db->query("UPDATE " . DB_PREFIX . "product SET  	width = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																			break;

																			case 2:
																				$this->db->query("UPDATE " . DB_PREFIX . "product SET  	height = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																				break;
																}
															}


															foreach ($expl2 as $key => $valueExpl) {
																switch ($key) {
																	case 0:
																		$this->db->query("UPDATE " . DB_PREFIX . "product SET  	length = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																		break;

																		case 1:
																			$this->db->query("UPDATE " . DB_PREFIX . "product SET  	width = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																			break;

																			case 2:
																				$this->db->query("UPDATE " . DB_PREFIX . "product SET  	height = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																				break;
																}
															}

															foreach ($expl as $key => $valueExpl) {
																switch ($key) {
																	case 0:
																		$this->db->query("UPDATE " . DB_PREFIX . "product SET  	length = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																		break;

																		case 1:
																			$this->db->query("UPDATE " . DB_PREFIX . "product SET  	width = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																			break;

																			case 2:
																				$this->db->query("UPDATE " . DB_PREFIX . "product SET  	height = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																				break;
																}
															}
														}
													}
												}
											}



						 			foreach ($arrs as $key2 => $value2) {
						 				$strEvropa = preg_match_all('/[5-7][0-9][0-9] [0-9][0-9][0-9] [0-9][0-9][0-9]/', trim($value2['meta_description']), $matchesEvr, PREG_OFFSET_CAPTURE);
						 				if (count($matchesEvr[0]) == 0) {
						 					// code...
						 				}else{
						 					$resultEvropa = $matchesEvr[0][0][0];
						 					if ($resultEvropa == "") {
						 					}else{
						 						$str2 = preg_match('/^[5-7]/', $resultEvropa, $matches2, PREG_OFFSET_CAPTURE);
						 						$strNew = mb_substr($resultEvropa, 1);
						 						$str2 = preg_match('/^[0-9][0-9]/', $strNew, $matches3, PREG_OFFSET_CAPTURE);
						 						$ints;
						 						if($matches2[0][0] == 6){
						 							$ints = (int)$matches3[0][0] + 100;
						 						}else if($matches2[0][0] == 7){
						 							$ints = (int)$matches3[0][0] + 200;
						 						}else{
						 							$ints = (int)$matches3[0][0];
						 						}

						 						$this->db->query("UPDATE " . DB_PREFIX . "product SET  emkostNomin = '" . $this->db->escape($ints) . "', date_modified = NOW() WHERE product_id = '" . (int)$value2['product_id']. "'");
						 						$str5 = preg_match('/(R\+)|( R )|( L )/', $value2['meta_description'], $matches6, PREG_OFFSET_CAPTURE);

						 						if (count($matches6) == 0) {
						 							$str6 = preg_match('/[а-я](\.)[а-я](\.)/u', $value2['meta_description'], $matches7, PREG_OFFSET_CAPTURE);
						 							if (count($matches7) == 0) {
						 								// code...
						 							}else{
						 								if($matches7[0][0] == "о.п."){
						 									$this->db->query("UPDATE " . DB_PREFIX . "product SET polyaryti = '" . $this->db->escape("Обратная полярность") . "', date_modified = NOW() WHERE product_id = '" . (int)$value2['product_id']. "'");
						 								}else{
						 									$this->db->query("UPDATE " . DB_PREFIX . "product SET polyaryti = '" . $this->db->escape("Прямая полярность") . "', date_modified = NOW() WHERE product_id = '" . (int)$value2['product_id']. "'");
						 								}
						 							}


						 						}else{
						 								if ($matches6[0][0] == "R+" || $matches6[0][0]  == "R") {
						 									$this->db->query("UPDATE " . DB_PREFIX . "product SET polyaryti = '" . $this->db->escape("Обратная полярность") . "', date_modified = NOW() WHERE product_id = '" . (int)$value2['product_id']. "'");
						 								}else if(trim($matches6[0][0]) == "L"){
						 								$this->db->query("UPDATE " . DB_PREFIX . "product SET polyaryti = '" . $this->db->escape("Прямая полярность") . "', date_modified = NOW() WHERE product_id = '" . (int)$value2['product_id']. "'");
						 								}



						 							$strNew2 = mb_substr($resultEvropa, 3);
						 							$str2 = preg_match('/[0-9][0-9][0-9]/', $strNew2, $matches4, PREG_OFFSET_CAPTURE);
						 							$strNew3 = mb_substr($resultEvropa, 6);
						 							$str2 = preg_match('/[0-9][0-9][0-9]/', $strNew3, $matches5, PREG_OFFSET_CAPTURE);
						 							$tok = (int)$matches5[0][0] * 10;
						 							$this->db->query("UPDATE " . DB_PREFIX . "product SET tokProkrutki = '" . $this->db->escape($tok) . "', date_modified = NOW() WHERE product_id = '" . (int)$value2['product_id']. "'");

						 						}
												$strHGW = preg_match_all('/([0-9][0-9][0-9](\*)[0-9][0-9][0-9](\*)[0-9][0-9][0-9])|([0-9][0-9][0-9](x)[0-9][0-9][0-9](x)[0-9][0-9][0-9])|([0-9][0-9][0-9](х)[0-9][0-9][0-9](х)[0-9][0-9][0-9])/u', $value2['meta_description'], $matches5, PREG_OFFSET_CAPTURE);
												if($strHGW == ""){
														$str4 = preg_match_all('/[а-я][0-9][0-9][0-9][а-я][0-9][0-9][0-9][а-я][0-9][0-9][0-9]/u', $value2['meta_description'], $matches6, PREG_OFFSET_CAPTURE);
														if (count($matches6[0]) == 0) {
															// code...
														}else{
															$result3 = $matches6[0][0][0];
															$pregs = preg_split("/[а-я]/u", $result3);
															foreach ($pregs as $key2 => $valuePreg) {
																switch ($key2) {
																	case 1:
																				$this->db->query("UPDATE " . DB_PREFIX . "product SET  	length = '" . $this->db->escape($valuePreg) . "', date_modified = NOW() WHERE product_id = '" . (int)$value2['product_id']. "'");
																				break;

																				case 2:
																					$this->db->query("UPDATE " . DB_PREFIX . "product SET  	width = '" . $this->db->escape($valuePreg) . "', date_modified = NOW() WHERE product_id = '" . (int)$value2['product_id']. "'");
																					break;

																					case 3:
																						$this->db->query("UPDATE " . DB_PREFIX . "product SET  	height = '" . $this->db->escape($valuePreg) . "', date_modified = NOW() WHERE product_id = '" . (int)$value2['product_id']. "'");
																						break;

																}
															}
														}

												}else{
													$result2 = $matches5[0][0][0];
													$expl = explode("*",$result2);
													$expl2 = explode("x",$result2);
													$expl3 = explode("х",$result2);

													foreach ($expl3 as $key => $valueExpl) {
														switch ($key) {
															case 0:
																$this->db->query("UPDATE " . DB_PREFIX . "product SET  	length = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value2['product_id']. "'");
																break;

																case 1:
																	$this->db->query("UPDATE " . DB_PREFIX . "product SET  	width = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value2['product_id']. "'");
																	break;

																	case 2:
																		$this->db->query("UPDATE " . DB_PREFIX . "product SET  	height = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value2['product_id']. "'");
																		break;
														}
													}

													foreach ($expl2 as $key => $valueExpl) {
														switch ($key) {
															case 0:
																$this->db->query("UPDATE " . DB_PREFIX . "product SET  	length = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value2['product_id']. "'");
																break;

																case 1:
																	$this->db->query("UPDATE " . DB_PREFIX . "product SET  	width = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value2['product_id']. "'");
																	break;

																	case 2:
																		$this->db->query("UPDATE " . DB_PREFIX . "product SET  	height = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value2['product_id']. "'");
																		break;
														}
													}

													foreach ($expl as $key => $valueExpl) {
														switch ($key) {
															case 0:
																$this->db->query("UPDATE " . DB_PREFIX . "product SET  	length = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value2['product_id']. "'");
																break;

																case 1:
																	$this->db->query("UPDATE " . DB_PREFIX . "product SET  	width = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value2['product_id']. "'");
																	break;

																	case 2:
																		$this->db->query("UPDATE " . DB_PREFIX . "product SET  	height = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value2['product_id']. "'");
																		break;
														}
													}
												}
						 					}
						 				}

						 			}

									foreach ($arrs as $key => $value) {

										$strAsia = preg_match_all('/[0-9][0-9][A-Z][0-9][0-9]([A-Z]|[ A-Z ])/', $value['meta_description'], $matchesAsia, PREG_OFFSET_CAPTURE);
										if (count($matchesAsia[0]) == 0) {
											// code...
										}else{
											$resultAsia = $matchesAsia[0][0][0];
												if ($resultAsia == "") {
													// code...
												}else{
													$str2 = preg_match('/^[0-9][0-9]/', $resultAsia, $matches, PREG_OFFSET_CAPTURE);
													$ins;
													if ((int)$matches[0][0] > 55) {
														$ins = (int)$matches[0][0] - 10;
													}else{
														$ins = (int)$matches[0][0];
													}
													$this->db->query("UPDATE " . DB_PREFIX . "product SET  emkostNomin = '" . $this->db->escape($ins) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
													$str5 = preg_match('/(R\+)|( R )|( L )/', $value['meta_description'], $matches6, PREG_OFFSET_CAPTURE);
													if (count($matches6) == 0) {
															$str5 = preg_match('/[а-я](\.)[а-я](\.)/u', $value['meta_description'], $matches7, PREG_OFFSET_CAPTURE);
															if (count($matches7) == 0) {
																// code...
															}else{
																if($matches7[0][0] == "о.п."){

																$this->db->query("UPDATE " . DB_PREFIX . "product SET polyaryti = '" . $this->db->escape("Обратная полярность") . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																}else{
																	$this->db->query("UPDATE " . DB_PREFIX . "product SET polyaryti = '" . $this->db->escape("Прямая полярность") . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																}
															}

													}else{

														if (count($matches6) == 0) {
															// code...
														}else{
															if ($matches6[0][0] == "R+" || $matches6[0][0] == "R") {
																$this->db->query("UPDATE " . DB_PREFIX . "product SET polyaryti = '" . $this->db->escape("Обратная полярность") . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
															}else if($matches6[0][0] == "L"){
																$this->db->query("UPDATE " . DB_PREFIX . "product SET polyaryti = '" . $this->db->escape("Прямая полярность") . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
															}
														}
												}

												$strHGW = preg_match_all('/([0-9][0-9][0-9](\*)[0-9][0-9][0-9](\*)[0-9][0-9][0-9])|([0-9][0-9][0-9](x)[0-9][0-9][0-9](x)[0-9][0-9][0-9])|([0-9][0-9][0-9](х)[0-9][0-9][0-9](х)[0-9][0-9][0-9])/u', $value['meta_description'], $matches5, PREG_OFFSET_CAPTURE);
												if($strHGW == ""){
														$str4 = preg_match_all('/[а-я][0-9][0-9][0-9][а-я][0-9][0-9][0-9][а-я][0-9][0-9][0-9]/u', $value['meta_description'], $matches6, PREG_OFFSET_CAPTURE);
														if (count($matches6[0]) == 0) {
															// code...
														}else{
															$result3 = $matches6[0][0][0];
															$pregs = preg_split("/[а-я]/u", $result3);
															foreach ($pregs as $key2 => $valuePreg) {
																switch ($key2) {
																	case 1:
																				$this->db->query("UPDATE " . DB_PREFIX . "product SET  	length = '" . $this->db->escape($valuePreg) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																				break;

																				case 2:
																					$this->db->query("UPDATE " . DB_PREFIX . "product SET  	width = '" . $this->db->escape($valuePreg) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																					break;

																					case 3:
																						$this->db->query("UPDATE " . DB_PREFIX . "product SET  	height = '" . $this->db->escape($valuePreg) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																						break;

																}
															}
														}

												}else{
													$result2 = $matches5[0][0][0];

													$expl = explode("*",$result2);
													$expl2 = explode("x",$result2);
													$expl3 = explode("х",$result2);

													foreach ($expl3 as $key => $valueExpl) {
														switch ($key) {
															case 0:
																		$this->db->query("UPDATE " . DB_PREFIX . "product SET  	length = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																		break;

																		case 1:
																			$this->db->query("UPDATE " . DB_PREFIX . "product SET  	width = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																			break;

																			case 2:
																				$this->db->query("UPDATE " . DB_PREFIX . "product SET  	height = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																				break;
														}

													}

													foreach ($expl2 as $key => $valueExpl) {
														switch ($key) {
															case 0:
																		$this->db->query("UPDATE " . DB_PREFIX . "product SET  	length = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																		break;

																		case 1:
																			$this->db->query("UPDATE " . DB_PREFIX . "product SET  	width = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																			break;

																			case 2:
																				$this->db->query("UPDATE " . DB_PREFIX . "product SET  	height = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																				break;

														}

													}

													foreach ($expl as $key => $valueExpl) {
														switch ($key) {
															case 0:
																		$this->db->query("UPDATE " . DB_PREFIX . "product SET  	length = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																		break;

																		case 1:
																			$this->db->query("UPDATE " . DB_PREFIX . "product SET  	width = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																			break;

																			case 2:
																				$this->db->query("UPDATE " . DB_PREFIX . "product SET  	height = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																				break;

														}

													}
												}

											}

										}


										}

										foreach ($arrs as $key => $value) {
												$str2 = preg_match('/([0-9][0-9](-)[0-9][0-9][0-9])|([0-9][0-9][A-Z](-)[0-9][0-9][0-9])|([0-9][0-9][A-Z][A-Z](-)[0-9][0-9][0-9])/', trim($value['meta_description']), $matches, PREG_OFFSET_CAPTURE);

												if (count($matches) == 0) {
													// code...
												}else{
													$result = $matches[0][0];
													echo $result;
													$str2 = preg_match('/[0-9][0-9][0-9]/', $result, $matchesTok, PREG_OFFSET_CAPTURE);
													echo $matchesTok[0][0];
													$this->db->query("UPDATE " . DB_PREFIX . "product SET tokProkrutki = '" . $this->db->escape($matchesTok[0][0]) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
													$str5 = preg_match('/(R\+)|( R )|( L )/', trim($value['meta_description']), $matches6, PREG_OFFSET_CAPTURE);
													if(count($matches6) == 0){
														$str5 = preg_match('/[а-я](\.)[а-я](\.)/u', $value['meta_description'], $matches6, PREG_OFFSET_CAPTURE);
														if (count($matches6) == 0) {
															// code...
														}else{
															$strTrim = $matches6[0][0];
															if($strTrim == "о.п."){
																$this->db->query("UPDATE " . DB_PREFIX . "product SET  polyaryti = '" . $this->db->escape("Обратная полярность") . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
															}else{
																$this->db->query("UPDATE " . DB_PREFIX . "product SET  polyaryti = '" . $this->db->escape("Прямая полярность") . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
															}
														}
													}else{
														$strTrim = trim($matches6[0][0]);
															if (trim($strTrim) == "R+" or trim($strTrim) == "R") {
																$this->db->query("UPDATE " . DB_PREFIX . "product SET  polyaryti = '" . $this->db->escape("Обратная полярность") . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
															}else if($strTrim == "L"){
																$this->db->query("UPDATE " . DB_PREFIX . "product SET  polyaryti = '" . $this->db->escape("Обратная полярность") . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
															}


													}
													$str3 = preg_match_all('/([0-9][0-9][0-9](\*)[0-9][0-9][0-9](\*)[0-9][0-9][0-9])|([0-9][0-9][0-9](x)[0-9][0-9][0-9](x)[0-9][0-9][0-9])|([0-9][0-9][0-9](х)[0-9][0-9][0-9](х)[0-9][0-9][0-9])/u', trim($value['meta_description']), $matches5, PREG_OFFSET_CAPTURE);
													if($str3 == ""){
															$str4 = preg_match_all('/[а-я][0-9][0-9][0-9][а-я][0-9][0-9][0-9][а-я][0-9][0-9][0-9]/u', trim($value['meta_description']), $matches6, PREG_OFFSET_CAPTURE);

															if (count($matches6[0]) == 0) {
																// code...
															}else{
																$result3 = $matches6[0][0][0];
																$pregs = preg_split("/[а-я]/u", $result3);
																foreach ($pregs as $key2 => $valuePreg) {
																	switch ($key2) {
																		case 1:
																			$this->db->query("UPDATE " . DB_PREFIX . "product SET  	length = '" . $this->db->escape($valuePreg) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																			break;

																			case 2:
																				$this->db->query("UPDATE " . DB_PREFIX . "product SET  	width = '" . $this->db->escape($valuePreg) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																				break;

																				case 3:
																					$this->db->query("UPDATE " . DB_PREFIX . "product SET  	height = '" . $this->db->escape($valuePreg) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																					break;

																	}
																}
															}


													}else{
														if (count($matches5) == 0){

														}else{
															$result2 = $matches5[0][0][0];
															$expl = explode("*",$result2);
															$expl2 = explode("x",$result2);
															foreach ($expl2 as $key => $valueExpl) {
																switch ($key) {
																	case 0:
																		$this->db->query("UPDATE " . DB_PREFIX . "product SET  	length = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																		break;

																		case 1:
																			$this->db->query("UPDATE " . DB_PREFIX . "product SET  	width = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																			break;

																			case 2:
																				$this->db->query("UPDATE " . DB_PREFIX . "product SET  	height = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																				break;
																}
															}
															foreach ($expl as $key => $valueExpl) {
																switch ($key) {
																	case 0:
																		$this->db->query("UPDATE " . DB_PREFIX . "product SET  	length = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																		break;

																		case 1:
																			$this->db->query("UPDATE " . DB_PREFIX . "product SET  	width = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																			break;

																			case 2:
																				$this->db->query("UPDATE " . DB_PREFIX . "product SET  	height = '" . $this->db->escape($valueExpl) . "', date_modified = NOW() WHERE product_id = '" . (int)$value['product_id']. "'");
																				break;
																}
															}
														}
													}
												}
											}
									}


											public function importCsv(){
												$row = 1;
												$arrayCsv = array();
											$handle = fopen("/home/a/andreycher/andreycher.tmp/public_html/fileUpload/AKB.csv", "r");
											while (($data = fgetcsv($handle, 19017, ",")) !== FALSE) {


													$num = count($data);

													$row++;
													for ($c=0; $c < $num; $c++) {

															$explode = explode(";", $data[$c]);
															array_push($arrayCsv, $explode);
													}
											}
											fclose($handle);



										foreach ($arrayCsv as $key => $value) {
														foreach ($value as $key2 => $value2) {
															switch ($key2) {
																					case 5:
																					$this->db->query("INSERT INTO markaAuto (`name`, `keyMarka`) VALUES ('".$value2."', '".$key2."') ON DUPLICATE KEY UPDATE name = VALUES(name), keyMarka = VALUES(keyMarka)");
																						break;
															}
														}
										}

										foreach ($arrayCsv as $key => $value) {
														foreach ($value as $key2 => $value2) {
															switch ($key2) {
																case 5:
																$name = $value2;
																	break;
																					case 6:
																					$query = $this->db->query("SELECT * FROM `markaAuto` WHERE name = '".$name."'");

																					foreach ($query->rows as $result) {
																						$this->db->query("INSERT INTO modelAuto (`nameModel`, `idMarka`, `keyModel`) VALUES ('".$value2."', '".$result['idMarka']."', '".$key2."') ON DUPLICATE KEY UPDATE nameModel = VALUES(nameModel), keyModel = VALUES(keyModel), idMarka = VALUES(idMarka)");
																					}

																						break;
															}
														}
										}


										foreach ($arrayCsv as $key => $value) {
														foreach ($value as $key2 => $value2) {
															switch ($key2) {
																case 6:
																$name = $value2;
																	break;
																					case 7:
																						$modyfi = $value2;
																						break;

																						case 0:
																							$emkost = $value2;
																							break;

																							case 1:
																								$polyarnost = $value2;
																								break;

																								case 2:
																									$length = $value2;
																									break;

																									case 3:
																										$width = $value2;
																										break;

																										case 4:
																											$height = $value2;
																											break;

																											case 8:
																												$year = $value2;
																												$query = $this->db->query("SELECT * FROM `modelAuto` WHERE nameModel = '".$name."'");

																												foreach ($query->rows as $result) {
																													$this->db->query("INSERT INTO modifyAuto (`modify`, `emkost`, `length`, `width`, `height`, `year`, `polyarity`, `idModel`) VALUES ('".$modyfi."', '".$emkost."', '".$length."', '".$width."', '".$height."', '".$year."', '".$polyarnost."', '".$result['idModel']."') ON DUPLICATE KEY UPDATE modify = VALUES(modify), emkost = VALUES(emkost), length = VALUES(length), width = VALUES(width), height = VALUES(height), year = VALUES(year), polyarity = VALUES(polyarity), idModel = VALUES(idModel)");
																												}

																												break;
															}
														}
										}
											}


}

 ?>
