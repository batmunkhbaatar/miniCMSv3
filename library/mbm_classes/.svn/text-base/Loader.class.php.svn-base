<?php

class Loader {

    public static function registerAutoload() {
        spl_autoload_extensions('.class.php');
        return spl_autoload_register(array(__CLASS__, 'includeClass'));
    }

    public static function unregisterAutoload() {
        return spl_autoload_unregister(array(__CLASS__, 'includeClass'));
    }

    /**
     * .class.php esvel .php file iig include hiine
     */
    public static function includeClass($class) {
        //set_include_path(LIB_DIR);
        //include $class.'.class.php';
        $file = LIB_DIR . 'mbm_classes' . DIRECTORY_SEPARATOR . str_replace(array('_', "\\"), array('/', '/'), $class);

        if (file_exists($file . '.class.php')) {
            $file = $file . '.class.php';
        }
        if (file_exists($file . '.php')) {
            $file = $file . '.php';
        }
        require_once( $file);
    }

}
