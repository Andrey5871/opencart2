<?php
class ControllerCommonMenu extends Controller {
	public function index() {
		$this->load->language('common/menu');

		// Menu
		$this->load->model('catalog/category');

		$this->load->model('catalog/product');
		$data['informations'] = array();
		foreach ($this->model_catalog_information->getInformations() as $result) {

				$data['informations'][] = array(
					'title' => $result['title'],
					'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
				);

		}
		//$categories = $this->model_catalog_category->getCategories(0);


		return $this->load->view('common/menu', $data);
	}
}
