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
 * @subpackage User
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id 
 */

class User {

    private $session;
    public $lang = 'mn';
    public $user_id;
    public $is_logged_in = 0;
    public $default_credentials = array();

    public function __construct($user_info = array()) {

        $this->session = new Storage_Session();
        $this->setLang();
        $this->setUserId();
        $this->setPrivateAttribute($user_info);

        $this->default_credentials = array(
            'admin' => 'admin',
            'superadmin' => 'superadmin',
            'operator' => 'operator',
            'moderator' => 'moderator'
        );

        $user_credentials = new User_Credentials(__CLASS__);
        $this->setAttribute('CrY', $user_credentials->setCrY());
    }

    public function setLang() {
        if ($this->getAttribute('ln') == null || !is_dir(ABS_DIR . "lang/" . $this->session->read('ln') . "/")) {
            $this->setAttribute('ln', DEFAULT_LANG);
        }
        $this->lang = $this->getAttribute('ln');
    }

    public function getLang() {

        return $this->session->read('ln');
    }

    /**
     * @param $user_id 
     * 
     * @return none
     */
    public function setUserId($user_id = 0) {
        if ($this->getAttribute('user_id') == null) {
            $this->setAttribute('user_id', 0);
        }
        if ($user_id != 0) {
            $this->setAttribute('user_id', $user_id);
        }

        $this->user_id = $this->getAttribute('user_id');
    }

    /**
     * _SESSION ees hereglegchiin id g avah
     */
    public function getUserId() {

        return $this->getAttribute('user_id');
    }

    /**
     * @param $key
     * @param $data
     * 
     * @return
     */
    public function setAttribute($key, $data) {

        return $this->session->write($key, $data);
    }

    /**
     * @param $key
     * 
     * @return herev tuhain key bhgui bol null butsaana
     */
    public function getAttribute($key) {

        return $this->session->read($key);
    }

    /**
     * @param $key
     * 
     * @return
     */
    public function removeAttribute($key) {

        return $this->session->remove($key);
    }

    /**
     * @param
     * @return array()
     */
    public function getPrivateAttribute($key = 'username') {
        $user_session = $this->session->read('user');

        if (isset($user_session[$key])) {
            
            return $user_session[$key];
        }else{
            
            return null;
        }
    }

    /**
     * zuvhun tuhain hereglegchtei hamaaraltai medeelliig array bolgoj oruulna. (_SESSION['user'])
     * 
     * @return
     */
    public function setPrivateAttribute($values = array('name' => 'Guest', 'id' => 0)) {

        $user = $this->getAttribute('user');
        if (is_array($values)) {
            foreach ($values as $k => $v) {
                $user[$k] = $v;
            }
            return $this->setAttribute('user', $v);
        }

        return false;
    }

    /**
     * @return boolean
     */
    public function sessionDestroy() {

        $this->session->shutdown();
        $this->session->regenerate(true);

        return true;
    }

}