<?php
    // 10-function start here
    // Included function.php file to use function declared in it
    // require 'functions.php';
    // 10-function end here

    // 5-Separate logic from presentation code start here
    // Comment code below to test array test code
    // Also can be uncommented to include header element in the page while display array elements
    // $greeting = "Hello, World!";
    // 5-Separate logic from presentation code end here
    
    // 6-Array test code start here
    // This is how to create array variable
    // $names = [
    //     'Jeff',
    //     'Anna',
    //     'Amy'
    // ];

    // Add value to array
    // $names[] = 'Kendrick';

    // Filter through array
    // foreach ($names as $name) {
    //     echo $name . ', ';
    // }
    // 6-Array test code end here

    // 7-Associative array start here
    // Create array that have key at value assigned to it
    // $person = [
    //     'age' => 22,
    //     'hair' => 'brown',
    //     'career' => 'Web Developer'
    // ];

    // Push new key and value to the array
    // $person['name'] = 'Hadid';

    // use unset() to remove key and value pair from an array
    // unset($person['age']);

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
    // $task = [
    //     'title' => 'Finish new feature',
    //     'due' => '1/1/2022',
    //     'assigned_to' => 'Syed',
    //     'completed' => true,
    // ];
    // 6-Boolean end here

    // 10-function start here
    // echo isEligibleForClub(22) ? 'Come in' : 'Go away';
    // 10-function end here
    
    // 10-class 101 start here
    // Class is representation of one thing or object
    // Create class with Class ClassName {}
    // Class Task {
    //     // Class will have description

    //     // declare variable of properties
    //     protected $description;
    //     protected $completed = false;

    //     // Function of constructor, __construct is a special keyword for declaring constructor
    //     public function __construct($description) {
    //         // Automatically triggered on instantiation

    //         // $this-> to access properties current instance of class
    //         $this->description = $description;
    //     }

    //     public function Completed() {
    //         $this->completed = true;   
    //     }

    //     public function Description() {
    //         return $this->description;
    //     }

    //     public function isCompleted() {
    //         return $this->completed;
    //     }
    // }

    // Instantiation of class instance
    // $tasks = [
    //     new Task('Cardio Exercise'),
    //     new Task('Bodyweight Workout'),
    //     new Task('Cold Shower')
    // ];

    // Set first object to be completed to see the example of strikethrough of completed task in view page
    // $tasks[0]->Completed();
    
    // $task = new Task('Go to the store');
    // dd($tasks);
    // 10-class 101 end here

    // 13-Intro to PDO start here
    // 14-PDO refactor start here
    // require 'database/Connection.php';
    // require 'database/QueryBuilder.php';
    // require 'bootstrap.php';
    // Can also be assigned to variable - $query = require 'bootstrap.php'; - bootstrap must return QueryBuilder instance
    // require 'Task.php';
    // require 'functions.php';

    // $pdo = Connection::make();
    // $query = new QueryBuilder($pdo);
    // $tasks = $query->selectAll('todos', 'Task');
    // 14-PDO refactor end here

    // $PDO = ConnectToDB();
    // $statement = $PDO->prepare('select * from todos');
    // $statement->execute();
    // $tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

    // All process of connecting to db and retrieving the data abstracted by the function fetchAllTasks()
    // Belong to #13
    // $tasks = fetchAllTasks($pdo);

    // var_dump($tasks[0]->description);
    // 13-Intro to PDO end here

    // 5-Separate logic from presentation code start here
    // Comment code below to test array test code
    // Uncomment this code below when you want to display array elements in index view page
    // require 'index.view.php';
    // 5-Separate logic from presentation code end here
    
    // Start from topic 16-router
    require 'core/bootstrap.php';

    $routes = new Router;

    require 'routes.php';

    // var_dump(trim($_SERVER['REQUEST_URI'], '/'));
    // $uri = trim($_SERVER['REQUEST_URI'], '/');
    // die(var_dump($routes->direct('about')));
    // require $routes->direct($uri);

    require Router::load('routes.php')->direct(Request::uri());