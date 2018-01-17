<?php
/**
 * Created by PhpStorm.
 * User: Samakunchan
 * Date: 17/01/2018
 * Time: 00:25
 */

namespace Controllers;


use App\Tools\Views;

class EmailController
{

    private $emailView;

    public function __construct()
    {
        $this->emailView = new Views('mail');
    }

    public function buildEmailView()
    {
        $this->emailView->genererPages();
    }
}