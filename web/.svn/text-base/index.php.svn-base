<?php

define('TIME_START', microtime());
require_once '../library/bootstrap.php';
display_layout();
//exit('<br /><br /><br />end of the index.php page');


require_once '../library/bootstrap.php';
print_r($GET);
echo '<h2>ROUTING</h2>';
echo 'homepage :'.Routing::convertTo('homepage?a=b&c=d').'<br />';
echo 'myroute1 :'.Routing::convertTo('myroute1').'<br />';
echo 'homepage2 :'.Routing::convertTo('homepage2').'<br />';
echo 'homepage3 :'.Routing::convertTo('admin/home').'<br />';
echo '<hr />';
//new Config_App('fileshare');
display_layout() . '..';
echo '<hr />';
echo '<hr />';
echo '<hr />';
echo __('Welcome to miniCMS v3');
echo '<hr />';
echo 'App: ' . Config::get('app') . ' - ' . Config::get('app_dir') . '<br />';
echo 'Module: ' . Config::get('module') . ' - ' . Config::get('module_dir') . '<br />';
echo 'Action: ' . Config::get('action') . '<br />';
echo 'Template: ' . Config::get('template_data') . '<br />';
echo 'Layout: ' . Config::get('layout') . '<br />';
echo 'Not fount: ' . (int) Config::get('not_found_page') . '<br />';
echo '<br />';
echo '<br />';
print_r(QUERYSTRING);
echo '<br />';
print_r($GET);
echo '<br />';
print_r(Config::$js_files);
echo '<br />';
echo '<br />';
print_r(Config::$css_files);
echo '<hr />';
echo '<h2>debug lang</h2>';
print_r($Core->Lang->words);
echo '<hr />';
__('ddddddddd');
//exit();
echo str_repeat('<br />', 30);
$sm = $Core->DBW->getSchemaManager();
$databases = $sm->listDatabases();
$table = $sm->listTableDetails(DBW_PREFIX . 'settings');
print_r($databases);





echo '<h3>Install</h3>';
$ins = new Install_Schema_Users($Core->DBW);
$ins->create();



//phpinfo();
//echo '<h3>Data Retrieval from DB</h3>';
//$sql = "SELECT * FROM mbm_settings WHERE value=?";
//$stmt = $Core->DBR->prepare($sql); // Simple, but has several drawbacks
//$stmt->bindValue(1,'admin@mng.cc');
//$stmt->fetchAll();
//while ($row = $stmt->fetch()) {
//    echo $row['name'].'- '.$row['value'].'<br />';
//}


$debug = new Debug();
$debug->test();

define('TIME_END', microtime());

echo '<h1>Load time : ' . (float)(TIME_END - TIME_START) . ' microtime</h1>';
Log::save("\n*********************************************************\n*\t Loaded in " . (TIME_END - TIME_START) . " microseconds\t\t*\n*********************************************************\n",2);