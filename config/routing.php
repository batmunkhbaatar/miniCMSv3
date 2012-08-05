<?php
/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$routing = array(
    'homepage'=>array(
        'app'=>'fileshare',
        'module'=>'home',
        'action'=>'index'
    ),
    'admin_dashboard'=>array(
        'app'=>'admin',
        'module'=>'home',
        'action'=>'index'
    ),
    'file'=>array(
        'app'=>'fileshare'
    ),
    'admins'=>array(
        'app'=>'admin'
    ),
    'mbm_admin'=>array(
        'app'=>'admin'
    ),
    'homepage2'=>array(
        'app'=>'admin',
        'module'=>'',
        'action'=>''
    )
);