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

$VB_API_WHITELIST = array(
	'session' => array('dbsessionhash', 'userid'),
	'show' => array()
);
class vB_APIMethod_login_facebook extends vBI_APIMethod
{
    public function output()
    {
        global $vbulletin, $db, $show, $VB_API_REQUESTS; 
        
        // check if facebook and session is enabled
		if (!is_facebookenabled())
		{
			return $this->error('feature_not_enabled');
		} 
        
        require_once(DIR . '/includes/functions_login.php');
        if (verify_facebook_app_authentication())
        {
            // create new session
            process_new_login('fbauto', false, '');

            // do redirect
            do_login_redirect();
        }

        else 
        {
            return $this->error('badlogin_facebook');
        }
	}
}

/*======================================================================*\
|| ####################################################################
|| # Downloaded: 00:00, Mon Jan 01th 1960 : $Revision: 92140 $
|| # $Date: 1960-01-01 00:00:00 -0000 (Mon, 01 Jan 1960) $
|| ####################################################################
\*======================================================================*/
?>
