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
class Install_Schema_Settings {

    public $schema;
    public $tableName;
    public $table;

    public function Install_Schema_Settings($conn) {
        $this->schema = new \Doctrine\DBAL\Schema\Schema();
        $this->tableName = 'settings';
    }

    public function create() {
        
        $this->table = $this->schema->createTable(DBR_PREFIX.$this->tableName);
        
        //baganuud nemeh
        $this->table->addColumn('id','integer',array('unsigned'=>true));
        $this->table->addColumn('name','string',array('length'=>255));
        $this->table->addColumn('value','string',array('length'=>255));
        $this->table->addColumn('type','string',array('length'=>255));
        
        //primary key
        $this->table->setPrimaryKey(array('id'));
    }

}