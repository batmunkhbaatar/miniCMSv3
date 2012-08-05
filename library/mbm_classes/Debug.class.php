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
 * @subpackage library
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */
class Debug {

    public $buf = '';

    public function __construct() {

        if (ENABLE_DEBUG == 1) {
            $this->Date();
            $this->Config();
            $this->IncludedFiles();
            $this->Request();
            $this->Session();
            $this->Template();
        }
    }

    public function test() {
        echo '<div id="debug">';
        echo $this->buf;
        echo '</div>';
    }

    public function Config() {

        $conf = Config::$data;

        $this->buf .= '<div>';
        $this->buf .= $this->echoMe('Config');
        $this->updateArrayToBuf($conf->data);
        $this->buf .= '</div>';
    }

    public function Date() {

        $date = date_create(null, timezone_open(TIME_ZONE));
        $tz = date_timezone_get($date);

        $this->buf .= '<div>';
        $this->buf .= $this->echoMe('Date config');
        $this->buf .= 'Date : ' . date('Y-m-d H:i:s') . '<br />';
        $this->buf .= 'Time zone : ' . timezone_name_get($tz) . '<br />';
        $this->buf .= 'Server date : ' . date('Y-m-d H:i:s', time()) . '<br />';
        $this->buf .= '</div>';
    }

    public function IncludedFiles($skip_3rd_party = 1) {

        $this->buf .= '<div>';
        $this->buf .= $this->echoMe('Included files');
        $files = get_included_files();

        $ifiles = array();
        //Twig, Doctrine ii file uudiig algasah
        foreach ($files as $k => $v) {
            if (substr_count($v, 'Twig') == 0 && substr_count($v, 'twig') == 0 && substr_count($v, 'Doctrine') == 0 && $skip_3rd_party == 1) {
                $ifiles[$k] = $v;
            }
        }
        $this->updateArrayToBuf($ifiles);
        $this->buf .= '</div>';
    }

    public function Request() {

        $get = $GLOBALS['GET'];
        $this->buf .= '<div>';
        $this->buf .= $this->echoMe('Get request');
        $this->buf .= 'Query String : ' . $_SERVER['QUERY_STRING'] . '<br />';
        $this->updateArrayToBuf($get);
        $this->buf .= '</div>';
    }

    public function Session() {

        $sess = $GLOBALS['session'];
        $this->buf .= '<div>';
        $this->buf .= $this->echoMe('Sessions');
        $this->buf .= 'session name : ' . session_name() . '<br />';
        $this->buf .= 'session id : ' . session_id() . '<br />';
        $this->updateArrayToBuf($_SESSION);
        $this->buf .= '------------USER-------------------<br />';
        $this->updateArrayToBuf($sess->getAttribute('user'));
        $this->buf .= '</div>';
    }

    public function Template() {
        
    }

    protected function echoMe($txt = '') {

        return '<h3>' . $txt . '</h3>';
    }

    protected function updateArrayToBuf($array) {

        if (is_array($array)) {
            foreach ($array as $k => $v) {
                if (!is_array($array[$k])) {
                    $this->buf .= $k . ' => ' . $v . '<br />';
                }
            }
        }
    }

}