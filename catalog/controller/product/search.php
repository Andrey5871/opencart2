<?php
class ControllerProductSearch extends Controller {
	public function index() {
		$this->load->language('product/search');

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');


				$getmarkaAuto = $this->db->query("SELECT * FROM markaAuto ORDER BY name ASC");

				$arrGetMarkaAuto = array();
				$urlArrs = array();
				$urlDefaultMarka = $this->url->link('product/search', "searchMarkaAll");
				$data['urlDefaultMarka'] = $urlDefaultMarka;
				foreach ($getmarkaAuto->rows as $key => $valueMarkaAuto) {
						$arrGetMarkaAuto[] = array(
							'id' => $valueMarkaAuto['idMarka'],
							'name' => $valueMarkaAuto['name'],
							'img' => $valueMarkaAuto['img'],
							'href' => $this->url->link('product/search', 'searchMarkaAuto=' . $valueMarkaAuto['idMarka'])
						);
				}
				$data['getMarkaAuto'] = $arrGetMarkaAuto;
				if (isset($this->request->get['searchMarkaAll'])) {
						$data['searchMarkaAuto'] = "active";
				}
				if (isset($this->request->get['searchMarkaAuto'])) {
					$data['searchMarkaAuto'] = "active";
					$getmarkaAutoHrefId = $this->db->query("SELECT * FROM markaAuto WHERE idMarka = '".$this->request->get['searchMarkaAuto']."'");
					if (count($getmarkaAutoHrefId->rows) > 0) {
						$urlArrs[] = array(
							'name' => $getmarkaAutoHrefId->rows[0]['name'],
							'href' =>	$this->url->link('product/search', 'searchMarkaAuto=' . $this->request->get['searchMarkaAuto'])
						);
					}

					$getModelAuto = $this->db->query("SELECT * FROM modelAuto WHERE idMarka = '".$this->request->get['searchMarkaAuto']."' ORDER BY nameModel ASC");
					$arrayModelAuto = array();
					foreach ($getModelAuto->rows as $key => $valueModelAuto) {
						$arrayModelAuto[] = array(
							'id' => $valueModelAuto['idModel'],
							'name' => $valueModelAuto['nameModel'],
							'href' => $this->url->link('product/search', "searchMarkaAuto=".$this->request->get['searchMarkaAuto']."&searchModelAuto=". $valueModelAuto['idModel'])
						);
					}
					$data['getModelAuto'] = $arrayModelAuto;
				}

				if (isset($this->request->get['searchModelAuto'])) {
								$getModyfi = $this->db->query("SELECT * FROM modifyAuto WHERE idModel = '".$this->request->get['searchModelAuto']."'");
								$arrayModyfi = array();
								$getModelAutoHrefId = $this->db->query("SELECT * FROM modelAuto WHERE idModel = '".$this->request->get['searchModelAuto']."' ");
								if (count($getModelAutoHrefId->rows) > 0) {
									$urlArrs[] = array(
										'name' => $getModelAutoHrefId->rows[0]['nameModel'],
										'href' =>	$this->url->link('product/search', "searchMarkaAuto=" . $this->request->get['searchMarkaAuto']."&searchModelAuto=" . $this->request->get['searchModelAuto'])
									);
								}

								foreach ($getModyfi->rows as $key => $valueModify) {
									$arrayModyfi[] = array(
										'id' => $valueModify['id'],
										'name' => $valueModify['modify'],
										'year' => $valueModify['year'],
										'href' => $this->url->link('product/search', "searchMarkaAuto=".$this->request->get['searchMarkaAuto']."&searchModelAuto=". $this->request->get['searchModelAuto']."&searchModify=".$valueModify['id'])
									);

								}

								$data['getModify'] = $arrayModyfi;
			}
								$arrayModyfiElem = array();
			if (isset($this->request->get['searchModify'])) {
				$getModyfiAutoHrefId = $this->db->query("SELECT * FROM modifyAuto WHERE id = '".$this->request->get['searchModify']."' ");
				if (count($getModyfiAutoHrefId->rows) > 0) {
					$urlArrs[] = array(
						'name' => $getModyfiAutoHrefId->rows[0]['modify'],
						'href' =>	$this->url->link('product/search', "searchMarkaAuto=" . $this->request->get['searchMarkaAuto']."&searchModelAuto=" . $this->request->get['searchModelAuto']."&searchModify=".$getModyfiAutoHrefId->rows[0]['id'])
					);
				}

							$getModyfiElem = $this->db->query("SELECT * FROM modifyAuto WHERE id = '".$this->request->get['searchModify']."'");
							foreach ($getModyfiElem->rows as $key => $valueModifyElem) {
								$arrsEmkost = explode('-', $valueModifyElem['emkost']);
								$arrsLength = explode('-', $valueModifyElem['length']);
								$arrsWidth= explode('-', $valueModifyElem['width']);
								$arrsHeight= explode('-', $valueModifyElem['height']);
								$arrayModyfiElem[] = array(
									'id' => $valueModifyElem['id'],
									'name' => $valueModifyElem['modify'],
										'minEmkost'=> $arrsEmkost[0],
										'maxEmkost' => $arrsEmkost[1],
										'minLength' => $arrsLength[0],
										'maxLength' => $arrsLength[1],
										'minWidth' => $arrsWidth[0],
										'maxWidth' => $arrsWidth[1],
										'minHeight' => $arrsHeight[0],
										'maxHeight' => $arrsHeight[1],
										'polyarnost' => $valueModifyElem['polyarity'],
										'year' => $valueModifyElem['year'],
									'href' => $this->url->link('product/search', "searchMarkaAuto=".$this->request->get['searchMarkaAuto']."&searchModelAuto=". $this->request->get['searchModelAuto']."&searchModify=".$valueModifyElem['id'])
								);

							}
							$data['getModifyElem'] = $arrayModyfiElem;
		}

					$data['urlModyfi'] = $urlArrs;

			$lengthMax = $this->db->query("SELECT max(length) FROM `" . DB_PREFIX . "product` ");
			$lengthMin = $this->db->query("SELECT min(length) FROM `" . DB_PREFIX . "product` ");
			$arraylength = array();
			for ($i=(float)$lengthMin->row['min(length)']; $i < (float)$lengthMax->row['max(length)']; $i++) {
				$i +=10;
				array_push($arraylength, $i);
			}
			$data['arrsLength'] = $arraylength;

			$heightMax = $this->db->query("SELECT max(height) FROM `" . DB_PREFIX . "product` ");
			$heightMin = $this->db->query("SELECT min(height) FROM `" . DB_PREFIX . "product` ");
			$arrayHeight = array();
			for ($i=(float)$heightMin->row['min(height)']; $i < (float)$heightMax->row['max(height)']; $i++) {
				$i +=10;
				array_push($arrayHeight, $i);
			}
			$data['arrsHeight'] = $arrayHeight;

			$widthMax = $this->db->query("SELECT max(width) FROM `" . DB_PREFIX . "product` ");
			$widthMin = $this->db->query("SELECT min(width) FROM `" . DB_PREFIX . "product` ");
			$arraywidth = array();
			for ($i=(float)$widthMin->row['min(width)']; $i < (float)$widthMax->row['max(width)']; $i++) {
				$i += 10;
				array_push($arraywidth, $i);
			}
			$data['arrswidth'] = $arraywidth;

			$emkostMax = $this->db->query("SELECT max(emkostNomin) FROM `" . DB_PREFIX . "product` ");
			$emkostMin = $this->db->query("SELECT min(emkostNomin) FROM `" . DB_PREFIX . "product` ");
			$arrayEmkost = array();
			for ($i=(float)$emkostMin->row['min(emkostNomin)']; $i < (float)$emkostMax->row['max(emkostNomin)']; $i++) {
				array_push($arrayEmkost, $i);
			}
			$data['arrsEmkost'] = $arrayEmkost;


			if(isset($this->request->get['lengthFrom']) || isset($this->request->get['polyarnost']) || isset($this->request->get['lengthTo']) || isset($this->request->get['heightFrom']) || isset($this->request->get['heightTo']) || isset($this->request->get['widthFrom']) || isset($this->request->get['widthTo']) || isset($this->request->get['emkostFrom']) || isset($this->request->get['emkostTo'])){
				$data['activeSerachParam'] = "active";
			}



		if (isset($this->request->get['search'])) {
			$search = $this->request->get['search'];
		} else {
			$search = '';
		}

		if (isset($this->request->get['lengthFrom'])) {
			$data['lengthSelect'] = $this->request->get['lengthFrom'];
			if ($this->request->get['lengthFrom'] == "all") {
				$lengthFrom = '';
			}else{
				$lengthFrom = $this->request->get['lengthFrom'];
			}
		} else {
			$lengthFrom = '';
		}

		if (isset($this->request->get['polyarnost'])) {
			$data['polyarnost'] = $this->request->get['polyarnost'];
			if ($this->request->get['polyarnost'] == "all") {
				$polyarnost = '';
			}else{
				$polyarnost = $this->request->get['polyarnost'];
			}
		} else {
			$polyarnost = '';
		}



		if (isset($this->request->get['lengthTo'])) {
			$data['lengthToSelect'] = $this->request->get['lengthTo'];
			if ($this->request->get['lengthTo'] == "all") {
				$lengthTo = '';
			}else{
				$lengthTo = $this->request->get['lengthTo'];
			}
		} else {
			$lengthTo = '';
		}

		if (isset($this->request->get['heightFrom'])) {
			$data['heightSelect'] = $this->request->get['heightFrom'];
			if ($this->request->get['heightFrom'] == "all") {
				$heightFrom = '';
			}else{
				$heightFrom = $this->request->get['heightFrom'];
			}
		} else {
			$heightFrom = '';
		}



		if (isset($this->request->get['heightTo'])) {
			$data['heightToSelect'] = $this->request->get['heightTo'];
			if ($this->request->get['heightTo'] == "all") {
				$heightTo = '';
			}else{
				$heightTo = $this->request->get['heightTo'];
			}
		} else {
			$heightTo = '';
		}

		if (isset($this->request->get['widthFrom'])) {
			$data['widthSelect'] = $this->request->get['widthFrom'];
			if ($this->request->get['widthFrom'] == "all") {
				$widthFrom = '';
			}else{
				$widthFrom = $this->request->get['widthFrom'];
			}
		} else {
			$widthFrom = '';
		}

		if (isset($this->request->get['widthTo'])) {
			$data['widthToSelect'] = $this->request->get['widthTo'];
			if ($this->request->get['widthTo'] == "all") {
				$widthTo = '';
			}else{
				$widthTo = $this->request->get['widthTo'];
			}
		} else {
			$widthTo = '';
		}




		if (isset($this->request->get['emkostFrom'])) {
			$data['emkostFromSelect'] = $this->request->get['emkostFrom'];
			if ($this->request->get['emkostFrom'] == "all") {
				$emkostFrom = '';
			}else{
				$emkostFrom = $this->request->get['emkostFrom'];
			}
		} else {
				$emkostFrom = '';
		}

		if (isset($this->request->get['emkostTo'])) {
			$data['emkostToSelect'] = $this->request->get['emkostTo'];
			if ($this->request->get['emkostTo'] == "all") {
				$emkostTo = '';
			}else{
				$emkostTo = $this->request->get['emkostTo'];
			}
		} else {
				$emkostTo = '';
		}






		if (isset($this->request->get['tag'])) {
			$tag = $this->request->get['tag'];
		} elseif (isset($this->request->get['search'])) {
			$tag = $this->request->get['search'];
		} else {
			$tag = '';
		}

		if (isset($this->request->get['description'])) {
			$description = $this->request->get['description'];
		} else {
			$description = '';
		}

		if (isset($this->request->get['category_id'])) {
			$category_id = $this->request->get['category_id'];
		} else {
			$category_id = 0;
		}

		if (isset($this->request->get['sub_category'])) {
			$sub_category = $this->request->get['sub_category'];
		} else {
			$sub_category = '';
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'p.sort_order';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		if (isset($this->request->get['limit'])) {
			$limit = (int)$this->request->get['limit'];
		} else {
			$limit = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
		}

		if (isset($this->request->get['search'])) {
			$this->document->setTitle($this->language->get('heading_title') .  ' - ' . $this->request->get['search']);
		} elseif (isset($this->request->get['tag'])) {
			$this->document->setTitle($this->language->get('heading_title') .  ' - ' . $this->language->get('heading_tag') . $this->request->get['tag']);
		} else {
			$this->document->setTitle($this->language->get('heading_title'));
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$url = '';

		if (isset($this->request->get['search'])) {
			$url .= '&search=' . urlencode(html_entity_decode($this->request->get['search'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['tag'])) {
			$url .= '&tag=' . urlencode(html_entity_decode($this->request->get['tag'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['description'])) {
			$url .= '&description=' . $this->request->get['description'];
		}

		if (isset($this->request->get['category_id'])) {
			$url .= '&category_id=' . $this->request->get['category_id'];
		}

		if (isset($this->request->get['sub_category'])) {
			$url .= '&sub_category=' . $this->request->get['sub_category'];
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		if (isset($this->request->get['limit'])) {
			$url .= '&limit=' . $this->request->get['limit'];
		}

		if (isset($this->request->get['lengthFrom'])) {
			$url .= '&lengthFrom=' . $this->request->get['lengthFrom'];
		}

		if (isset($this->request->get['lengthTo'])) {
			$url .= '&lengthTo=' . $this->request->get['lengthTo'];
		}

		if (isset($this->request->get['heightFrom'])) {
			$url .= '&heightFrom=' . $this->request->get['heightFrom'];
		}

		if (isset($this->request->get['heightTo'])) {
			$url .= '&heightTo=' . $this->request->get['heightTo'];
		}

		if (isset($this->request->get['widthFrom'])) {
			$url .= '&widthFrom=' . $this->request->get['widthFrom'];
		}

		if (isset($this->request->get['widthTo'])) {
			$url .= '&widthTo=' . $this->request->get['widthTo'];
		}


		if (isset($this->request->get['emkostFrom'])) {
			$url .= '&emkostFrom=' . $this->request->get['emkostFrom'];
		}

		if (isset($this->request->get['emkostTo'])) {
			$url .= '&emkostTo=' . $this->request->get['emkostTo'];
		}

		if (isset($this->request->get['polyarnost'])) {
			$url .= '&polyarnost=' . $this->request->get['polyarnost'];
		}


		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('product/search', $url)
		);

		if (isset($this->request->get['search'])) {
			$data['heading_title'] = $this->language->get('heading_title') .  ' - ' . $this->request->get['search'];
		} else {
			$data['heading_title'] = $this->language->get('heading_title');
		}

		$data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));

		$data['compare'] = $this->url->link('product/compare');

		$this->load->model('catalog/category');

		// 3 Level Category Search
		$data['categories'] = array();

		$categories_1 = $this->model_catalog_category->getCategories(0);

		foreach ($categories_1 as $category_1) {
			$level_2_data = array();

			$categories_2 = $this->model_catalog_category->getCategories($category_1['category_id']);

			foreach ($categories_2 as $category_2) {
				$level_3_data = array();

				$categories_3 = $this->model_catalog_category->getCategories($category_2['category_id']);

				foreach ($categories_3 as $category_3) {
					$level_3_data[] = array(
						'category_id' => $category_3['category_id'],
						'name'        => $category_3['name'],
					);
				}

				$level_2_data[] = array(
					'category_id' => $category_2['category_id'],
					'name'        => $category_2['name'],
					'children'    => $level_3_data
				);
			}

			$data['categories'][] = array(
				'category_id' => $category_1['category_id'],
				'name'        => $category_1['name'],
				'children'    => $level_2_data
			);
		}


		$data['products'] = array();

		if (isset($this->request->get['search']) || isset($this->request->get['tag'])) {
			$filter_data = array(
				'filter_name'         => $search,
				'filter_tag'          => $tag,
				'filter_description'  => $description,
				'filter_category_id'  => $category_id,
				'filter_sub_category' => $sub_category,
				'sort'                => $sort,
				'order'               => $order,
				'start'               => ($page - 1) * $limit,
				'limit'               => $limit,
				'lengthFrom'					=> $lengthFrom,
				'lengthTo'						=> $lengthTo,
				'heightFrom'					=> $heightFrom,
				'heightTo'						=> $heightTo,
				'widthFrom'						=> $widthFrom,
				'widthTo'							=> $widthTo,
				'emkostFrom'					=> $emkostFrom,
				'emkostTo'						=> $emkostTo,
				'polyarnost'					=> $polyarnost
			);

			$product_total = $this->model_catalog_product->getTotalProducts($filter_data);

			$results = $this->model_catalog_product->getProducts($filter_data);


			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				}

				$users = $this->db->query("SELECT * FROM `" . DB_PREFIX . "customer` WHERE customer_id='". $this->customer->getId() ."' ");
				if($users->num_rows == 0 || $users->row['customer_group_id'] == 2){
							$data['userInf'] = 'null';
							if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
								$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
							} else {
								$price = false;
							}
							$data['priceInf'] = "Розничная цена: ";
				}else{
					$data['userInf'] = $users->row['customer_group_id'];
							if ($data['userInf'] == 3) {
								if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
									$price = $this->currency->format($this->tax->calculate($result['price2'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
								} else {
									$price = false;
								}
								$data['priceInf'] = "Оптовая цена: ";
							}else{
									$data['priceInf'] = "Розничная цена: ";
							}
				}

				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$special = false;
				}

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = (int)$result['rating'];
				} else {
					$rating = false;
				}

				$data['products'][] = array(
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'name'        => $result['name'],
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
					'rating'      => $result['rating'],
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'] . $url)
				);
			}

			$url = '';

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . urlencode(html_entity_decode($this->request->get['search'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . urlencode(html_entity_decode($this->request->get['tag'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['description'])) {
				$url .= '&description=' . $this->request->get['description'];
			}

			if (isset($this->request->get['category_id'])) {
				$url .= '&category_id=' . $this->request->get['category_id'];
			}

			if (isset($this->request->get['sub_category'])) {
				$url .= '&sub_category=' . $this->request->get['sub_category'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['sorts'] = array();

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_default'),
				'value' => 'p.sort_order-ASC',
				'href'  => $this->url->link('product/search', 'sort=p.sort_order&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_name_asc'),
				'value' => 'pd.name-ASC',
				'href'  => $this->url->link('product/search', 'sort=pd.name&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_name_desc'),
				'value' => 'pd.name-DESC',
				'href'  => $this->url->link('product/search', 'sort=pd.name&order=DESC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_price_asc'),
				'value' => 'p.price-ASC',
				'href'  => $this->url->link('product/search', 'sort=p.price&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_price_desc'),
				'value' => 'p.price-DESC',
				'href'  => $this->url->link('product/search', 'sort=p.price&order=DESC' . $url)
			);

			if ($this->config->get('config_review_status')) {
				$data['sorts'][] = array(
					'text'  => $this->language->get('text_rating_desc'),
					'value' => 'rating-DESC',
					'href'  => $this->url->link('product/search', 'sort=rating&order=DESC' . $url)
				);

				$data['sorts'][] = array(
					'text'  => $this->language->get('text_rating_asc'),
					'value' => 'rating-ASC',
					'href'  => $this->url->link('product/search', 'sort=rating&order=ASC' . $url)
				);
			}

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_model_asc'),
				'value' => 'p.model-ASC',
				'href'  => $this->url->link('product/search', 'sort=p.model&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_model_desc'),
				'value' => 'p.model-DESC',
				'href'  => $this->url->link('product/search', 'sort=p.model&order=DESC' . $url)
			);

			$url = '';

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . urlencode(html_entity_decode($this->request->get['search'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . urlencode(html_entity_decode($this->request->get['tag'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['description'])) {
				$url .= '&description=' . $this->request->get['description'];
			}

			if (isset($this->request->get['category_id'])) {
				$url .= '&category_id=' . $this->request->get['category_id'];
			}

			if (isset($this->request->get['sub_category'])) {
				$url .= '&sub_category=' . $this->request->get['sub_category'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			$data['limits'] = array();

			$limits = array_unique(array($this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit'), 25, 50, 75, 100));

			sort($limits);

			foreach($limits as $value) {
				$data['limits'][] = array(
					'text'  => $value,
					'value' => $value,
					'href'  => $this->url->link('product/search', $url . '&limit=' . $value)
				);
			}

			$url = '';

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . urlencode(html_entity_decode($this->request->get['search'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . urlencode(html_entity_decode($this->request->get['tag'], ENT_QUOTES, 'UTF-8'));
			}

			if (isset($this->request->get['description'])) {
				$url .= '&description=' . $this->request->get['description'];
			}

			if (isset($this->request->get['category_id'])) {
				$url .= '&category_id=' . $this->request->get['category_id'];
			}

			if (isset($this->request->get['sub_category'])) {
				$url .= '&sub_category=' . $this->request->get['sub_category'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$pagination = new Pagination();
			$pagination->total = $product_total;
			$pagination->page = $page;
			$pagination->limit = $limit;
			$pagination->url = $this->url->link('product/search', $url . '&page={page}');

			$data['pagination'] = $pagination->render();

			$data['results'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($product_total - $limit)) ? $product_total : ((($page - 1) * $limit) + $limit), $product_total, ceil($product_total / $limit));

			if (isset($this->request->get['search']) && $this->config->get('config_customer_search')) {
				$this->load->model('account/search');

				if ($this->customer->isLogged()) {
					$customer_id = $this->customer->getId();
				} else {
					$customer_id = 0;
				}

				if (isset($this->request->server['REMOTE_ADDR'])) {
					$ip = $this->request->server['REMOTE_ADDR'];
				} else {
					$ip = '';
				}

				$search_data = array(
					'keyword'       => $search,
					'category_id'   => $category_id,
					'sub_category'  => $sub_category,
					'description'   => $description,
					'products'      => $product_total,
					'customer_id'   => $customer_id,
					'ip'            => $ip
				);

				$this->model_account_search->addSearch($search_data);
			}
		}else{




				foreach ($arrayModyfiElem as $key => $arrayModyfiElem) {
					$lengthFrom = $arrayModyfiElem['minLength'];
					$lengthTo = $arrayModyfiElem['maxLength'];
					$widthFrom = $arrayModyfiElem['minWidth'];
					$widthTo = $arrayModyfiElem['maxWidth'];
					$heightFrom = $arrayModyfiElem['minHeight'];
					$heightTo = $arrayModyfiElem['maxHeight'];
					if ($arrayModyfiElem['polyarnost'] == "прямая") {
						$polyarnost = "Прямая полярность";
					}else if ($arrayModyfiElem['polyarnost'] == "обратная") {
						$polyarnost = "Обратная полярность";
					}

				}






			$start = ($page - 1) * $limit;
			$settingPage = array(
				'limit' 							=> $limit,
				'start' 							=> $start,
				'lengthFrom'					=> $lengthFrom,
				'lengthTo'						=> $lengthTo,
				'heightFrom'					=> $heightFrom,
				'heightTo'						=> $heightTo,
				'widthFrom'						=> $widthFrom,
				'widthTo'							=> $widthTo,
				'emkostFrom'					=> $emkostFrom,
				'emkostTo'						=> $emkostTo,
				'polyarnost'					=> $polyarnost
			);

			if (isset($this->request->get['searchModify'])) {
				$results = $this->model_catalog_product->getProducts($settingPage);
				$count = $this->model_catalog_product->getCountProductSearch($settingPage);
			}else if(isset($this->request->get['lengthFrom']) || isset($this->request->get['polyarnost']) || isset($this->request->get['lengthTo']) || isset($this->request->get['heightFrom']) || isset($this->request->get['heightTo']) || isset($this->request->get['widthFrom']) || isset($this->request->get['widthTo']) || isset($this->request->get['emkostFrom']) || isset($this->request->get['emkostTo'])) {
				$results = $this->model_catalog_product->getProducts($settingPage);
				$count = $this->model_catalog_product->getCountProductSearch($settingPage);
			}




			$data['productsAuto'] = array();

			if (isset($results)) {
				foreach ($results as $result) {
					if ($result['image']) {
						$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
					} else {
						$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
					}
				}







						foreach ($results as $key => $result) {


							$users = $this->db->query("SELECT * FROM `" . DB_PREFIX . "customer` WHERE customer_id='". $this->customer->getId() ."' ");
							if($users->num_rows == 0 || $users->row['customer_group_id'] == 2){
										$data['userInf'] = 'null';
										if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
											$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
											
										} else {
											$price = false;
										}
										$data['priceInf'] = "Розничная цена: ";
							}else{
								$data['userInf'] = $users->row['customer_group_id'];
										if ($data['userInf'] == 3) {
											if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
												$price = $this->currency->format($this->tax->calculate($result['price2'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
											} else {
												$price = false;
											}
											$data['priceInf'] = "Оптовая цена: ";
										}else{
												$data['priceInf'] = "Розничная цена: ";
										$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
										}
							}
							
							
				
							$data['productsAuto'][] = array(
								'product_id'  => $result['product_id'],
								'name'        => $result['name'],
								'description' => $result['description'],
								'length'			=> $result['length'],
								'width'				=> $result['width'],
								'height'			=> $result['height'],
								'polyaryti' 	=> $result['polyaryti'],
								'emkostNomin'	=> $result['emkostNomin'],
								'price'       => $price,
								'thumb'				=>	$image,
								'minimum'     => 1,
								'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'] . $url)
							);
						}



						$countElem = $count;
						$view = $limit;
						$url = $_SERVER['REQUEST_URI'];
						$resultPage = round($countElem/$view);
						$pagePrev = $page - 1;
						$pageNext = $page +1;
						$pageMin = $page - 3;
						$pageMax = $page + 6;
						$newUrl = str_replace("&page=".$page, "", $url);
						$arsHrefPre = array();
						$arsHrefnext = array();
						if ($resultPage == 0 || $resultPage == 1) {
							// code...
						}else{
							if ($resultPage <= $pageMax) {
								for ($i=$page+1; $i <= $resultPage; $i++) {
									array_push($arsHrefnext, "<a href='".$this->url->link('product/search', $newUrl.'&page='.$i)."' class='page-link'>".$i."</a>");
								}
								for ($i=1; $i < $page; $i++) {
									array_push($arsHrefPre, "<a href='".$this->url->link('product/search', $newUrl.'&page='.$i)."' class='page-link'>".$i."</a>");
								}
							}else{
								if ($page > $resultPage || $page < 0 || $page == 0) {
									$page = 1;
								}else{
									if ($pageMin < 1 || $pageMin == 1) {

									}else{
										for ($i=$pageMin; $i < $page; $i++) {
											array_push($arsHrefPre, "<a href='".$this->url->link('product/search', $newUrl.'&page='.$i)."' class='page-link'>".$i."</a>");
										}
									}
									if ($pageMax == $resultPage || $pageMax > $resultPage) {

									}else{
										for ($i=$page+1; $i <= $pageMax; $i++) {
											array_push($arsHrefnext, "<a href='".$this->url->link('product/search', $newUrl.'&page='.$i)."' class='page-link'>".$i."</a>");
										}
									}
								}
							}


							if($page != 1){

								$preBtn = $page-1;

								$data['preButton'] = "<a href='".$this->url->link('product/search', $newUrl.'&page='.$preBtn)."' class='page-link'>Назад</a>";
								if ($resultPage <= $pageMax) {

								}else{
									$data['onButton'] = "<a href='".$this->url->link('product/search', $newUrl.'&page=1')."' class='page-link'>1</a>";
								}

							}

							if($page != $resultPage){
								$nextBtn = $page+1;
								$data['nextButton'] = "<a href='".$this->url->link('product/search', $newUrl.'&page='.$nextBtn)."' class='page-link'>Вперед</a>";
								if ($resultPage <= $pageMax) {
									// code...
								}else{
									$data['lastButton'] = "<a href='".$this->url->link('product/search', $newUrl.'&page='.$resultPage)."' class='page-link'>".$resultPage."</a>";
								}

							}

								$data['hrefPre'] = $arsHrefPre;
								$data['hrefNext'] = $arsHrefnext;
								$data['active'] = $page;
						}



			}




}


		$data['search'] = $search;
		$data['description'] = $description;
		$data['category_id'] = $category_id;
		$data['sub_category'] = $sub_category;

		$data['sort'] = $sort;
		$data['order'] = $order;
		$data['limit'] = $limit;

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('product/search', $data));
	}
}
