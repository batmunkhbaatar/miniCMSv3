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
class Install_Schema_Users {

    public $schema;
    public $tableName;
    public $table;
    public $conn;

    public function Install_Schema_Users($conn) {
        $this->schema = new \Doctrine\DBAL\Schema\Schema();
        $this->tableName = 'users';

        $this->conn = $conn;
    }

    public function create() {

        $this->table = $this->schema->createTable(DBW_PREFIX . $this->tableName);

        //baganuud nemeh
        $this->table->addColumn('id', 'integer', array('unsigned' => true));
        $this->table->addColumn('username', 'string', array('length' => 255));
        $this->table->addColumn('password', 'string', array('length' => 255));
        $this->table->addColumn('token', 'string', array('length' => 255));
        $this->table->addColumn('email', 'string', array('length' => 255));
        $this->table->addColumn('firstname', 'string', array('length' => 255));
        $this->table->addColumn('lastname', 'string', array('length' => 255));
        $this->table->addColumn('is_active', 'integer', array('unsigned' => true, 'length' => 255));

        //primary key
        $this->table->setPrimaryKey(array('id'));
        $this->table->addUniqueIndex(array("username"));

        $platform = $this->conn->getDatabasePlatform();

        /* The 'queries' variable will now hold the 
          an array of sql statements.
         */
        $queries = $this->schema->toSql($platform);
        
        foreach($queries as $k=>$v){
//            $this->run($v);
            echo ''.$v.'<br />';
        }
        //print_r($queries);
    }
    
    protected function run($query){
        
        $this->conn->query($query);
    }

}