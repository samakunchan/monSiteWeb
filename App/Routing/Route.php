<?php
/**
 * Created by PhpStorm.
 * User: Samakunchan
 * Date: 11/12/2017
 * Time: 18:00
 */

namespace App\Routing;
use Controllers\EmailController;
use Controllers\HomeController;


/**
 * Class Route
 * @package App\Routing
 * Class qui gère le routing des pages
 */
class Route
{
    /**
     * @var HomeController
     */
    private $homePage;

    /**
     * @var EmailController
     */
    private $emailPage;

    /**
     * Route constructor.
     */
    public function __construct()
    {
        $this->homePage = new HomeController();
        $this->emailPage = new EmailController();
    }

    /**
     * Méthode qui affiche par défaut la page d'acceuil
     * Il reçoit les requetes des pages sous forme de $get
     * Redirige vers le controlleru adapter selon la page demander
     */
    public function start()
    {
        if(isset($_GET['page'])){
            $pages = $_GET['page'];
        }else{
            $pages = 'home';
        }
        $this->gestionPages($pages);
    }

    /**
     * @param $pages
     * Méthode qui control le type de page appelé et redirige vers le controlleur adapté
     */
    public function gestionPages($pages)
    {
        switch ($pages){
            case 'home':
                $this->homePage->builHomeView();
                break;
            case 'mail':
                $this->emailPage->buildEmailView();
                break;
            default: 'La page n\'existe pas';
        }
    }

    /**
     * @param $pages
     * Méthode static qui permet les redirections dynamiques
     */
    public static function redirection($pages)
    {
        header('Location: '.$pages.' ');
        exit();
    }

    /**
     * @param $pages
     */
    public static function refreshing($pages)
    {
        $url='http://localhost/perso/Public/'.$pages;
        header("Refresh: 2;url=$url");
    }
}