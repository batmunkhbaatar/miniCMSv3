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
 * @subpackage Log
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */
class Log {

    static $log = '';
    static $filename;

    public function Log($txt = '') {
        self::$log .= $txt;
    }

    /**
     * @param $txt : Log text
     * @param $type : 
     *                  0 - error medeelel bish, 
     *                  1 - error medeelel
     *                  2 - trace hiihgui
     */
    public static function save($txt = '<hr />', $type = 0) {

        $bt = debug_backtrace();
        
        $bt_text = ' in file ' . shrink_text($bt[0]['file']) . ' at row ' . $bt[0]['line'];
        
        $content = "[" . date('Y-m-d H:i:s') . " ". number_format((float)microtime(),4)."] " . $txt;

        switch ($type) {
            case 1:
                $content = 'ERROR : ' . $content;
                $content .= $bt_text;
                break;
            case 2:
                break;
            default:
                $content .= $bt_text;
                break;
        }

        if ($type == 1) {
            
        }

        self::$log .= $content . "<br />";
        self::updateFile($content);

        unset($content);
    }

    public static function get() {
        return self::$log;
    }

    public static function updateFile($txt) {

        if (ENABLE_LOG == 1) {
            if (!file_exists(LOG_DIR . date('Y-m-d-H') . 'log')) {
                self::$filename = LOG_DIR . APPMODE . '_' . date('Y-m-d') . '.log';
            }

            $fp = fopen(self::$filename, 'a');
            @fwrite($fp, $txt . "\n");
        }
    }

}
