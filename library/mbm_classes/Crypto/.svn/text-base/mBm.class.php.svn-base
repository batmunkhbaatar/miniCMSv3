<?php

/**
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
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */

class Crypto_mBm {

    public function __construct() {
        
    }
    public static function hurvuul($txt='') {

        $w_length = strlen($txt);

        $prepare_txt = array();

        for ($i = 0; $i < $w_length; $i++) {
            $prepare_txt[$i] = ord($txt{$i});
        }

        //random string
        $rand_string = array();
        for ($i = 0; $i < self::maxConbinations(); $i++) {
            $rand_string[$i] = rand(self::minRandomNumber(), self::maxRandomNumber());
        }
        $rand_string[self::storeLengthIndex()] = $w_length;

        //solih bairshluud
        $positions = self::pos();


        //orluulah
        foreach ($positions as $k => $v) {
            if (isset($prepare_txt[$k])) {
                $rand_string[$v] = $prepare_txt[$k];
            }
        }

        //beltgeh
        $r = '';

        foreach ($rand_string as $k => $v) {
            $r .= self::calculateFromNumber($v) . ' ';
        }

        return $r;
    }

    /**
     * ali bairlaluudad hadgalah ve
     */
    public static function pos() {
        return array(5, 18, 11, 7, 8, 17, 37, 1, 4, 23, 32, 27, 3, 13, 16, 12, 0, 49,42,34, 24);
        //return array(43,32,21,38,46,20,42,18,12,6,29,23,21,43,9,46,44,6,10,27);
    }

    /**********config functions;*************/

    //hed deh index-d ugiin urtiig hadgalah. combination-s baga bna
    public static function storeLengthIndex() {
        return 20;
    }

    //hichneen shirheg too ashiglah
    public static function maxConbinations() {
        return 50;
    }

    //hedees hediin hoorond too ashiglah
    public static function minRandomNumber() {
        return 1;
    }
    public static function maxRandomNumber() {
        return 255;
    }

    //toog uurchiluh
    public static function calculateFromNumber($num='') {
        return (($num*8)-3);
        //return $num;
    }
    public static function calculateToNumber($num='') {
        return (($num+3)/8);
        //return $num;
    }

}