<?php
/**
*
* @package Mail to Post Extension
* @copyright (c) 2019 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\mailtopost\migrations\v210;

use phpbb\db\migration\migration;

class m6_initial_config extends migration
{
	/**
	* Assign migration file dependencies for this migration
	*
	* @return array Array of migration files
	* @static
	* @access public
	*/
	static public function depends_on()
	{
		return array('\david63\mailtopost\migrations\v210\m5_ucp_modules');
	}

	/**
	* Add or update data in the database
	*
	* @return array Array of table data
	* @access public
	*/
	public function update_data()
	{
		return array(
			array('config.add', array('mtp_apop', 0)),
			array('config.add', array('mtp_authentication', 'USER')),
			array('config.add', array('mtp_board_email', '')),
			array('config.add', array('mtp_debug', 0)),
			array('config.add', array('mtp_default_forum', 0)),
			array('config.add', array('mtp_hostname', '')),
			array('config.add', array('mtp_interval_type', 1)),
			array('config.add', array('mtp_last_cron_task', '', 1)),
			array('config.add', array('mtp_last_process', time())),
			array('config.add', array('mtp_lock', 0, 1)),
			array('config.add', array('mtp_log_days', 30)),
			array('config.add', array('mtp_log_items_page', 25)),
			array('config.add', array('mtp_log_prune_last_gc', time())),
			array('config.add', array('mtp_mail_spoof', 1)),
			array('config.add', array('mtp_moderate', 1)),
			array('config.add', array('mtp_new_topic', 0)),
			array('config.add', array('mtp_password', '')),
			array('config.add', array('mtp_pin', 'Abc123')),
			array('config.add', array('mtp_port', 110)),
			array('config.add', array('mtp_post_date', 0)),
			array('config.add', array('mtp_process_frequency', 0)),
			array('config.add', array('mtp_realm', '')),
			array('config.add', array('mtp_show_ip', 0)),
			array('config.add', array('mtp_tls', 0)),
			array('config.add', array('mtp_user', '')),
			array('config.add', array('mtp_use_default_forum', 0)),
			array('config.add', array('mtp_workstation', '')),
		);
	}
}
