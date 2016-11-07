<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * notice, this is the sample file, please cp this to databse.php as a normal configure file
 */
return array
(
    'default' => array
    (
        'type'       => 'MySQLi',
        'connection' => array(
            'hostname'   => '127.0.0.1',
            'database'   => 'judge',
            'username'   => 'root',
<<<<<<< HEAD
            'password'   => '873525',
=======
            'password'   => '19950305',
>>>>>>> d266b760538f791c0c7b32d1448e26a6bb5459e6
            'persistent' => FALSE,
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => FALSE,
        'profiling'    => TRUE,
    ),
    'alternate' => array(
        'type'       => 'pdo',
        'connection' => array(
            /**
             * The following options are available for PDO:
             *
             * string   dsn         Data Source Name
             * string   username    database username
             * string   password    database password
             * boolean  persistent  use persistent connections?
             */
            'dsn'        => 'mysql:host=localhost;dbname=judge',
            'username'   => 'root',
            'password'   => 'r00tdb',
            'persistent' => FALSE,
        ),
        /**
         * The following extra options are available for PDO:
         *
         * string   identifier  set the escaping identifier
         */
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => FALSE,
        'profiling'    => TRUE,
    ),
);
