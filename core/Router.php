<?php
    // Created during 16-route

    class Router {
        
        protected $routes = [];
        
        public static function load($file) {
            $routes = new static;

            require $file;

            return $routes;
        }

        public function define($routes) {
            $this->routes = $routes;
        }

        public function direct($uri) {
            if (array_key_exists($uri, $this->routes)) {
                return $this->routes[$uri];
            }

            throw new Exception("No Route Defined for URI");
            
        }

    }