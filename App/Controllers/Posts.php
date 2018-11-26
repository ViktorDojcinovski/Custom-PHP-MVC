<?php

namespace App\Controllers;

/**
 * Posts controller
 * 
 * PHP v5.4
 */
class Posts extends \Core\Controller
{
    /**
     * Show the index page
     * 
     * @return void
     */
    public function indexAction()
    {
        echo 'Hello from the index action in the Posts controller!';
        echo '<pre>' . htmlspecialchars(print_r($_GET, true)) . '</pre>';
    }

    /**
     * Show the add new page
     * 
     * @return void
     */
    public function addNewAction() 
    {
        echo 'Hello from the add new action in the Posts controller!';
    }

    /**
     * Show the edit page
     * 
     * @return void
     */
    public function editAction()
    {
        echo '<p>Route parametars: <pre>' . htmlspecialchars(print_r($this->route_params, true)) . '</pre>';
    }

    public function before()
    {
        echo " (before)";
    }

    public function after()
    {
        echo "(after) ";
    }
}