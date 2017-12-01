<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Models;

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
     * @var string
     */
    private $date_create;

    /**
     *
     * @var string
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
     * @return string
     */
    function getDate_create() {
        return $this->date_create;
    }

    /**
     * 
     * @return string
     */
    function getDate_update() {
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
     * @param string $date_create
     */
    function setDate_create(string $date_create) {
        $this->date_create = $date_create;
    }

    /**
     * 
     * @param string $date_update
     */
    function setDate_update(string $date_update) {
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


    
    function toArray(){
        
        return $result = array(
            "id_annonce" => $this->getId_annonce(),
            "id_utilisateur" => $this->getId_utilisateur(),
            "id_categorie" => $this->getId_categorie(),
            "titre" => $this->getTitre(),
            "contenu" => $this->getContenu(),
            "prix" => $this->getPrix(),
            "date_create" => $this->getDate_create(),
            "date_update" => $this->getDate_update(),
            "active" => $this->getActive(),
            "deleted" => $this->getDeleted()
        );
        
    }

}
