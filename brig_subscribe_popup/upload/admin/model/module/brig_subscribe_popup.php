<?php
/**
 * Developed by BRIg
 * @user: WebPR
 * @date: 4/16/16
 */

class ModelModuleBrigSubscribePopup extends Model {
   public function createTable() {
      $this->db->query("
      CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "brig_subscribe_popup` (
      `field` VARCHAR(255) DEFAULT NULL
      ) DEFAULT CHARSET=utf8");
   }


	public function addCustomerGroup($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "customer_group SET approval = '" . (int)$data['approval'] . "', sort_order = '" . (int)$data['sort_order'] . "'");

		$customer_group_id = $this->db->getLastId();

		foreach ($data['customer_group_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "customer_group_description SET customer_group_id = '" . (int)$customer_group_id . "', language_id = '" . (int)$language_id . "', name = '" . $this->db->escape($value['name']) . "', description = '" . $this->db->escape($value['description']) . "'");
		}
	}

   public function deleteTable() {
      $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "brig_subscribe_popup`");
   }
}

?>