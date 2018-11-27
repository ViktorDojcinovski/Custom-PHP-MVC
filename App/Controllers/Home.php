<?php

namespace App\Controllers;

use \Core\View;

/**
 * Posts controller
 * 
 * PHP v5.4
 */
class Home extends \Core\Controller
{
    /**
     * Show the index page
     * 
     * @return void
     */
    public function indexAction()
    {
        View::renderTemplate('Home/index.php', [
            'name' => 'Alien'
        ]);
    }

    public function before()
    {
        
    }

    public function after()
    {
        
    }
}