<?php
/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

function image_tag($image_file = '', $attr = array()){
    
    if(substr_count($image_file, 'http:')>0){
        
        $file = $image_file;
        
    }elseif(file_exists(ABS_DIR.WEB_DIR.IMAGE_DIR.$image_file)){
        $file = PROTOCOL.DOMAIN.IMAGE_DIR.$image_file;
        Log::save($file.' image found.');
    }else{
        Log::save($file.' image not found.',1);
        
        return '';
    }
    
    $tag = '<img src="'.$file.'" '.  parseTagAttribute($attr).' />';
    
    return $tag;
}