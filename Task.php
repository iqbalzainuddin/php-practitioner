<?php

    Class Task {
        // Class will have description

        // declare variable of properties
        protected $description;
        protected $completed;

        // Function of constructor, __construct is a special keyword for declaring constructor
        // public function __construct($description) {
        //     // Automatically triggered on instantiation

        //     // $this-> to access properties current instance of class
        //     $this->description = $description;
        // }

        public function Completed() {
            $this->completed = true;   
        }

        public function Description() {
            return $this->description;
        }

        public function isCompleted() {
            return $this->completed;
        }
    }