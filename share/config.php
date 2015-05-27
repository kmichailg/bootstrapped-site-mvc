<?php
    $config = array(
        //db — Store database credentials or other data pertaining to your databases.
        "db" => array(
            //For development
            "db1" => array(
                "dbname" => "onecollections",
                "username" => "root",
                "password" => "",
                "host" => "localhost"
            ),
            //For deployment
            "db2" => array(
                "dbname" => "",
                "username" => "",
                "password" => "",
                "host" => ""
            )
        ),
        //urls — Storing urls can be really handy when referencing remote resources throughout the site.
        "urls" => array(
            "baseUrl" => "http://example.com"
        ),
        //paths — Commonly used paths to various resources for your site. e.g. log files, upload directories, resources
        "paths" => array(
            "resources" => "/resources",
            "images" => array(
                "content" => $_SERVER["DOCUMENT_ROOT"] . "/images/content",
                "layout" => $_SERVER["DOCUMENT_ROOT"] . "/images/layout"
            )
        )
        //emails — Store debugging or admin emails to use when handling errors or in contact forms.
    );
     
    /*
        I will usually place the following in a bootstrap file or some type of environment
        setup file (code that is run at the start of every page request), but they work 
        just as well in your config file if it's in php (some alternatives to php are xml or ini files).
    */
     
    /*
        Creating path constants for heavily used paths.
    */

    defined("MODELS_PATH")
        or define("MODELS_PATH", realpath(dirname(__DIR__) . '/app/Models/'));

    defined("VIEWS_PATH")
        or define("VIEWS_PATH", realpath(dirname(__DIR__) . '/app/Views/'));

    defined("CONTROLLERS_PATH")
        or define("CONTROLLERS_PATH", realpath(dirname(__DIR__) . '/app/Controllers/'));

    defined("PUBLIC_PATH")
        or define("PUBLIC_PATH", realpath(dirname(__DIR__) . '/public/'));

    defined("LIBRARY_PATH")
        or define("LIBRARY_PATH", realpath(dirname(__DIR__) . '/library/'));

    defined("TEMPLATES_PATH")
        or define("TEMPLATES_PATH", realpath(dirname(__DIR__) . '/library/templates/'));
     
    /*
        Error reporting.
    */
    ini_set("error_reporting", "true");
    error_reporting(E_ALL|E_STRCT);
 
?>