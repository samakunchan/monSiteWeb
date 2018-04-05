<?php
/**
 * Created by PhpStorm.
 * User: Samakunchan
 * Date: 15/01/2018
 * Time: 23:49
 */

namespace Controllers;

use App\Tools\Views;
use Imagick;

class HomeController
{
    private $homeView;

    public function __construct()
    {
        $this->homeView = new Views('home');
    }

    public function builHomeView()
    {
        $this->homeView->genererPages();
    }
}