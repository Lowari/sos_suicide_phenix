<?php

class Utilisateurs extends Database
{
    private $id;
    private $firstname;
    private $lastname;
    private $mail;
    private $phone;
    private $password;
    private $id_role;


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of mail
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of id_role
     */
    public function getId_role()
    {
        return $this->id_role;
    }

    /**
     * Set the value of id_role
     *
     * @return  self
     */
    public function setId_role($id_role)
    {
        $this->id_role = $id_role;

        return $this;
    }

    public function __construct()
    {
        parent::__construct();
    }

    public function checkConnexionUser($mail)
    {
        $query = "SELECT * FROM `utlisateurs` WHERE `mail` = :mail;";
        $buildQuery = parent::getDb()->prepare($query);

        $buildQuery -> bindParam('mail', $mail);

        $buildQuery -> execute();
        $result = $buildQuery -> fetch(PDO::FETCH_ASSOC);
        if (!empty($result)) {
            return $result;
        } else {
            return false;
        }
    }
}
