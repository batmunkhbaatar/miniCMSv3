<?php
/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * link uusgeh
 * 
 * @return string
 */
function link_to($link_name = '', $link = '', $attr = array()){
    
    $buf = Routing::convertTo($link);
    $buf .= '<a href="'.$link.'" ';
    if(is_array($attr)){
        foreach($attr as $k=>$v){
            $buf .= $k.'="'.$v.'" ';
        }
    }
    $buf .= '>';
    $buf .= $link_name;
    $buf .= '</a>';
    
    return $buf;
}

function buildLink($data){
    $data = str_replace('?', DS, $data);
    $data = str_replace('=', DS, $data);
    
    return $data;
}