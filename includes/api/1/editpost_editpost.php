<?php
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
if (!VB_API) die;

define('VB_API_LOADLANG', true);

loadCommonWhiteList();

$VB_API_WHITELIST = array(
	'response' => array(
		'attachmentoption' => $VB_API_WHITELIST_COMMON['attachmentoption'],
		'disablesmiliesoption', 'emailchecked', 'folderbits',
		'explicitchecked', 'podcastauthor', 'podcastkeywords',
		'podcastsize', 'podcastsubtitle', 'podcasturl', 'posthash',
		'posticons',
		'postinfo' => array(
			'postid', 'username', 'userid', 'postdate', 'posttime'
		),
		'postpreview', 'poststarttime', 'prefix_options',
		'selectedicon',
		'threadinfo' => $VB_API_WHITELIST_COMMON['threadinfo'],
		'title', 'htmloption',
		'messagearea' => array(
			'newpost'
		)
	),
	'show' => array(
		'subscriptionfolders', 'empty_prefix_option', 'posticons', 'deletepostoption',
		'openclose', 'stickunstick', 'closethread', 'unstickthread', 'physicaldeleteoption',
		'keepattachmentsoption', 'firstpostnote', 'parseurl', 'misc_options', 'smiliebox', 'attach'
	)
);

/*======================================================================*\
|| ####################################################################
|| # Downloaded: 00:00, Mon Jan 01th 1960 : $Revision: 92140 $
|| # $Date: 1960-01-01 00:00:00 -0000 (Mon, 01 Jan 1960) $
|| ####################################################################
\*======================================================================*/