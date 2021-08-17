<?php
    // Created during 16-route

    Class Request {

        public static function uri() {
            return trim($_SERVER['REQUEST_URI'], '/');
        }

    }