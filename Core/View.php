<?php

namespace Core;

/**
 * View
 * 
 * PHP v5.4
 */
class View
{
    /**
     * Render a view file
     * 
     * @param string $view
     * 
     * @return void
     */
    public static function render($view, $args = [])
    {
        extract($args, EXTR_SKIP);

        $file = "../App/Views/$view"; 

        if(is_readable($file)) {
            require $file;
        } else {
            echo "$file not found";
        }
    }

    /**
     * Render a view file using Twig
     * 
     * @param string $tamplate --! The tamplate file
     * @param array $args --! Associative array of data to be displayed in the view
     * 
     * @return void
     */
    public static function renderTemplate($template, $args = [])
    {
        static $twig = null;

        if($twig === null) {
            $loader = new \Twig_Loader_Filesystem('../App/Views');
            $twig = new \Twig_Environment($loader);
        }

        echo $twig->render($template, $args);
    }
}