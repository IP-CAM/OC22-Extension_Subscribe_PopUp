<?php

class ModelModuleBrigSubscribePopup extends Model {
   public function createTable() {
      $this->db->query("
      CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "brig_subscribe_popup` (
      `field` VARCHAR(255) DEFAULT NULL
      ) DEFAULT CHARSET=utf8");
   }

   public function deleteTable() {
      $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "brig_subscribe_popup`");
   }
}

?>