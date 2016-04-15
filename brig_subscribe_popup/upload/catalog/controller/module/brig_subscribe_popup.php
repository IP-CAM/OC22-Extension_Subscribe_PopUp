<?php

class ControllerModuleBrigSubscribePopup extends Controller {
	$this->load->model('module/brigsubscribepopup');
	$tmp_categories = $this->model_module_brigsubscribepopup->get_products($category_id);

	$this->language->load('module/brigsubscribepopup');

	$this->data['category'] = $this->category; // $category;
	$this->data['heading_title'] = $this->language->get('heading_title'); // $heading_title;
}

?>