<?php

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    require("helpers.php");

    // CS50 Library

$host = 'localhost';
$db   = 'downtheballot';
$user = 'mysqluser';
$pass = 'downtheballot';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false
];
$pdo = new PDO($dsn, $user, $pass, $opt);

    //DB::init(__DIR__ . "/config.json");

    // enable sessions
    session_start();
?>
