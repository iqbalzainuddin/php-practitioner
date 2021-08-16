<?php
    // Created during 14-PDO refactor

    class Connection {
        
        public static function make($config) {
            try {
                // return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'mYwinDBtoor');
                return new PDO(
                    $config['connection'].':host='.$config['host'].';dbname='.$config['name'],
                    $config['username'],
                    $config['password'],
                    $config['options']
                );
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }

    }