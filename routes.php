<?php
    // Create during 16-route

    $routes->define([
        '' => 'controllers/indexController.php',
        'about' => 'controllers/aboutController.php',
        'about/culture' => 'controllers/aboutCultureController.php',
        'contact' => 'controllers/contactController.php',
    ]);