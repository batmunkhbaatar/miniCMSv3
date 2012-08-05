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
class Config_Module extends Config {

    public function Config_Module($name) {

        if($name == '' || $name == null){
            $name = DEFAULT_MODULE;
        }
        $this->setModule($name);
    }

    public function setModule($name) {

        global $Core;
        
        if (!file_exists(Config::get('app_dir') . 'modules' . DS . $name . DS)) {
            Config::set('not_found_page', true);
            Config::setNotFoundPage();
            Log::save($name . ' module not found',1);
            
        } else {
            $this->setModuleValues($name);
            Config::set('not_found_page', false);
        }
    }

    /**
     * @param $name: Module name
     * 
     * @return none
     */
    private function setModuleValues($name) {

        Config::set('module', $name);
        Log::save('Config[module] set to ' . $name . ' (' . Config::get('module') . ')');

        Config::set("module_dir", Config::get('app_dir') . 'modules' . DS . $name . DS);
        Log::save("Config[module_dir] set to " . shrink_text(Config::get('app_dir') . 'modules' . DS . $name . DS ). ' (' . shrink_text(Config::get('module_dir')) . ')');
    }

}