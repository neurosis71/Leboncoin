<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Leboncoin;

class Utilisateur
{
	/**
	 * @var integer
	 */
	private $id_utilisateur;

	/**
	 * @var string
	 */
	private $email;

	/**
	 * @var string
	 */
	private $password;
        
        /**
         *
         * @var string 
         */
        private $nom;
        
        /**
         *
         * @var string
         */
        private $prenom;
        
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
         * @param int $id_utilisateur
         * @param string $email
         * @param string $password
         * @param string $nom
         * @param string $prenom
         * @param \DateTime $date_create
         * @param \DateTime $date_update
         * @param bool $active
         * @param bool $deleted
         */
	function __construct(int $id_utilisateur, string $email, string $password, string $nom, string $prenom, DateTime $date_create, \DateTime $date_update, bool $active, bool $deleted) {
            $this->id_utilisateur = $id_utilisateur;
            $this->email = $email;
            $this->password = $password;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->date_create = $date_create;
            $this->date_update = $date_update;
            $this->active = $active;
            $this->deleted = $deleted;
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
         * @return string
         */
        function getEmail() {
            return $this->email;
        }

        /**
         * 
         * @return string
         */
        function getPassword() {
            return $this->password;
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
         * @return string
         */
        function getPrenom() {
            return $this->prenom;
        }

        /**
         * 
         * @return Datetime
         */
        function getDate_create(): DateTime {
            return $this->date_create;
        }

        /**
         * 
         * @return Datetime
         */
        function getDate_update(): DateTime {
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
         * @param int $id_utilisateur
         */
        function setId_utilisateur(int $id_utilisateur) {
            $this->id_utilisateur = $id_utilisateur;
        }

        /**
         * 
         * @param string $email
         */
        function setEmail(string $email) {
            $this->email = $email;
        }

        /**
         * 
         * @param string $password
         */
        function setPassword(string $password) {
            $this->password = $password;
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
         * @param string $prenom
         */
        function setPrenom(string $prenom) {
            $this->prenom = $prenom;
        }

        /**
         * 
         * @param \DateTime $date_create
         */
        function setDate_create(DateTime $date_create) {
            $this->date_create = $date_create;
        }

        /**
         * 
         * @param \DateTime $date_update
         */
        function setDate_update(DateTime $date_update) {
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