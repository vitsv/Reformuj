<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
define('LS_VERSION','0.4.2');
define('SYS_HACKER_CONSOLE',false);
header('Content-Type: text/html; charset=utf-8');

set_include_path(get_include_path().PATH_SEPARATOR.dirname(__FILE__));
chdir(dirname(__FILE__));

// Получаем объект конфигурации
require_once("./config/loader.php");
require_once(Config::Get('path.root.engine')."/classes/Engine.class.php");

$oProfiler=ProfilerSimple::getInstance(Config::Get('path.root.server').'/logs/'.Config::Get('sys.logs.profiler_file'),Config::Get('sys.logs.profiler'));
$iTimeId=$oProfiler->Start('full_time');

$oRouter=Router::getInstance();
$oRouter->Exec();

$oProfiler->Stop($iTimeId);
?>