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

$VB_API_WHITELIST = array(
	'response' => array(
		'customfieldsheader', 'first', 'last', 'leadergroup',
		'memberlistbits' => array(
			'*' => array(
				'userinfo' => array(
					'username', 'userid', 'usertitle',
					'icq', 'aim', 'yahoo', 'skype', 'msn', 'homepage',
					'datejoined', 'posts', 'lastvisittime',
					'reputationdisplay' => array(
						'posneg',
						'post' => array(
							'username', 'level'
						)
					),
					'profilepic', 'birthday', 'age'
				),
				'customfields', 'avatarurl',
				'show' => array(
					'searchlink', 'emaillink', 'homepagelink', 'pmlink', 'avatar',
					'hideleader'
				)
			)
		),
		'pagenav', 'perpage', 'searchtime', 'totalcols', 'totalusers',
		'usergroupid', 'oppositesort'
	),
	'show' => array(
		'homepagecol', 'searchcol', 'datejoinedcol', 'postscol', 'usertitlecol',
		'lastvisitcol', 'reputationcol', 'avatarcol', 'birthdaycol', 'agecol',
		'emailcol', 'customfields', 'imicons', 'profilepiccol', 'advancedlink',
		'usergroup', 'selectedletter', 'pagenav', 'prev', 'next', 'first',
		'last', 'pagelinks', 'curpage', 'hideleader'
	)
);

/*======================================================================*\
|| ####################################################################
|| # Downloaded: 00:00, Mon Jan 01th 1960 : $Revision: 92140 $
|| # $Date: 1960-01-01 00:00:00 -0000 (Mon, 01 Jan 1960) $
|| ####################################################################
\*======================================================================*/