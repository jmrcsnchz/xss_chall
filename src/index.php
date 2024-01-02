<?php

header("Content-Security-Policy: script-src 'self'");
if(!isset($_GET['name'])){
	header("location: ?name=New User");
}

?>
SuggestedURL: https://website.local/<?=$_GET['name']?>/.<br><br>This page is protected by <font color=red>CSP </font>. Your goal is to execute <code>alert('xss')</code> on this web page
