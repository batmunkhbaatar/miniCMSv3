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
 * @subpackage Routing
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */
class Routing {

    static $route;

    public function __construct() {
        
    }

    /**
     * homepage, admin_homepage zereg orj irsen QUERY_STRING iig $GET ruu beldej butsaana
     * 
     * @param string $route 
     */
    public static function convertTo($route = 'homepage') {

        global $routing;

        $route = str_replace('.php', '', $route);
        $route = str_replace('?/', '?', $route);
        
        if (substr_count($route, '?') > 0) {
            $link = explode('?', $route);
            $link_qs = $link[1];
        } else {
            $link = explode('/', $route);
            $link_qs = '';
            for ($i = 1; $i < count($link); $i++) {
                $link_qs .= $link[$i] . '/';
            }

            $link_qs = rtrim($link_qs, '/');
        }

        //route bgaa tohioldold
        if (isset($routing[$link[0]]) && is_array($routing[$link[0]])) {

            $app = $routing[$link[0]]['app'];

            if (strlen($link_qs) > 0) {
                $link_qs = str_replace('=', '/', str_replace('&', '/', $link_qs));
            } else {
                $link_qs = '';
            }

            //route deer module tohiruulaagui bol
            if (!isset($routing[$link[0]]['module']) || $routing[$link[0]]['module'] == null || $routing[$link[0]]['module'] == '') {
                //query_string eer utga orj ireegui bol default iig onoono.
                //utga orj irsen bol tuhain ehnii utgiig auto avna
                if ($link_qs == '') {
                    $r_module = DEFAULT_MODULE;
                } else {
                    $r_module = '';
                }
            } else {
                $r_module = $routing[$link[0]]['module'];
            }

            //route deer action tohiruulaagui bol
            if (
                    !isset($routing[$link[0]]['action']) ||
                    $routing[$link[0]]['action'] == null ||
                    $routing[$link[0]]['action'] == '') {
                //query_string eer utga orj ireegui bol default iig onoono.
                //utga orj irsen bol tuhain ehnii utgiig auto avna
                if ($link_qs == '') {
                    if (!isset($routing[$link[0]]['module']) || $routing[$link[0]]['module'] == null || $routing[$link[0]]['module'] == '') {
                        $r_module = DEFAULT_MODULE;
                    }
                    $action = DEFAULT_ACTION;
                } else {
                    $action = '';
                }
            } else {
                $action = $routing[$link[0]]['action'];
            }

            $app = str_replace('?', '', $app);
            $r = $app;
            if ($r_module != '') {
                $r .= '/' . $r_module;
            }
            if ($action != '') {
                $r .= '/' . $action;
            }
            if ($link_qs != '') {
                $r .= '/' . $link_qs;
            }
            $r = rtrim($r, "/");

            return $r;
        } else {
            Log::save($link[0] . ' route not found', 1);
            return null;
        }
    }

}