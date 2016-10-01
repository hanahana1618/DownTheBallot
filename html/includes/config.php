<?php

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    require("helpers.php");

    // CS50 Library
    require("DB.php");
    DB::init(__DIR__ . "/config.json");

    // enable sessions
    session_start();
?>
