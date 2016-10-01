<?php

    // configuration
    require("includes/config.php");

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        render("form_form.php", ["title" => "Voter Information"]);
    }

    else {
        render("candidates.php", ["title" => "Candidate Report"]);
    }

?>
