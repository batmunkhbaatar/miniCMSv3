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
 * @subpackage Template
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */
class Template {

    static $data = array();

    public function __construct() {
        
    }

    public static function renderTemplate($template_file, $array = array(), $template_date = 'body') {

        //Twig load hiih
        $twig_loader = new Twig_Loader_Filesystem(
                        array(
                            Config::get('module_dir') . 'templates' . DS,
                            ABS_DIR . 'templates' . DS
                        )
        );

        Log::save('Twig template path set to ' . shrink_text(Config::get('module_dir') . 'templates' . DS) . ' and ' . shrink_text(ABS_DIR . 'templates' . DS));

        $config->twig = new Twig_Environment($twig_loader, array(
                    'debug' => true,
                    'cache' => CACHE_DIR . 'twig' . DS,
                    'auto_reload' => true
                ));
        
        $config->twig->addExtension(new Twig_Extension_Debug());
        $config->twig->addFilter('var_dump',      new Twig_Filter_Function('var_dump'));
        
        Log::save('Twig cache dir set to ' . CACHE_DIR . 'twig' . DS);

        if (USE_CACHE == 0) {
            $config->twig->clearCacheFiles();
        }

        return self::set($template_date, $config->twig->render($template_file, $array));
    }

    public static function loadLayout() {
        if (file_exists(TEMPLATE_DIR . Config::get('layout') . '.php')) {
            require_once(TEMPLATE_DIR . Config::get('layout') . '.php');
            Log::save(Config::get('layout').' layout loaded');
        } else {
            require_once(TEMPLATE_DIR . 'default.php');
            Log::save(Config::get('layout').' layout not found. default layout loaded',1);
        }
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

}