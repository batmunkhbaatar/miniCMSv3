<?php
/*
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * User Login hiij handah esehiig tohiruulna
 * 
 * @return boolean
 */
$user_authentication['default']  = true;
$user_authentication['home/index']  = true;
$user_authentication['user/login']  = false;

/**
 * User iin handah erh shaardah esehiig tohiruulna
 */
$user_credentials['default']     = array('admin','superadmin','operator','moderator');
$user_credentials['home/index']     = array();