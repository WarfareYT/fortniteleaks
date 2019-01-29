<?php if (!defined('VB_ENTRY')) die('Access denied.');

/*======================================================================*\
|| #################################################################### ||
|| # vBulletin 4.2.5 - Nulled by Tempus @ vBulletin-Mods.com            # ||
|| # ---------------------------------------------------------------- # ||
|| # Copyright ©2000-2017 vBulletin Solutions Inc. All Rights Reserved. ||
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

require_once (DIR . '/vb/search/result.php');

/**
 * Enter description here...
 *
 * @package vBulletin
 * @subpackage Search
 */
class vB_Search_Result_Null extends vB_Search_Result
{
	public function __construct() {}

	/**
	 * Enter description here...
	 *
	 * @param unknown_type $user
	 * @return unknown
	 */
	public function can_search($user)
	{
		return false;
	}

	public function get_contenttype() 
	{
		return "";
	}

	/**
	 * Enter description here...
	 *
	 * @return unknown
	 */
	public function render($current_user, $criteria, $template_name = '')
	{
		return "";
	}

	//for real types, the type should be a singleton that we keep a reference 
	//to in every item
	public function get_type()
	{
	}

	public function get_group_item()
	{
		return new vB_Search_Result_Null();
	}
}

/*======================================================================*\
|| ####################################################################
|| # Downloaded: 00:00, Mon Jan 01th 1960 : $Revision: 92140 $
|| # $Date: 1960-01-01 00:00:00 -0000 (Mon, 01 Jan 1960) $
|| ####################################################################
\*======================================================================*/

