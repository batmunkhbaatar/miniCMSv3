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
class Config {

    static $data = array(
        'app' => 'default', //app iin ner
        'app_dir' => 'default', //app_dir
        'module' => 'default', //module
        'module_dir' => 'default', //module_dir
        'action' => 'index', //action name
        'action_file' => '', //action file
        'template_filepath' => 'template', //template file iin ner
        'template_data' => 'twig data', 
        'layout' => 'layout', //layout iin ner
        'not_found_page' => false //app, module, action oldson eseh
    );
    static $js_files = array();
    static $css_files = array();
    static $authentication_passed = 1;
    static $credential_passed = 1;
    public $twig;
    public $template; //twig iin template. action-d ashiglana

    public function Config($name = '', $value = '') {

        $GET = $GLOBALS['GET'];

        if ($name != '' && $value != '') {
            $this->set($name, $value);
        }
        $user = new Config_User($GET);
        
        $this->loadApp($GET['app']);
        $this->loadModule($GET['module']);
        $this->loadAction($GET['action']);
    }

    /**
     * @param name : huvisagchiin ner
     * @param value : huvisagchiin utga
     * 
     * @return none;
     */
    public static function set($name, $value) {
        self::$data[$name] = $value;
    }

    /**
     * @param name : huvisagchiin ner
     * @param value : huvisagchiin utga
     * 
     * @return string;
     */
    public static function get($name, $value = null) {
        if ($value != null) {
            self::set($name, $value);
        }
        if (isset(self::$data[$name])) {

            return self::$data[$name];
        } else {

            return null;
        }
    }

    /**
     * session-d onooh
     * 
     * @param name : huvisagchiin ner
     * @param value : huvisagchiin utga
     * 
     * @return none;
     */
    public static function sess_set($name, $value) {
        $Core = $GLOBALS['Core'];
        
        $Core->Session->setAttribute($name,$value);
    }

    /**
     * @param name : huvisagchiin ner
     * @param value : huvisagchiin utga
     * 
     * @return string;
     */
    public static function sess_get($key) {
        $Core = $GLOBALS['Core'];
        
        $Core->Session->getAttribute($key);
    }

    /**
     * huudas oldoogui tohioldold error page ruu shideh
     */
    static function setNotFoundPage() {
        
        global $GET;
        
        //set app/module/action
        Config::set('app', SYSTEM_APP_NAME);
        Config::set('app_dir', SYSTEM_APP_DIR);
        Config::set('module', ERROR_MODULE_NAME);
        Config::set('module_dir', ERROR_MODULE_DIR);
        Config::set('action', PAGE_NOT_FOUND_ACTION);
        
        $GET['app'] = SYSTEM_APP_NAME;
        $GET['module'] = ERROR_MODULE_NAME;
        $GET['action'] = PAGE_NOT_FOUND_ACTION;
        
        //load app/module/action
        
        new Config_App(SYSTEM_APP_NAME);
        new Config_Module(ERROR_MODULE_NAME);
        new Config_Action(PAGE_NOT_FOUND_ACTION);
        require_once(ERROR_MODULE_DIR .DS. 'actions' . DS . PAGE_NOT_FOUND_ACTION . '.action.php');
        
        new Config_Template();
    }

    /**
     * hereglegch tuhain hesegt handah bolomjtoi esehiig shalgaj tohiruulah
     * 
     * @return boolean : 1 bol handaj bolno 0 bol handaj bolohgui
     */
    public function userPermission() {
        
    }

    /**
     * Tuhain uye iin App iig onooh
     * 
     * @return 
     */
    public function loadApp($name) {
        $buf = new Config_App($name);
        
        return $buf;
    }

    /**
     * Tuhain uye iin App iig onooh
     * 
     * @return 
     */
    public function loadModule($name) {
        $buf = new Config_Module($name);
        
        return $buf;
    }

    /**
     * Tuhain uye iin App iig onooh
     * 
     * @return 
     */
    public function loadAction($name) {
        $buf = new Config_Action($name);
        
        return $buf;
    }

}