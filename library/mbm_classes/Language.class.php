<?php

/*
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage Language
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */
class Language {

    public static $words = array();
    public $langFilesDir;
    public $langFiles = array();

    public function Language($ln = 'mn') {
        if (ABS_DIR . 'lang' . DS . $ln . DS . 'index.lang.php') {
            $this->langFilesDir = ABS_DIR . 'lang' . DS . $ln . DS;
            Log::save('Language file found. (' . $ln . ')');
        } else {
            $this->langFilesDir = ABS_DIR . 'lang' . DS . strtolower(DEFAULT_LANG) . DS;
            Log::save('Language file not found. (' . $ln . ')',1);
        }
        $this->langFiles = File::getFiles($this->langFilesDir, 'php');
        
        $lang = array();
        foreach ($this->langFiles as $k=>$v){
            require_once $v;
        }
        $this->words = $lang;
    }

    public function __($txt = '') {

        if(!isset($this->words[$txt])){
            return $txt;
            //Log::save('$lang[\''.$txt. '\'] word not found.',1);
        }
        return $this->words[$txt];
    }

    static function get($txt = '') {

        if(!isset(self::$words[$txt])){
            
            return $txt;
            //Log::save('$lang[\''.$txt. '\'] word not found.',1);
        }
        return self::$words[$txt];
    }


}