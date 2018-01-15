<?php
/**
 * Created by PhpStorm.
 * User: Samakunchan
 * Date: 11/12/2017
 * Time: 18:00
 */

namespace App\Routing;


/**
 * Class Route
 * @package App\Routing
 * Class qui gère le routing des pages
 */
class Route
{
    //

    /**
     * Route constructor.
     */
    public function __construct()
    {
        //
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
     * Méthode qui control le type de page appelé et redirige vers le controlleur adapté
     */
    public function gestionPages($pages)
    {
        switch ($pages){
            //
            default: 'La page n\'existe pas';
        }
    }

    /**
     * Méthode static qui permet les redirections dynamiques
     */
    public static function redirection($pages)
    {
        header('Location: '.$pages.' ');
        exit(); //refaire ça
    }
}