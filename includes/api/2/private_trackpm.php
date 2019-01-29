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
		'HTML' => array(
			'confirmedreceipts' => array(
				'startreceipt',
				'endreceipt',
				'numreceipts',
				'receiptbits' => array(
					'*' => array(
						'receipt' => array(
							'receiptid', 'send_time',
							'read_time', 'title', 'tousername'
						)
					)
				),
				'counter'
			),
			'unconfirmedreceipts' => array(
				'startreceipt',
				'endreceipt',
				'numreceipts',
				'receiptbits' => array(
					'*' => array(
						'receipt' => array(
							'receiptid', 'send_time',
							'read_time', 'title', 'tousername'
						)
					)
				),
				'counter'
			)
		)
	),
	'show' => array(
		'readpm', 'receipts', 'pagenav'
	)
);

function api_result_prerender_2($t, &$r)
{
	switch ($t)
	{
		case 'pm_receiptsbit':
		case 'private_trackpm_receiptbit':
			$r['receipt']['send_time'] = $r['receipt']['sendtime'];
			$r['receipt']['read_time'] = $r['receipt']['readtime'];
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