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
 * @subpackage Config
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */
class Config_App extends Config {

    public $config;

    public function Config_App($name) {
        if ($name == '' || $name == null) {
            $name = DEFAULT_APP;
        }
        $this->setApp($name);
    }

    public function setApp($name) {

        if (!file_exists(ABS_DIR . 'app' . DS . $name . DS . 'config' . DS . 'config.main.php')) {
            Config::set('not_found_page', true);
            Log::save($name . ' app not found ', 1);
        } else {
            $this->initAppConfig($name);
            Config::set('not_found_page', false);
        }
    }

    /**
     * yamar negen nuhtsul shalgahgui shuud onooj ugnu
     * 
     * @param $name: App name
     * 
     * @return none
     */
    private function setAppValues($name) {


        Config::set('app', $name);
        Log::save('Config[app] to ' . $name . ' (' . Config::get('app') . ')');

        Config::set('app_dir', ABS_DIR . 'app' . DS . $name . DS);
        Log::save('Config[app_dir] to ' . shrink_text(ABS_DIR . 'app' . DS . $name . DS) . ' (' . shrink_text(Config::get('app_dir')) . ')');
    }

    /**
     * App iin buh config file uudiig achaalna 
     * 
     * @param $name: App name
     * 
     * @return none
     */
    private function initAppConfig($name) {
        
        $this->setAppValues($name);
        include_files(Config::get('app_dir') . 'config' . DS);

    }

}