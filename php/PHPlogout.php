<?php
//phpinfo();
setcookie('login','',0,'/','',0);
header("location:".$_SERVER['HTTP_REFERER']);
?>