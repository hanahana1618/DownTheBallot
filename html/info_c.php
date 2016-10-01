<?php

    // configuration
    require(__DIR__ . "/includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    render("info.html", ["title" => "Down The Ballot | Information"]);

?>
