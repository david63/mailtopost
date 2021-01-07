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

class m7_acp_modules extends migration
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
		return array('\david63\mailtopost\migrations\v210\m6_initial_config');
	}

	/**
	* Add the ACP modules
	*
	* @return array Array update data
	* @access public
	*/
	public function update_data()
	{
		return [
			['module.add', [
				'acp',
				'ACP_CAT_USERS',
				[
					'module_basename'   => 'acp_users',
					'module_langname'   => 'MAIL_TO_POST_FORUM',
					'module_mode'       => 'mtpforum',
					'module_display' 	=> false,
					'module_auth'       => 'ext_david63/mailtopost && acl_a_user',
				],
			]],
		];
	}
}
