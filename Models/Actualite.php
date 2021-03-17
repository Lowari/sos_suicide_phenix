<?php

class Actualite extends Database
{

    private $id;
    private $title;
    private $descritpion;
    private $picture_name;


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
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of descritpion
     */
    public function getDescritpion()
    {
        return $this->descritpion;
    }

    /**
     * Set the value of descritpion
     *
     * @return  self
     */
    public function setDescritpion($descritpion)
    {
        $this->descritpion = $descritpion;

        return $this;
    }

    /**
     * Get the value of picture_name
     */
    public function getPicture_name()
    {
        return $this->picture_name;
    }

    /**
     * Set the value of picture_name
     *
     * @return  self
     */
    public function setPicture_name($picture_name)
    {
        $this->picture_name = $picture_name;

        return $this;
    }

    public function __construct()
    {
        parent::__construct();
    }

    public function createActualite($arrayParameter)
    {
        $query = "INSERT INTO `actualite` (`title`, `description`, `picture_name`) VALUES (:title, :descriptions, :picture_name);";
        $buildQuery = parent::getDb()->prepare($query);

        $buildQuery->bindParam('title', $arrayParameter['title']);
        $buildQuery->bindParam('descriptions', $arrayParameter['description']);
        $buildQuery->bindParam('picture_name', $arrayParameter['picture_name']);

        return $buildQuery->execute();
    }

    public function readActualite()
    {
        $query = "SELECT * FROM `actualite`;";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->execute();

        $resultQuery = $buildQuery->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($resultQuery)) {
            return $resultQuery;
        } else {
            return false;
        }
    }

    public function showThisActualite($id)
    {
        $query = "SELECT * FROM `actualite` WHERE `id` = :id;";
        $buildQuery = parent::getDb()->prepare($query);
        $buildQuery->bindParam('id', $id);
        $buildQuery->execute();

        $resultQuery = $buildQuery->fetch(PDO::FETCH_ASSOC);

        if (!empty($resultQuery)) {
            return $resultQuery;
        } else {
            return false;
        }
    }

    public function updateActualite($arrayParameter)
    {
        $query = "UPDATE `actualite` SET `title` = :title, `description` = :descriptions, `picture_name` = :picture_name WHERE `id` = :id;";
        $buildQuery = parent::getDb()->prepare($query);

        $buildQuery->bindParam('title', $arrayParameter['title']);
        $buildQuery->bindParam('descriptions', $arrayParameter['description']);
        $buildQuery->bindParam('picture_name', $arrayParameter['picture_name']);
        $buildQuery->bindParam('id', $arrayParameter['id']);

        return $buildQuery->execute();
    }

    public function deleteActualite($thisActu)
    {
        $query = "DELETE FROM `actualite` WHERE `id` = :thisActu;";
        $buildQuery = parent::getDb()->prepare($query);

        $buildQuery->bindParam('thisActu', $thisActu);
        $buildQuery->execute();
    }
}
