<?php
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

function parse_video_bbcode($pagetext)
{
	global $vbulletin;

	($hook = vBulletinHook::fetch_hook('data_parse_bbcode_video')) ? eval($hook) : false;

	if (stripos($pagetext, '[video]') !== false)
	{
		require_once(DIR . '/includes/class_bbcode_alt.php');
		$parser = new vB_BbCodeParser_Video_PreParse($vbulletin, array());
		$pagetext = $parser->parse($pagetext);
	}

	return $pagetext;
}

/*======================================================================*\
|| ####################################################################
|| # Downloaded: 00:00, Mon Jan 01th 1960 : $Revision: 92140 $
|| # $Date: 1960-01-01 00:00:00 -0000 (Mon, 01 Jan 1960) $
|| ####################################################################
\*======================================================================*/
?>
