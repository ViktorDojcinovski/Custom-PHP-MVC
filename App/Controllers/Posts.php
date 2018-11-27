<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Post;

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
        $posts = Post::getAll();

        View::renderTemplate('Posts/index.html', [
            'posts' => $posts
        ]);
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