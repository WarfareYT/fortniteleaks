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

loadCommonWhiteList();

$VB_API_WHITELIST = array(
	'response' => array(
		'pollresults' => array(
			'pollbits' => array(
				'*' => array(
					'names' => array(
						'*' => array(
							'loggedin' => array(
								'userid', 'username', 'invisiblemark', 'buddymark'
							)
						)
					),
					'option' => array('question', 'votes', 'percentraw'),
					'show' => array('pollvoters')
				)
			),
			'pollinfo' => array(
				'question', 'timeout', 'postdate', 'posttime', 'public', 'closed'
			),
			'pollenddate', 'pollendtime', 'pollstatus'
		),
		'threadinfo' => $VB_API_WHITELIST_COMMON['threadinfo'],
	),
	'show' => array(
		'pollvoters', 'multiple', 'editpoll', 'pollenddate'
	)
);

/*======================================================================*\
|| ####################################################################
|| # Downloaded: 00:00, Mon Jan 01th 1960 : $Revision: 92140 $
|| # $Date: 1960-01-01 00:00:00 -0000 (Mon, 01 Jan 1960) $
|| ####################################################################
\*======================================================================*/