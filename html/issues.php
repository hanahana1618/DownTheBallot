<?php

    function array_clone($array) {
    return array_map(function($element) {
        return ((is_array($element))
            ? call_user_func(__FUNCTION__, $element)
            : ((is_object($element))
                ? clone $element
                : $element
                )
            );
        }, $array);
    }

    // configuration
    require("includes/config.php");

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        render("issues_page.html", ["title" => "Issues"]);
    }

    else {
        $userIssues = array_clone($_POST);
        render("form.php", ["userIssues" => $userIssues]);
    }

?>

