<?php

class Controller
{
    public function getModel($modelName)
    {
        require_once MODELS_PATH . '/' . $modelName . '.php';
        return new $modelName();
    }

    public function view($viewName, $data = [])
    {
        $contentFileFullPath = VIEWS_PATH . '/' . $viewName . '.php';

        // making sure passed in variables are in scope of the template
        // each key in the $data array will become a variable
        if (count($data) > 0) {
            foreach ($data as $key => $value) {
                if (strlen($key) > 0) {
                    ${$key} = $value;
                }
            }
        }

        require_once TEMPLATES_PATH . '/header.php';

        echo '<div id=\"container\">\n'
        . '\t<div id=\"content\">\n';

        if (file_exists($contentFileFullPath)) {
            require_once $contentFileFullPath;
        } else {
            /*
            If the file isn't found the error can be handled in lots of ways.
            In this case we will just include an error template.
             */
            //require_once(TEMPLATES_PATH . "/error.php");
            echo 'Error 404: Not Found!';
        }

        // close content div
        echo '\t</div>\n';

        // close container div
        echo '</div>\n';

        require_once TEMPLATES_PATH . '/footer.php';
    }

    /**
     * Create a view with custom header and footer
     */
    public function viewCustom($viewName, $data = [], $headerFileName, $footerFileName)
    {
        $contentFileFullPath = VIEWS_PATH . '/' . $viewName . '.php';

        // making sure passed in variables are in scope of the template
        // each key in the $data array will become a variable
        if (count($data) > 0) {
            foreach ($data as $key => $value) {
                if (strlen($key) > 0) {
                    ${$key} = $value;
                }
            }
        }

        require_once TEMPLATES_PATH . '/' . $headerFileName . '.php';

        if (file_exists($contentFileFullPath)) {
            require_once $contentFileFullPath;
        } else {
            /*
            If the file isn't found the error can be handled in lots of ways.
            In this case we will just include an error template.
             */
            //require_once(TEMPLATES_PATH . "/error.php");
            echo 'Error 404: Not Found!';
        }

        require_once TEMPLATES_PATH . '/' . $footerFileName . '.php';
    }
}
