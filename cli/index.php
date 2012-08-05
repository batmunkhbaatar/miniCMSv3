<?php

define('TIME_START', microtime());
require_once '../library/bootstrap.php';

//new Config_App('fileshare');


echo Log::get();
$debug = new Debug();
$debug->test();

define('TIME_END', microtime());

echo '<h1>Execution time : ' . (TIME_END - TIME_START) . ' microtime</h1>';