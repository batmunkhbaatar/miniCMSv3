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
 * @subpackage Core
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */

class Core {

    public $include_dir;
    public $GET = array();
    public $main_config = array();
    public $Template; //Template
    public $DBCW; //DB Core Write connection
    public $DBCR; //DB Core Read connection
    public $DBW; //DB Write connection
    public $DBR; //DB Read connection
    public $Lang; //Lang
    public $session; //Session

    /**
     * undsen tohirgoo hiih
     * @param $config
     * @return null
     */

    public function __construct($config) {

        require_once 'Loader.class.php';

        Loader::registerAutoload();

        $this->initConfig($config);

        $this->GET = Request_Get::setGetQuery($_SERVER['REQUEST_URI']);
        /**
         * SESSION ID shineer onooh
         * QUERYSTRING format : mBmCHECK/XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
         */
        if (strlen(QUERYSTRING) == 41 && substr(QUERYSTRING, 0, 8) == 'mBmCHECK') {
            $sess_id = substr(QUERYSTRING, 9, 32);
        } else {
            $sess_id = null;
        }
        $session = new Storage_Session(
                        array('session_id' => $sess_id)
        );
        $session->initialize(array());

        $this->session = new User();

        //session ehelsen tul log ehleh
        Log::save("\n\n\n*********************************************************\n"
                . "*\t" . date('Y-m-d H:i:s') . ' ' . getenv('REMOTE_ADDR') . "\t\t*\n"
                . "*\t" . session_id() . "\t\t*\n"
                . "*********************************************************\n", 2);

        /**
         * Load Language. 
         * Session-d default lang tohiruulsan tul odoo lang file iig achaalna
         */
        $this->Lang = new Language($this->session->getAttribute('ln'));
        //connect to DB
        $this->initDatabase();

        //Load Twig
        $this->initTemplate();
    }

    /**
     * Undsen tohirgoog define hiine
     * @param array $config
     * 
     * @return null
     */
    public function initConfig($config = array()) {
        foreach ($config as $k => $v) {
            define(strtoupper($k), $v);
            //echo strtoupper($k).'<br />';
        }
        //die();
        $this->main_config = $config;
    }

    /**
     * @param 
     * 
     * @return null
     */
    public function initTemplate() {

        $this->Template = new Template();
    }

    /**
     * @param 
     * 
     * @return null
     */
    public function initmBm() {
        $mBm = new mBm();
        $mBm->Template = $this->Template;
        $mBm->DBCR = $this->DBCR;
        $mBm->DBCW = $this->DBCW;
        $mBm->DBR = $this->DBR;
        $mBm->DBW = $this->DBW;
    }

    /**
     * @param 
     * 
     * @return null
     */
    public function initDatabase() {


        //cache tohiruulah
        if (APPMODE == "dev") {
            $cache = new \Doctrine\Common\Cache\ArrayCache;
        } else {
            $cache = new \Doctrine\Common\Cache\ApcCache;
        }

        /**         * **DB Write connection***** */
        $DBW = new \Doctrine\DBAL\Configuration();
        $DBW->setResultCacheImpl($cache);
        $DBW_params = array(
            'dbname' => DBW_NAME,
            'user' => DBW_USER,
            'password' => DBW_PASS,
            'host' => DBW_HOST,
            'driver' => DBW_DRIVER,
        );
        $this->DBW = \Doctrine\DBAL\DriverManager::getConnection($DBW_params, $DBW);
        $this->DBW->setCharset(DBW_CHARSET);

        //olon DB ashiglah tohirgootoi bol busad connection iig uusgeh esreg tohioldold umnuh connection ashiglana
        if (USE_MULTIPLE_DB == 1) {

            /**             * **DB Read connection***** */
            $DBR = new \Doctrine\DBAL\Configuration();
            $DBR->setResultCacheImpl($cache);
            $DBR_params = array(
                'dbname' => DBR_NAME,
                'user' => DBR_USER,
                'password' => DBR_PASS,
                'host' => DBR_HOST,
                'driver' => DBR_DRIVER,
            );
            $this->DBR = \Doctrine\DBAL\DriverManager::getConnection($DBR_params, $DBR);
            $this->DBR->setCharset(DBR_CHARSET);


            /**             * **DB write Core connection***** */
            $DBCW = new \Doctrine\DBAL\Configuration();
            $DBCW->setResultCacheImpl($cache);
            $DBCW_params = array(
                'dbname' => DBCW_NAME,
                'user' => DBCW_USER,
                'password' => DBCW_PASS,
                'host' => DBCW_HOST,
                'driver' => DBCW_DRIVER,
            );
            $this->DBCW = \Doctrine\DBAL\DriverManager::getConnection($DBCW_params, $DBCW);
            $this->DBCW->setCharset(DBCW_CHARSET);

            /**             * **DB read Core connection***** */
            $DBCR = new \Doctrine\DBAL\Configuration();
            $DBCR->setResultCacheImpl($cache);
            $DBCR_params = array(
                'dbname' => DBCR_NAME,
                'user' => DBCR_USER,
                'password' => DBCR_PASS,
                'host' => DBCR_HOST,
                'driver' => DBCR_DRIVER,
            );
            $this->DBCR = \Doctrine\DBAL\DriverManager::getConnection($DBCR_params, $DBCR);
            $this->DBCR->setCharset(DBCR_CHARSET);

            //cache dir tohiruulah
        } else {
            $this->DBR = $this->DBW;
            $this->DBCW = $this->DBW;
            $this->DBCR = $this->DBW;
        }
    }

}