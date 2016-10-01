<?php

    // configuration
    require("includes/config.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        // here is where we will query and return their most important issues

        $usrIssues = $_POST["issues"];

        render("issues_page.php", ["title" => "Issues"]);

?>

