<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'mmva/includes/dvwaPage.inc.php';

dvwaPageStartup( array( 'authenticated') );

phpinfo();

?>
