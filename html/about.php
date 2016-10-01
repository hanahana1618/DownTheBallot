<?php

    // configuration
    require(__DIR__ . "/includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    render("about.html", ["title" => "Down The Ballot | About"]);

?>
