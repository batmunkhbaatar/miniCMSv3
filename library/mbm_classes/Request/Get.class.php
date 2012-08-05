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
 * @subpackage Request
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */
class Request_Get extends Request {

    public function __construct() {
        
    }

    /**
     * @param $data : query string -g zohitsuulaad $GET-d butsaah yum bgaan
     * @return array
     */
    public static function setGetQuery($data) {

        $getValue = self::buildGetQuery($data);

        return $getValue ['GET'];
    }

    /**
     * modrewrite iin utgiig GET ruu hurvuuleh 
     * @param $data = SERVER['QUERY_STRING']
     * @return array
     */
    public static function buildGetQuery($data) {

        $values = array();

        //QUERY_STRING tohiruulah
        $QS = '';

        if (USE_HTACCESS == 1) {

            //index.php buyu gol file iin ner
            $engine = basename($_SERVER['SCRIPT_FILENAME']);
            $explode_engine = explode('.php', $engine);
            //app iig tohiruulah
            $app_name = $explode_engine[0];

            if (strtolower($app_name) == 'index') {
                $app_name = DEFAULT_APP;
            }

            //ariin slashiig avch hayah
            if (substr($data, - 1) == '/') {
                $data = substr($data, 0, - 1);
            }
            //urd taliin slashiig avch hayah
            if ($data{0} == '/') {
                $data = substr($data, 1);
            }
            //urd taliin ? iig avch hayah
            if ($data{0} == '?') {
                $data = substr($data, 1);
            }

            //davhar slash iig tseverleh
            $data = str_replace("//", "/", $data);

            $variables = array(0 => $app_name, '', '');
            //Route-d bichigdsen bol hargalzah app ruu shidnee
            $converted_data = Routing::convertTo($data);

            //route bhgui tohioldold
            if ($converted_data == null) {
                $variables = explode("/", $data);
                if ($variables[0] != $engine) {
                    $variables = self::fixQuery($variables);
                }
                $variables[0] = $app_name;
            } else {
                //route bgaa tohioldold
                $variables = explode("/", $converted_data);
                $app_name = $variables[0];
            }

            //0 index  == filename or App name
            //1 index  == Module
            //2 index  == Action uchir auto algasaj 3 oos ehluulev
            for ($i = 3; $i < count($variables); $i = $i + 2) {
                if (isset($variables [$i + 1])) {
                    $values ['GET'] [$variables [$i]] = $variables [$i + 1];
                    $QS .= $variables [$i] . DS . $variables [$i + 1] . DS;
                }
            }
            $QS = rtrim($QS, DS);
            $values ['GET'] ['app'] = $app_name;
            if (isset($variables [0])) {
                $values ['GET'] ['app'] = $variables [0];
            } else {
                $values ['GET'] ['app'] = $app_name;
            }
            if (isset($variables [1])) {
                $values ['GET'] ['module'] = $variables [1];
            } else {
                $values ['GET'] ['module'] = DEFAULT_MODULE;
            }
            if (isset($variables [2])) {
                $values ['GET'] ['action'] = $variables [2];
            } else {
                $values ['GET'] ['action'] = DEFAULT_ACTION;
            }
            $QS = $values ['GET'] ['module'] . DS . $values ['GET'] ['action'] . DS . $QS;

            define("QUERYSTRING", $QS);
        } else {
            $values['GET'] = $_GET;
        }

        return ($values);
    }

    /**
     * @param $data array: query string -g zohitsuulaad $GET[0]-d app-iig onooj butsaah yum bgaan
     * @return array
     */
    public static function fixQuery($data) {

        $r = array();

        foreach ($data as $k => $v) {
            $r[$k + 1] = $v;
        }
        $r[0] = '';

        return $r;
    }

}