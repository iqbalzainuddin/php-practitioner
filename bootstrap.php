<?php
    // Created during 14-PDO refactor

    require 'database/Connection.php';
    require 'database/QueryBuilder.php';

    // 15-hidepw
    $config = require 'config.php';

    $pdo = Connection::make($config['database']);
    $query = new QueryBuilder($pdo);

    // If want to assign this bootstrap to variable, return the QueryBuilder instance
    /* 
    return new QueryBuilder(
        Connection::make()
    );
     */