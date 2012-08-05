<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Ugugdsun array buhii attribute iig salgaj string butsaana.
 * @param array $attr
 * 
 * @return string
 */
function parseTagAttribute($attr = array()){
    
    $buf = '';
    if(is_array($attr)){
        foreach($attr as $attr_name=>$attr_value){
            $buf .= ' ';
            $buf .= $attr_name.'="'.$attr_value.'"';
        }
    }
    
    return $buf.' ';
    
}