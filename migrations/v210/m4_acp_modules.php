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

class m4_acp_modules extends migration
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
		return array('\david63\mailtopost\migrations\v210\m3_initial_permissions');
	}

	/**
	* Add the ACP modules
	*
	* @return array Array update data
	* @access public
	*/
	public function update_data()
	{
		return array(
			// Add the ACP modules
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'MAIL_TO_POST')),

			array('module.add', array(
				'acp', 'MAIL_TO_POST', array(
					'module_basename'	=> '\david63\mailtopost\acp\acp_mailtopost_module',
					'modes'				=> array('manage', 'actions'),
				),
			)),

			array('module.add', array(
				'acp', 'ACP_FORUM_LOGS', array(
					'module_basename'	=> '\david63\mailtopost\acp\acp_mailtopost_log_module',
					'modes'				=> array('main'),
				),
			)),
		);
	}
}
