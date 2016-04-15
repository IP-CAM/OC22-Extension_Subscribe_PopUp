<?php

class ControllerModuleBrigSubscribePopup extends Controller {
	public function install() {
      $this->load->model("module/brig_subscribe_popup");
      $this->model_module_brig_subscribe_popup->createTable();
   }

   public function uninstall() {
      $this->load->model("module/brig_subscribe_popup");
      $this->model_module_brig_subscribe_popup->deleteTable();
   }
}

?>