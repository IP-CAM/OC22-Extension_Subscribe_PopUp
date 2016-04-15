<?php

class ControllerModuleBrigPreviewProductCategory extends Controller {
	public function install() {
      $this->load->model("module/brig_preview_product_category");
      $this->model_module_brig_preview_product_category->createSchema();
   }

   public function uninstall() {
      $this->load->model("module/brig_preview_product_category");
      $this->model_module_brig_preview_product_category->deleteSchema();
   }
}

?>