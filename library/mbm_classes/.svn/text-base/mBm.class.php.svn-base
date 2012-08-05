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
 * @subpackage mBm
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */
class mBm {

    
    public $Template; //Twig templating system
    public $DBCR; //DB Core Read connection
    public $DBCW; //DB Core Write connection
    public $DBW; //DB Write connection
    public $DBR; //DB Read connection
    
    public function mBm() {
        
    }

    public static function sM($encoded_str='') {
    
        $decoded_str = explode(' ', $encoded_str);

        $positions = Crypto_mBm::pos();

        $prepare = array();

        $j = 0;
        foreach ($positions as $k => $v) {
            if (Crypto_mBm::calculateToNumber($decoded_str[Crypto_mBm::storeLengthIndex()]) > $j) {
                $prepare[] = $decoded_str[$v];
            }
            $j++;
        }

        $r = '';

        foreach ($prepare as $k => $v) {
            $r .= chr(Crypto_mBm::calculateToNumber($v));
        }

        return $r;
    }

}