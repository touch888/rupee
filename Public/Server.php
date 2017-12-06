<?php
//use Core\Core;
define('ROOT', dirname(__DIR__));
require_once ROOT.'/Core/Core.php';
require_once ROOT.'/Core/DbDriver/Mysql.php';
\Core\Core::run();