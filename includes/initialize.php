<?php

//define core paths
// define them as absolute paths to make sure that require_once works as expected

defined('DS') ? null : define('DS' , DIRECTORY_SEPARATOR) ;
defined('SITE_ROOT') ? null : define('SITE_ROOT',DIRNAME(dirname(__FILE__)));
defined('LIB_PATH') ? null : define('LIB_PATH',SITE_ROOT.DS."includes");

// require_once(LIB_PATH.DS."phpmailer\class.phpmailer.php");
// require_once(LIB_PATH.DS."phpmailer\class.smtp.php");
// require_once(LIB_PATH.DS."phpmailer\language\phpmailer.lang-uk.php");

require_once(LIB_PATH.DS."config.php");
require_once(LIB_PATH.DS."log.php");
require_once(LIB_PATH.DS."session.php");
require_once(LIB_PATH.DS."database.php");
require_once(LIB_PATH.DS."database_object.php");

require_once(LIB_PATH.DS."user.php");
?>