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

loadCommonWhiteList();

$VB_API_WHITELIST = array(
	'response' => array(
		'content' => array(
			'attachmentoption' => $VB_API_WHITELIST_COMMON['attachmentoption'],
			'disablesmiliesoption', 'draft_options',
			'bloginfo' => $VB_API_WHITELIST_COMMON['bloginfo'],
			'globalcategorybits' => array(
				'*' => array(
					'blogcategoryid',
					'category' => array(
						'title'
					),
					'checked'
				)
			),
			'localcategorybits' => array(
				'*' => array(
					'blogcategoryid',
					'category' => array(
						'title'
					),
					'checked'
				)
			),
			'messagearea' => array(
				'newpost'
			),
			'notification', 'posthash', 'postpreview', 'poststarttime',
			'publish_selected', 'reason', 'taglist', 'tags_remain',
			'tag_delimiters', 'title', 'userid', 'htmlchecked'
		)
	)
);

/*======================================================================*\
|| ####################################################################
|| # Downloaded: 00:00, Mon Jan 01th 1960 : $Revision: 92140 $
|| # $Date: 1960-01-01 00:00:00 -0000 (Mon, 01 Jan 1960) $
|| ####################################################################
\*======================================================================*/