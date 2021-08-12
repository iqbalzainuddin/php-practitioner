<?php
    // Included function.php file to use function declared in it
    require 'functions.php';
    // 5-Separate logic from presentation code start here
    // Comment code below to test array test code
    // Also can be uncommented to include header element in the page while display array elements
    $greeting = "Hello, World!";
    // 5-Separate logic from presentation code end here
    
    // 6-Array test code start here
    // This is how to create array variable
    $names = [
        'Jeff',
        'Anna',
        'Amy'
    ];

    // Add value to array
    $names[] = 'Kendrick';

    // Filter through array
    // foreach ($names as $name) {
    //     echo $name . ', ';
    // }
    // 6-Array test code end here

    // 7-Associative array start here
    // Create array that have key at value assigned to it
    $person = [
        'age' => 22,
        'hair' => 'brown',
        'career' => 'Web Developer'
    ];

    // Push new key and value to the array
    $person['name'] = 'Hadid';

    // use unset() to remove key and value pair from an array
    unset($person['age']);

    // echo can print string, but cannot print array
    // use var_dump() instead
    // var_dump(what to dump here)

    // Using pre tag can format the var_dump() output
    // <pre>
    // var_dump()
    // </pre>
    // code does not stop after var_dump(), next code will still run

    // die() will end the code when it is called, next code won't be run
    // die()

    // 7-Associative array end here

    // 8-Boolean start here
    $task = [
        'title' => 'Finish new feature',
        'due' => '1/1/2022',
        'assigned_to' => 'Syed',
        'completed' => true,
    ];
    // 6-Boolean end here

    // 10-function start here
    echo isEligibleForClub(22) ? 'Come in' : 'Go away';
    // 10-function end here

    // 5-Separate logic from presentation code start here
    // Comment code below to test array test code
    // Uncomment this code below when you want to display array elements in index view page
    require 'index.view.php';
    // 5-Separate logic from presentation code end here