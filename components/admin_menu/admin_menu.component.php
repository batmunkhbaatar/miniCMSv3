<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
$lang = array(
    //menu nii title uud
    'Content_Management'=>__('Content Management'),
    'Applications'=>__('Applications'),
    'Members'=>__('Members'),
    'Components'=>__('Components'),
    'Plugins'=>__('Plugins'),
    'System'=>__('System'),
    'Firewall_IPS_IDS'=>__('Firewall / IPS / IDS'),
        'Documentation'=>__('Documentation'),
    
    //Content Management menu nii link uud
    'cm_menu1'=>__('Categories'),
);

render_template('components/admin_menu.mbm', array('lang' => $lang,'a'=>$a), 'comp_admin_menu');