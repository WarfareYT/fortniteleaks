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

/**
 * Results class for a search item
 *
 * This interface must be defined for each type being registered for search.
 * It handles two operations:
 * The first is verifying that items of that type returned by
 * a search implementation can be displayed to the requesting user.
 *
 * The second is rendering the data for the type to be displayed as a search result.
 *
 * @package vBulletin
 * @subpackage Search
 */
abstract class vB_Search_Result
{

	protected function __construct() {}

	/**
	 * Can we display this item in a search result for the given user
	 *
	 * @param vB_User $user user whose permissions we wish to check.
	 */
	abstract public function can_search($user);

	abstract public function get_contenttype();

	/**
	* Return the group search result for this parent
	*
	* By default returns a vB_Search_Result_Null item or throws an excetion in debug mode
	*/
	public function get_group_item()
	{
		if ($GLOBALS['vbulletin']->debug)
		{
			throw new Exception("Group item not defined for: " . get_class($this));
		}
		else
		{
			return new vB_Search_Result_Null();
		}
	}

	/**
	 * Return the html string for this item in the results list.
	 *
	 * @param vB_User $user user requesting search (used to customize search results by user)
	 */
	abstract public function render($current_user, $criteria, $template_name = '');

	public function get_id()
	{
		return false;
	}

}

/*======================================================================*\
|| ####################################################################
|| # Downloaded: 00:00, Mon Jan 01th 1960 : $Revision: 92140 $
|| # $Date: 1960-01-01 00:00:00 -0000 (Mon, 01 Jan 1960) $
|| ####################################################################
\*======================================================================*/
