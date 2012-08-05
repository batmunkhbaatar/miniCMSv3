<?php

/*
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Ug file bgaa esehiig shalgasnii undsen deer tuhain APP iig bgaa gej todorhoilno.
 * hediigeer APP folder bolon structure bsan ch ene file uuseegui tohioldold tuhain 
 * APP iig bhguid tootsno.
 */

/**
 * config.security.php file-d module,action ii handah erhuudiig tohiruulj ugnu
 */
define('APP_MEDIA_DIR',ABS_DIR.WEB_DIR.Config::get('app').'_data'.DS);

$user_credentials[] = array();

/**
 */
$user_login = array(
    'login_page'=>'admin/user/login',
    'login_logout'=>'admin/user/logout'
);
