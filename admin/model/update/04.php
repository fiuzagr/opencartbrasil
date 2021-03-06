<?php
class ModelUpdate04 extends Model {
	public function update() {
		$this->db->query("UPDATE `" . DB_PREFIX . "event` SET `trigger` = 'catalog/model/account/affiliate/addAffiliate/after' WHERE event_id = 10;");

		$this->db->query("UPDATE `" . DB_PREFIX . "event` SET `trigger` = 'catalog/model/account/affiliate/editAffiliate/after' WHERE event_id = 11;");

		$this->db->query("UPDATE `" . DB_PREFIX . "event` SET `trigger` = 'catalog/model/account/affiliate/addAffiliate/after' WHERE event_id = 18;");

		$this->db->query("UPDATE `" . DB_PREFIX . "event` SET `trigger` = 'catalog/model/account/affiliate/addAffiliate/after' WHERE event_id = 19;");

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "event` WHERE code = 'statistics_order_delete'");
		if (!$query->num_rows) {
			$this->db->query("INSERT INTO `" . DB_PREFIX . "event` (`code`, `trigger`, `action`, `status`) VALUES ('statistics_order_delete', 'catalog/model/checkout/order/deleteOrder/before', 'event/statistics/deleteOrder', 1);");
		}

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "cron` WHERE code = 'session'");
		if (!$query->num_rows) {
			$this->db->query("INSERT INTO `" . DB_PREFIX . "cron` (`cron_id`, `code`, `cycle`, `action`, `status`, `date_added`, `date_modified`) VALUES (3, 'session', 'day', 'cron/session', 1, '2019-03-19 04:33:00', '2019-03-19 04:33:00');");
		}
	}
}