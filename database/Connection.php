<?php
    // Created during 14-PDO refactor
    
    class Connection {
        
        public static function make() {
            try {
                return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'mYwinDBtoor');
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }

    }