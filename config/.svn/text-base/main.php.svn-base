<?php
require_once('database.php');

/****************Webiin undsen tohirgoo*********************/
$mbm_config ['protocol'] = 'http://';
$mbm_config ['domain'] = $_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'];
$mbm_config ['web_dir'] = 'web'.DS; //Ex: ABS_DIR.'public_html/'
$mbm_config ['www_dir'] = ''; // http://www.mng.cc/www_dir/ helberteigeer suuriluulalt hiivel hereglene. : Ex: www_dir/ 
$mbm_config ['tmp_dir'] = ABS_DIR.'tmp'.DS; 
$mbm_config ['cache_dir'] = ABS_DIR.'cache'.DS; 
$mbm_config ['log_dir'] = ABS_DIR.'log'.DS; 

/****************Default utguud*********************/
$mbm_config ['default_charset'] = 'utf8';
$mbm_config ['default_lang'] = 'mn';
$mbm_config ['default_app'] = 'fileshare';
$mbm_config ['default_module'] = 'home';
$mbm_config ['default_action'] = 'index';

/****************htaccess ashiglah eseh*********************/
$mbm_config ['use_htaccess'] = 1;

/****************Tsagnii tohirgoo*********************/
$mbm_config ['time_zone'] = 'Asia/Ulaanbaatar';
$mbm_config ['date_format'] = "Y/m/d H:i:s";


/****************CACHE tohirgoo*********************/
$mbm_config ['use_cache'] = 1;
$mbm_config ['cache_name'] = 'memcached';
$mbm_config ['cache_host'] = 'localhost';
$mbm_config ['cache_port'] = 11218;

/****************Busad tohirgoo*********************/
$mbm_config ['enable_debug'] = 1;
$mbm_config ['enable_log'] = 1;

/**
 * dev : Development mode
 * prod : Production mode
 */
$mbm_config ['appmode'] = 'dev';