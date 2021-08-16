<?php
    // Created during 14-PDO refactor

    require 'database/Connection.php';
    require 'database/QueryBuilder.php';

    $pdo = Connection::make();
    $query = new QueryBuilder($pdo);

    // If want to assign this bootstrap to variable, return the QueryBuilder instance
    /* 
    return new QueryBuilder(
        Connection::make()
    );
     */