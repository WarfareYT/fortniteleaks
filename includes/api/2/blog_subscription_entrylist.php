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
		'content' => array(
			'blogbits' => array(
				'*' => array(
					'post' => array(
						'blogid', 'title', 'blogtitle', 'postedby_username',
						'ratingnum', 'ratingavg', 'lastposttime',
						'lastcommenter_encoded', 'lastcommenter', 'lastblogtextid',
						'notification', 'userid'
					),
					'show' => array(
						'datetime', 'rating', 'private'
					)
				)
			),
			'sub_count',
			'pagenav' => $VB_API_WHITELIST_COMMON['pagenav']
		)
	)
);

function api_result_prerender_2($t, &$r)
{
	switch ($t)
	{
		case 'blog_cp_manage_subscriptions_entry':
			$r['post']['lastposttime'] = $r['post']['lastcomment'];
			break;
	}
}

vB_APICallback::instance()->add('result_prerender', 'api_result_prerender_2', 2);

/*======================================================================*\
|| ####################################################################
|| # Downloaded: 00:00, Mon Jan 01th 1960 : $Revision: 92140 $
|| # $Date: 1960-01-01 00:00:00 -0000 (Mon, 01 Jan 1960) $
|| ####################################################################
\*======================================================================*/