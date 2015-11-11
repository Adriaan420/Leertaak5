<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
    'production' => array(
        'connection' => array(
            'dsn' => 'mysql:host=localhost;dbname=fuel_db',
            'username' => 'root'
        )
    ),
    'mongo' => array(
        // This group is used when no instance name has been provided.
        'default' => array(
            'hostname' => 'localhost',
            'database' => 'mongo_fuel',
        )
    )
);
