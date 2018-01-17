<?php
/**
 * Created by PhpStorm.
 * User: Samakunchan
 * Date: 17/01/2018
 * Time: 00:25
 */

namespace Controllers;


use App\Routing\Route;
use App\Tools\Views;
use Models\Entity\Mail;

/**
 * Class EmailController
 * @package Controllers
 */
class EmailController
{
    /**
     * @var Views
     */
    private $emailView;

    /**
     * @var
     */
    private $messageSuccess;

    /**
     * @var
     */
    private $messageError;

    /**
     * @var
     */
    private $data;

    /**
     * @var
     */
    private $mail;

    /**
     * EmailController constructor.
     */
    public function __construct()
    {
        $this->emailView = new Views('mail');
        $this->mail = new Mail();
    }

    /**
     * Méthode pour générer la vue de du formulaire pour l'envoie d'un message (email)
     */
    public function buildEmailView()
    {
        if ($_POST){
            if (isset($_POST['name']) && !empty($_POST['name']) &&
                isset($_POST['entreprise']) && !empty($_POST['entreprise']) &&
                isset($_POST['mail']) && !empty($_POST['mail']) &&
                isset($_POST['tel']) && !empty($_POST['tel']) &&
                isset($_POST['title']) && !empty($_POST['title']) &&
                isset($_POST['token']) && !empty($_POST['token']) &&
                isset($_POST['content']) && !empty($_POST['content'])){
                $this->data = $_POST;
                $this->checkThePost();
            }else{
                $this->messageError = "Veuillez remplir tout les champs";
            }
        }
        $dataForPage =
            [
            'messageError' => $this->messageError,
            'messageSuccess' =>  $this->messageSuccess
            ];
        $this->emailView->genererPages($dataForPage);
    }

    /**
     * Méthode pour controller la faille CSRF lors de l'envoie de l'email, cad lors de la réception du $post
     */
    public function checkThePost()
    {
        if ($this->checkTokenCSRF($this->data['token'], 'ProtectedMailSend')){
            $this->mail->setName($this->data['name']);
            $this->mail->setEntreprise($this->data['entreprise']);
            $this->mail->setEmail($this->data['mail']);
            $this->mail->setTel($this->data['tel']);
            $this->mail->setTitle($this->data['title']);
            $this->mail->setContent($this->data['content']);
            $this->generateEmail();
            $this->messageSuccess = 'Votre message a bien été envoyé';
            Route::refreshing('mail');
        }else{
            $this->messageError = "Un problème est survenu lors de l'envoie de votre message.";
        }
    }

    /**
     * Méthode qui génère l'email
     */
    public function generateEmail()
    {
        $mail = 'cedric.badjah@samakunchan.fr';
        $mailOwner = $this->mail->getEmail();
        $nameOwner = $this->mail->getName();
        if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail))
        {
            $passage_ligne = "\r\n";
        }
        else
        {
            $passage_ligne = "\n";
        }
        $message_html = '
<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                         <meta http-equiv="X-UA-Compatible" content="ie=edge">
             <title>Document</title>
</head>
<body>
  <section>
<br>
<div>
    <p>Entreprise : '.$this->mail->getEntreprise().'</p>
    <p>Tel: '.$this->mail->getTel().'</p>
</div>
  <div>
  <p>'.$this->mail->getContent().'</p>
</div>
</section>
</body>
</html>        
        ';
//=====Création de la boundary
        $boundary = "-----=".md5(rand());
//==========

//=====Définition du sujet.
        $sujet = $this->mail->getTitle();
//=========

//=====Création du header de l'e-mail.
        $header = "From: \"$nameOwner\"<$mailOwner>".$passage_ligne;
        $header.= "Reply-to: \"$nameOwner\" <$mailOwner>".$passage_ligne;
        $header.= "MIME-Version: 1.0".$passage_ligne;
        $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========

//=====Création du message.
        $message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML
        $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
        $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
        $message.= $passage_ligne.$message_html.$passage_ligne;
//==========
        $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
        $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========

//=====Envoi de l'e-mail.
        //mail($mail,$sujet,$message,$header);
//==========
    }

    /**
     * Méthode static pour généré un code crypter afin de contrer la faille CSRF
     * @param $formName
     * @return string
     */
    public static function tokenCSRF($formName)
    {
        $secretKey = 'gsfhs154aergz2#';
        if (!session_id()) {
            session_start();
        }
        $sessionId = session_id();
        return sha1($formName . $sessionId . $secretKey);
    }

    /**
     * Méthode pour vérifier le code crypter par tokenCSRF est le même recut par $post
     * @param $token
     * @param $formName
     * @return bool
     */
    public function checkTokenCSRF($token, $formName)
    {
        return $token === self::tokenCSRF($formName);
    }

}