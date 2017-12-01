<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Models\Annonce;

class AnnonceController {

    public function addAnnonce(Request $request, Application $app) 
    {
        
        if (!$request->request->has('id_utilisateur')) {
            return $app->json('Missing parameter: id_utilisateur', 400);
        }

        if (!$request->request->has('id_categorie')) {
            return $app->json('Missing parameter: id_categorie', 400);
        }

        if (!$request->request->has('titre')) {
            return $app->json('Missing parameter: titre', 400);
        }

        if (!$request->request->has('contenu')) {
            return $app->json('Missing parameter: contenu', 400);
        }

        if (!$request->request->has('prix')) {
            return $app->json('Missing parameter: prix', 400);
        }

        $annonce = new Annonce();
        $annonce->setId_utilisateur($request->request->get('id_utilisateur'));
        $annonce->setId_categorie($request->request->get('id_categorie'));
        $annonce->setTitre($request->request->get('titre'));
        $annonce->setContenu($request->request->get('contenu'));
        $annonce->setPrix($request->request->get('prix'));
        $annonce->setDate_create(date("Y-m-d H:i:s"));
        $annonce->setActive(true);
        $annonce->setDeleted(false);

        //Nous appelerions ici la classe DAO afin de faire l'insertion en BDD
        
        return $app->json( $annonce->toArray(), 200);
    }

}
