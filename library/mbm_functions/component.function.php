<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

function load_component($name){
    if(file_exists(ABS_DIR.'components'.DS.$name.DS.$name.'.component.php')){
        include(ABS_DIR.'components'.DS.$name.DS.$name.'.component.php');
        load_template('comp_'.$name);
        Log::save($name.' component loaded.');
    }else{
        Log::save($name.' component not loaded.',1);
    }
}