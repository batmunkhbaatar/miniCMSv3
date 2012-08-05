<?php

$mbm_config ['use_multiple_db'] = 0;

/****************Webiin DB write holboltiin medeelel*********************/
$mbm_config ['dbw_host'] = 'localhost';
//$mbm_config ['dbw_host'] = '192.168.8.203';
$mbm_config ['dbw_name'] = 'v3w';
$mbm_config ['dbw_user'] = 'v3w';
$mbm_config ['dbw_pass'] = 'v3pass';
$mbm_config ['dbw_prefix'] = 'mbm_';
$mbm_config ['dbw_charset'] = 'utf8';
/**
 * pdo_mysql: A MySQL driver that uses the pdo_mysql PDO extension.
 * pdo_sqlite: An SQLite driver that uses the pdo_sqlite PDO extension.
 * pdo_pgsql: A PostgreSQL driver that uses the pdo_pgsql PDO extension.
 * pdo_oci: An Oracle driver that uses the pdo_oci PDO extension. 
 *          Note that this driver caused problems in our tests. Prefer the oci8 driver if possible.
 * pdo_sqlsrv: An MSSQL driver that uses pdo_sqlsrv PDO
 * oci8: An Oracle driver that uses the oci8 PHP extension.
 */
$mbm_config ['dbw_driver'] = 'pdo_mysql'; 


/****************Webiin DB read holboltiin medeelel*********************/
$mbm_config ['dbr_host'] = '192.168.8.203';
$mbm_config ['dbr_name'] = 'v3r';
$mbm_config ['dbr_user'] = 'v3r';
$mbm_config ['dbr_pass'] = 'v3pass';
$mbm_config ['dbr_prefix'] = 'mbm_';
$mbm_config ['dbr_charset'] = 'utf8';
$mbm_config ['dbr_driver'] = 'pdo_mysql'; 

/****************CORE Read DB-iin medeelel*********************/
$mbm_config ['dbcw_host'] = '192.168.8.203';
$mbm_config ['dbcw_name'] = 'v3c';
$mbm_config ['dbcw_user'] = 'v3c';
$mbm_config ['dbcw_pass'] = 'v3pass';
$mbm_config ['dbcw_prefix'] = 'mbm2_';
$mbm_config ['dbcw_charset'] = 'utf8';
$mbm_config ['dbcw_driver'] = 'pdo_mysql'; 

/****************CORE Read DB-iin medeelel*********************/
$mbm_config ['dbcr_host'] = '192.168.8.203';
$mbm_config ['dbcr_name'] = 'v3c';
$mbm_config ['dbcr_user'] = 'v3c';
$mbm_config ['dbcr_pass'] = 'v3pass';
$mbm_config ['dbcr_prefix'] = 'mbm2_';
$mbm_config ['dbcr_charset'] = 'utf8';
$mbm_config ['dbcr_driver'] = 'pdo_mysql'; 