<?php if (!defined('VB_ENTRY')) die('Access denied.');

/*======================================================================*\
|| #################################################################### ||
|| # vBulletin 4.2.5 - Nulled by Tempus @ vBulletin-Mods.com            # ||
|| # ---------------------------------------------------------------- # ||
|| # Copyright �2000-2017 vBulletin Solutions Inc. All Rights Reserved. ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- VBULLETIN IS NOT FREE SOFTWARE ---------------- # ||
|| #        www.vbulletin.com | www.vbulletin.com/license.html        # ||
|| #################################################################### ||
\*======================================================================*/

/**
 * @package vBulletin
 * @subpackage Search
 * @author Kevin Sours, vBulletin Development Team
 * @version $Revision: 92140 $
 * @since $Date: 1960-01-01 00:00:00 -0000 (Mon, 01 Jan 1960) $
 * @copyright vBulletin Solutions Inc.
 */

require_once (DIR . '/vb/search/type.php');
require_once (DIR . '/vb/search/result/null.php');

/**
 * Enter description here...
 *
 * @package vBulletin
 * @subpackage Search
 */
class vB_Search_Type_Null extends vB_Search_Type
{
	public function fetch_validated_list($user, $ids, $gids)
	{
		//null items are never valid
		$retval = array_fill_keys($ids, false);

		($hook = vBulletinHook::fetch_hook('search_validated_list')) ? eval($hook) : false;

		return $retval;
	}

	public function is_enabled()
	{
		return false;
	}

	public function get_display_name()
	{
		return 'Null Type';
	}

	public function create_item($id)
	{
		//this shouldn't normally be called
		return new vB_Search_Result_Null();
	}

}

/*======================================================================*\
|| ####################################################################
|| # Downloaded: 00:00, Mon Jan 01th 1960 : $Revision: 92140 $
|| # $Date: 1960-01-01 00:00:00 -0000 (Mon, 01 Jan 1960) $
|| ####################################################################
\*======================================================================*/

