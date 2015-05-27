<?php
    require_once (realpath(dirname(__DIR__) . "/share/config.php"));
    require_once (realpath(dirname(__DIR__) . "/app/core/App.php"));
    require_once (realpath(dirname(__DIR__) . "/app/core/Controller.php"));
 
    require_once(LIBRARY_PATH . "/viewRenderer.php");
 	
    $setInIndexDotPhp = "Hey! I was set in the index.php file.";
     
    // Must pass in variables (as an array) to use in template
    $variables = array(
        'setInIndexDotPhp' => $setInIndexDotPhp
    );
     
    renderContent("home.php", $variables);
 
?>