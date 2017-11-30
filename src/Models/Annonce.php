<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Leboncoin;

class Annonce 
{

    /**
     * @var integer
     */
    private $id_annonce;
    
    /**
     * @var integer
     */
    private $id_utilisateur;
    
    /**
     * @var integer
     */
    private $id_categorie;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $contenu;

    /**
     *
     * @var float 
     */
    private $prix;
    
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
     * @param int $id_annonce
     * @param int $id_utilisateur
     * @param int $id_categorie
     * @param string $titre
     * @param string $contenu
     * @param float $prix
     * @param \Datetime $date_create
     * @param \Datetime $date_update
     * @param bool $active
     * @param bool $deleted
     */
    function __construct(int $id_annonce, int $id_utilisateur, int $id_categorie, string $titre, string $contenu, float $prix, Datetime $date_create, Datetime $date_update, bool $active, bool $deleted) {
        $this->id_annonce = $id_annonce;
        $this->id_utilisateur = $id_utilisateur;
        $this->id_categorie = $id_categorie;
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->prix = $prix;
        $this->date_create = $date_create;
        $this->date_update = $date_update;
        $this->active = $active;
        $this->deleted = $deleted;
    }

    /**
     * 
     * @return int
     */
    function getId_annonce() {
        return $this->id_annonce;
    }

    /**
     * 
     * @return int
     */
    function getId_utilisateur() {
        return $this->id_utilisateur;
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
    function getTitre() {
        return $this->titre;
    }

    /**
     * 
     * @return string
     */
    function getContenu() {
        return $this->contenu;
    }

    /**
     * 
     * @return float
     */
    function getPrix() {
        return $this->prix;
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
     * @param int $id_annonce
     */
    function setId_annonce(int $id_annonce) {
        $this->id_annonce = $id_annonce;
    }

    /**
     * 
     * @param int $id_utilisateur
     */
    function setId_utilisateur(int $id_utilisateur) {
        $this->id_utilisateur = $id_utilisateur;
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
     * @param string $titre
     */
    function setTitre(string $titre) {
        $this->titre = $titre;
    }

    /**
     * 
     * @param string $contenu
     */
    function setContenu(string $contenu) {
        $this->contenu = $contenu;
    }

    /**
     * 
     * @param float $prix
     */
    function setPrix(float $prix) {
        $this->prix = $prix;
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
