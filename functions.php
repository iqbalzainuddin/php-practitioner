<?php

    function dd($data) {
        echo '<pre>';
        die(var_dump($data));
        echo '</pre>';
    }

    // function isEligibleForClub($age) {
    //     return ($age >= 18) ? true : false;
    // }

    // Establish connection to the database - in topic #13
    // function ConnectToDB() {
    //     try {
    //         return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'mYwinDBtoor');
    //     } catch (PDOException $e) {
    //         die($e->getMessage());
    //     }
    // }

    // Fetch all tasks in todos table in the database
    // function fetchAllTasks($PDO) {
    //     // $PDO = ConnectToDB();
    //     $statement = $PDO->prepare('select * from todos');
    //     $statement->execute();

    //     return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
    // }