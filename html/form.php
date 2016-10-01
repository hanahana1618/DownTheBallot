<?php

    // configuration
    require("includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    render("form_form.php", ["title" => "Form"]);

?>
