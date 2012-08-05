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
 * @subpackage config
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */
class Config_Template extends Config {

    public $config;

    public function Config_Template() {

        $this->setTemplate();

        $this->config = $GLOBALS['config'];
    }

    /**
     * Action ii template buyu undsen layout iig tohiruulah
     */
    public function setTemplate() {

        //app iin layout, css, js file uudiig avah
        if (file_exists(Config::get('app_dir') . 'config' . DS . 'config.view.php')) {
            require(Config::get('app_dir') . 'config' . DS . 'config.view.php');
        }
        
        //module iin JS, css avah
        if (file_exists(Config::get('module_dir') . 'config' . DS . 'config.view.php')) {
            
            require(Config::get('module_dir') . 'config' . DS . 'config.view.php');

        }
    }

    public function getLayout() {

        return Config::get('layout');
    }

}