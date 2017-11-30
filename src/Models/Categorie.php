<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Leboncoin;

class Categorie 
{

    /**
     * @var integer
     */
    private $id_categorie;

    /**
     * @var string
     */
    private $nom;

    /**
     *
     * @var Datetime
     */
    private $date_create;

    /**
     *
     * @var Datetime
     */
    private $date_update;

    /**
     *
     * @var boolean
     */
    private $active;

    /**
     *
     * @var boolean
     */
    private $deleted;

    /**
     * 
     * @param int $id_categorie
     * @param string $nom
     * @param \Datetime $date_create
     * @param \Datetime $date_update
     * @param bool $active
     * @param bool $deleted
     */
    function __construct(int $id_categorie, string $nom, Datetime $date_create, Datetime $date_update, bool $active, bool $deleted) {
        $this->id_categorie = $id_categorie;
        $this->nom = $nom;
        $this->date_create = $date_create;
        $this->date_update = $date_update;
        $this->active = $active;
        $this->deleted = $deleted;
    }

    /**
     * 
     * @return int
     */
    function getId_categorie() {
        return $this->id_categorie;
    }

    /**
     * 
     * @return string
     */
    function getNom() {
        return $this->nom;
    }

    /**
     * 
     * @return \Datetime
     */
    function getDate_create(): Datetime {
        return $this->date_create;
    }

    /**
     * 
     * @return \Datetime
     */
    function getDate_update(): Datetime {
        return $this->date_update;
    }

    /**
     * 
     * @return bool
     */
    function getActive() {
        return $this->active;
    }

    /**
     * 
     * @return bool
     */
    function getDeleted() {
        return $this->deleted;
    }

    /**
     * 
     * @param int $id_categorie
     */
    function setId_categorie(int $id_categorie) {
        $this->id_categorie = $id_categorie;
    }

    /**
     * 
     * @param string $nom
     */
    function setNom(string $nom) {
        $this->nom = $nom;
    }

    /**
     * 
     * @param \Datetime $date_create
     */
    function setDate_create(Datetime $date_create) {
        $this->date_create = $date_create;
    }

    /**
     * 
     * @param \Datetime $date_update
     */
    function setDate_update(Datetime $date_update) {
        $this->date_update = $date_update;
    }

    /**
     * 
     * @param bool $active
     */
    function setActive(bool $active) {
        $this->active = $active;
    }

    /**
     * 
     * @param bool $deleted
     */
    function setDeleted(bool $deleted) {
        $this->deleted = $deleted;
    }

}
