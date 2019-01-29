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

/**
 * Description of facebook_getforumid
 *
 * @author Jorge Tiznado
 */
class vB_APIMethod_facebook_getforumid extends vBI_APIMethod {
    //put your code here
    public function output()
    {
            $data = array('response' => array('forumid' => $this->getforumId()));
            return $data;
    }

    private function getforumId()
    {
        global $vbulletin, $db;

        $arrayResponse = array();

        
        
            $vbulletin->input->clean_array_gpc('r', array(
                'threadid' => TYPE_STR,
            ));

            $vbulletin->GPC['threadid'] = convert_urlencoded_unicode($vbulletin->GPC['threadid']);
            $threadid = $vbulletin->GPC['threadid'];

            $forumid = $db->query_first("
				SELECT thread.forumid
				FROM " . TABLE_PREFIX . "thread AS thread
				
				WHERE thread.threadid = $threadid
			");
            return $forumid['forumid'];
        
    }
}

/*======================================================================*\
|| ####################################################################
|| # Downloaded: 00:00, Mon Jan 01th 1960 : $Revision: 92140 $
|| # $Date: 1960-01-01 00:00:00 -0000 (Mon, 01 Jan 1960) $
|| ####################################################################
\*======================================================================*/
?>
