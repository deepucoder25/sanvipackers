<?php

namespace Config;

use CodeIgniter\Database\Config;

/**
 * Database Configuration
 */
class Database extends Config
{
    /**
     * The directory that holds the Migrations and Seeds directories.
     */
    public $filesPath = APPPATH . 'Database' . DIRECTORY_SEPARATOR;

    /**
     * Lets you choose which connection group to use if no other is specified.
     */
    public $defaultGroup = 'default';

    /**
     * --------------------------------------------------------------------
     * OPTION 1: SQLite3 Database Connection (ACTIVE DEFAULT)
     * --------------------------------------------------------------------
     * Ye connection active hai aur saara data 'writable/database.sqlite'
     * me store hota hai (App & Admin dono isi se connect hain).
     *
     * @var array<string, mixed>
     */
    public $default = [
        'DSN'          => '',
        'hostname'     => 'localhost',
        'username'     => 'root',
        'password'     => '',
        'database'     => WRITEPATH . 'database.sqlite',
        'DBDriver'     => 'SQLite3',
        'DBPrefix'     => '',
        'pConnect'     => false,
        'DBDebug'      => true,
        'charset'      => 'utf8',
        'DBCollat'     => 'utf8_general_ci',
        'swapPre'      => '',
        'encrypt'      => false,
        'compress'     => false,
        'strictOn'     => false,
        'failover'     => [],
        'port'         => 3306,
        'numberNative' => false,
        'foundRows'    => false,
        'foreignKeys'  => true,
        'busyTimeout'  => 1000,
        'dateFormat'   => [
            'date'     => 'Y-m-d',
            'datetime' => 'Y-m-d H:i:s',
            'time'     => 'H:i:s',
        ],
    ];

    /**
     * --------------------------------------------------------------------
     * OPTION 2: MySQL / MariaDB Connection (COMMENTED / OPTIONAL)
     * --------------------------------------------------------------------
     * Jab aapko MySQL use karna ho:
     * 1. Upar wale SQLite $default block ko comment karein.
     * 2. Niche wale MySQL $default block ko uncomment karein.
     * 3. Apna database name, username aur password yahan set karein.
     * Admin aur Public App dono auto isi database se connect ho jayenge.
     *
     * @var array<string, mixed>
     */
    /*
    public $default = [
        'DSN'          => '',
        'hostname'     => 'localhost',
        'username'     => 'root',
        'password'     => '',
        'database'     => 'quickrelocation_db',
        'DBDriver'     => 'MySQLi',
        'DBPrefix'     => '',
        'pConnect'     => false,
        'DBDebug'      => true,
        'charset'      => 'utf8mb4',
        'DBCollat'     => 'utf8mb4_general_ci',
        'swapPre'      => '',
        'encrypt'      => false,
        'compress'     => false,
        'strictOn'     => false,
        'failover'     => [],
        'port'         => 3306,
        'numberNative' => false,
        'foundRows'    => false,
        'dateFormat'   => [
            'date'     => 'Y-m-d',
            'datetime' => 'Y-m-d H:i:s',
            'time'     => 'H:i:s',
        ],
    ];
    */
}

