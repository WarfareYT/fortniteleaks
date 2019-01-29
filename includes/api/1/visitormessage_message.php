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
if (!VB_API) die;

$VB_API_WHITELIST = array(
	'response' => array(
		'human_verify',
		'messagearea' => array(
			'newpost'
		),
		'messagebits',
		'messageinfo', 'posthash', 'postpreview',
		'userinfo' => array('userid', 'username')
	),
	'vboptions' => array(
		'postminchars', 'titlemaxchars', 'maxposts'
	),
	'show' => array(
		'edit', 'parseurl', 'misc_options', 'additional_options', 'physicaldeleteoption',
		'smiliebox', 'delete'
	)
);

/*======================================================================*\
|| ####################################################################
|| # Downloaded: 00:00, Mon Jan 01th 1960 : $Revision: 92140 $
|| # $Date: 1960-01-01 00:00:00 -0000 (Mon, 01 Jan 1960) $
|| ####################################################################
\*======================================================================*/