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
class Config_Action extends Config {

    public function Config_Action($name) {
        if($name == '' || $name == null){
            $name = DEFAULT_ACTION;
        }
        $this->setAction($name);
    }

    public function setAction($name) {

        global $config;
        global $GET;

        $template = $config->template;

        //ug app,module bgaa tohioldold ajillana. umnu not_found_page==true bolson bol ajillahgui
        if (Config::get('not_found_page') == false) {
            //action bgaa tohioldold
            if (file_exists(Config::get('module_dir') . 'actions' . DS . $name . '.action.php')) {
                $this->setActionValues($name);
                new Config_Template();
                require_once(Config::get('module_dir') . 'actions' . DS . $name . '.action.php');
            } else {
                Log::save($name . ' action not found.', 1);
                Config::setNotFoundPage();
            }
        } else {
            Config::setNotFoundPage();
        }
    }

    public function setActionValues($name) {

        Config::set('action', $name);
        Log::save('Config[action] set to ' . $name . ' (' . Config::get('action') . ')');
    }

}