<?php

    function dd($data) {
        echo '<pre>';
        die(var_dump($data));
        echo '</pre>';
    }

    function isEligibleForClub($age) {
        return ($age >= 18) ? true : false;
    }