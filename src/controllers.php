<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Request::setTrustedProxies(array('127.0.0.1'));

$app->get('/', function () use ($app) {
            return $app['twig']->render('index.html.twig', array());
        })
        ->bind('homepage');

$app->get('/postannonce', function () use ($app) {


            $postfields = array(
                'id_utilisateur' => 1,
                'id_categorie' => 2,
                'titre' => 'Ma première annonce',
                'contenu' => 'Voici le corps de ma première annonce',
                'prix' => 15.5
            );
            
            $json = json_encode($postfields);


            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, 'http://localhost/annonces');

            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($json))
            );

            $return = curl_exec($curl);
            $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            curl_close($curl);
            
            $annonce = json_decode($return, true);
            
            return $app['twig']->render('postannonce.html.twig', array(
                'http_status' => $http_status,
                'annonce' => $annonce
            ));
            
        })
        ->bind('post_annonce');


$app->post('/annonces', 'Controllers\AnnonceController::addAnnonce')
        ->bind('api_annonce_add');


$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/' . $code . '.html.twig',
        'errors/' . substr($code, 0, 2) . 'x.html.twig',
        'errors/' . substr($code, 0, 1) . 'xx.html.twig',
        'errors/default.html.twig',
    );

    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});
