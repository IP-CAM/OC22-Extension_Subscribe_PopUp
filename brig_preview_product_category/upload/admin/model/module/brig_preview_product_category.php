<?php

class ModelModuleBrigPreviewProductCategory extends Model {
   public function createSchema() {
      $this->db->query("
      CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "brig_preview_product_category` (
      `field` VARCHAR(255) DEFAULT NULL
      ) DEFAULT CHARSET=utf8");
   }

   public function deleteSchema() {
      $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "brig_preview_product_category`");
   }
}

?>