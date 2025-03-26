<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'mmva/includes/dvwaPage.inc.php';

dvwaPageStartup( array( ) );

$page = dvwaPageNewGrab();
$page[ 'title' ]   = 'About' . $page[ 'title_separator' ].$page[ 'title' ];
$page[ 'page_id' ] = 'about';

$page[ 'body' ] .= "
<div class=\"body_padded\">
	
</div>\n";

dvwaHtmlEcho( $page );

exit;

?>
