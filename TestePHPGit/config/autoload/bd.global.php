<?php
return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOPgSql\Driver',
                'params' => array(
                	'host'     => 'localhost',
                	'user'     => 'postgres',
                	'password' => 'postgres',
                	'dbname'   => '',
                    'port'     => '5432',
                )
            )
        )
    ), 
);
