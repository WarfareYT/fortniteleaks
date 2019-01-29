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
		'HTML' => array(
			'deleteother', 'deletereason', 'deletetype', 'keepattachments', 'postid',
			'postids',
			'punitive_action' => array(
				'ban_usergroups'
			),
			'report', 'threadids',
			'type', 'useraction',
			'username_bits' => array(
				'*' => array(
					'user' => array(
						'userid', 'username', 'joindate_string', 'post_count'
					),
					'show' => array(
						'userid_checkbox', 'prevent_userselection'
					)
				)
			),
		)
	)
);

/*======================================================================*\
|| ####################################################################
|| # Downloaded: 00:00, Mon Jan 01th 1960 : $Revision: 92140 $
|| # $Date: 1960-01-01 00:00:00 -0000 (Mon, 01 Jan 1960) $
|| ####################################################################
\*======================================================================*/