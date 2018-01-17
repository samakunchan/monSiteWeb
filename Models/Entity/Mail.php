<?php
/**
 * Created by PhpStorm.
 * User: Samakunchan
 * Date: 17/01/2018
 * Time: 04:00
 */

namespace Models\Entity;

/**
 * Class Mail
 * @package Models\Entity
 */
class Mail
{
    /****************************************************************************************
     * PROPRIETE
     * **************************************************************************************
     */
    /**
     * @var
     */
    private $name;

    /**
     * @var
     */
    private $entreprise;

    /**
     * @var
     */
    private $email;

    /**
     * @var
     */
    private $tel;

    /**
     * @var
     */
    private $title;

    /**
     * @var
     */
    private $content;

    /****************************************************************************************
     * SETTER ET GETTER
     * **************************************************************************************
     */

    /**
     * @return mixed
     */
    public function getName()
    {
        return (string) htmlspecialchars($this->name);
    }

    /**
     * @param $name
     * @return $this
     * @throws \Exception
     */
    public function setName($name)
    {
        if (isset($name) && !empty($name)){
            if (is_string($name)){
                $this->name = $name;
                return $this;
            }
        }else{
            throw new \Exception("Le champ 'name' est invalide");
        }
    }

    /**
     * @return mixed
     */
    public function getEntreprise()
    {
        return (string) htmlspecialchars($this->entreprise);
    }

    /**
     * @param $entreprise
     * @return $this
     * @throws \Exception
     */
    public function setEntreprise($entreprise)
    {
        if (isset($entreprise) && !empty($entreprise)){
            if (is_string($entreprise)){
                $this->entreprise = $entreprise;
                return $this;
            }
        }else{
            throw new \Exception("Le champ 'entreprise' est invalide");
        }
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return (string) htmlspecialchars($this->email);
    }

    /**
     * @param $email
     * @return $this
     * @throws \Exception
     */
    public function setEmail($email)
    {
        if (isset($email) && !empty($email)){
            if (is_string($email)){
                $this->email = $email;
                return $this;
            }
        }else{
            throw new \Exception("Le champ 'email' est invalide");
        }
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return (int) htmlspecialchars($this->tel);
    }

    /**
     * @param $tel
     * @return $this
     * @throws \Exception
     */
    public function setTel($tel)
    {
        if (isset($tel) && !empty($tel)){
            if (is_numeric($tel)){
                $this->tel = $tel;
                return $this;
            }else{
                throw new \Exception("Le champ 'tel' n'est pas numérique");
            }
        }else{
            throw new \Exception("Le champ 'tel' est invalide");
        }
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return (string) htmlspecialchars($this->title);
    }

    /**
     * @param $title
     * @return $this
     * @throws \Exception
     */
    public function setTitle($title)
    {
        if (isset($title) && !empty($title)){
            if (is_string($title)){
                $this->title = $title;
                return $this;
            }
        }else{
            throw new \Exception("Le champ 'title' est invalide");
        }
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return (string) htmlspecialchars($this->content);
    }

    /**
     * @param $content
     * @return $this
     * @throws \Exception
     */
    public function setContent($content)
    {
        if (isset($content) && !empty($content)){
            if (is_string($content)){
                $this->content = $content;
                return $this;
            }
        }else{
            throw new \Exception("Le champ 'content' est invalide");
        }
    }
}