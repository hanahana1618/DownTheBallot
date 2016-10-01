<?php

    // configuration
    require("includes/config.php");
    // if user reached page via GET (as by clicking a link or via redirect)
    render("index_form.php", ["title" => "Down The Ballot | Homepage"]);

?>
