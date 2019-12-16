<?php

define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", dirname(PROJECT_PATH). '/AndySW2/public');
define("SHARED_PATH", dirname(PROJECT_PATH) . '/AndySW2/shared');

$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public');
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT", $doc_root);

require_once('functions.php');
require_once('database.php');
require_once('query_functions.php');

$db = Db_connect();

?>