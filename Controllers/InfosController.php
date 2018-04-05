<?php
/**
 * Created by PhpStorm.
 * User: Samakunchan
 * Date: 17/01/2018
 * Time: 07:23
 */

namespace Controllers;


use App\Tools\Views;
use Models\Entity\Images;

class InfosController
{
    /**
     * @var Views
     */
    private $view;

    /**
     * InfosController constructor.
     */
    public function __construct()
    {
        $this->view = new Views('infos');
    }

    /**
     * Méthode pour afficher la vue des informations supplémentaires
     */
    public function buildInfoView()
    {
        $this->view->genererPages();
    }
}