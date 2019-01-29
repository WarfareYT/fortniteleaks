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
 * Default Content View
 * Provides default functionality for common content fields.
 *
 * @package vBulletin
 * @author vBulletin Development Team
 * @version $Revision: 92140 $
 * @since $Date: 1960-01-01 00:00:00 -0000 (Mon, 01 Jan 1960) $
 * @copyright vBulletin Solutions Inc.
 */
class vB_View_Content extends vB_View
{
	/*Render========================================================================*/

	/**
	 * Prepares properties for rendering.
	 */
	protected function prepareProperties()
	{
		$this->description = htmlspecialchars_uni($this->description);
		$this->contenttype = vB_Types::instance()->getContentTypeTitle(array('package' => $this->package, 'class' => $this->class));
	}
}

/*======================================================================*\
|| ####################################################################
|| # Downloaded: 00:00, Mon Jan 01th 1960 : $Revision: 92140 $
|| # $Date: 1960-01-01 00:00:00 -0000 (Mon, 01 Jan 1960) $
|| ####################################################################
\*======================================================================*/
