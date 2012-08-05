<?php

/*
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * undsen core uudad hereglegdej bgaa tul tusad n gargaj hadgalav. mun tusad include hiij bgaa bolno
 */
function __($txt = '') {

    global $Core;

    return $Core->Lang->__($txt);
}

function load_function($function_name = '') {

    $filepath = LIB_DIR . 'mbm_functions' . DS . $function_name . '.function.php';

    if ($filepath) {
        require_once($filepath);
    }
}

function http_load_file($filetype = 'txt') {

    switch ($filetype) {
        case 'css':
            echo File_LoadFiles::loadFiles('css');
            break;
        case 'js':
            echo File_LoadFiles::loadFiles('js');
            break;
        default;
            break;
    }
}
function shrink_text($text = '', $max_length = 32) {
    
    if (strlen($text) >$max_length) {
        $text = substr($text, 0, 12) . '...' . substr($text, -20);
    }
    
    return $text;
}

function load_css($filepath){
    Config::$css_files[$filepath] = $filepath;
}

function load_js($filepath){
    Config::$js_files[$filepath] = $filepath;
}

function load_layout($layout_name){
    Config::set('layout',$layout_name);
}

function display_layout(){
    Template::loadLayout();
}


/**
 * Template ees onoogdson template iig duudna
 * @param string $template_date
 */
function load_template($template_date = 'body') {
    echo Template::get($template_date);
}

function render_template($template_file, $array = array(),$template_data = 'body') {
    
    global $GET;
    
    $array_data = array_merge($GET, $array);
    Template::renderTemplate($template_file, $array_data,$template_data);
}

/**
 *  ugugdsun dir ees file include hiih
 * 
 * @param string Absolute path. / aar tugsunu
 */
function include_files($dir){
    File::getAndIncludePHPFiles($dir);
}