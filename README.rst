Test LeBonCoin
==============

Rendu de test technique pour LeBonCoin.

Cette application utilise la box Vagrant rasmus/php7dev pour monter l'environnement de developpement et est basé sur Silex Skeleton.

.. _Vagrant: https://www.vagrantup.com/
.. _rasmus/php7dev: https://app.vagrantup.com/rasmus/boxes/php7dev
.. _Silex: https://silex.symfony.com/download

Mise en route de l'application
----------------------------

Afin de monter votre environnement vous devez installer au préalable :

.. _Vagrant: https://www.vagrantup.com/
.. _Virtual Box: https://www.virtualbox.org/


Il vous suffira ensuite de faire un

.. code-block:: console

    $ cd path/to/project
    $ vagrant up

Vous devrez peut être redémarrer la VM afin que les guest additions soient pris en compte correctement.

Une derniére étape de configuration est nécessaire pour configurer nginx correctement. 
Vous devez copier le fichier VagrantProvisionning/Nginx/leboncoin.conf sur la VM

.. code-block:: console

    $ vagrant ssh
    $ cd /etc/nginx/conf.d
    $ rm default.conf
    $ cp /vagrant/VagrantProvisionning/Nginx/leboncoin.conf .
    $ sudo service nginx restart

N'oubliez pas de lancer composer

.. code-block:: console

    $ cd /path/to/project
    $ php composer.phar update


Accéder à l'application
-----------------------------

Vous pouvez maintenant accéder à l'application via :  http://localhost:8080/


Liste des endpoints
-----------------------------

+--------------+------------+--------------------------------------------------------------------------------+
|   Endpoint   |   Method   |                              Description                                       |
+==============+============+================================================================================+
|      /       |    GET     |   Homepage, lien afin de tester l'ajout d'une annonce et liste des endpoints   |
+--------------+------------+--------------------------------------------------------------------------------+
| /postannonce |    GET     |   Fait un appel Curl a l'API afin de créer une annonce et affiche le résultat  |
+--------------+------------+--------------------------------------------------------------------------------+
| /annonces    |    POST    |   REST endpoint pour créer une annonce                                         |
+--------------+------------+--------------------------------------------------------------------------------+

Base de données
-----------------------------

Le dossier database du projet contient :

- Le fichier SQL de création de la BDD
- Un fichier PDF avec une représentation graphique de la BDD


Explications
-----------------------------

L'application ne contient que 3 endpoints relativement simples.

Le premier endpoint (homepage) et le second endpoint (/postannonce) sont gérés dans controllers.php

Le troisième endpoint (/annonces POST) est géré dans Controllers/AnnonceController.php

La séparation est ici pour démontrer que nous pouvons séparer les fonctions gérant une même ressource dans un controlleur spécifique et router
les appels directement dans la classe controllers.php Nous pourrions pousser le concept plus loin en créant un controller HomepageController.php 
et un controller DemoController.php


Lors de l'accés à la homepage vous verrez affiché un lien afin de tester la création d'annonce ainsi que la liste des endpoints de l'application. 
Lors du click sur le lien, un Curl est fait en arriére plan et l'application affiche le résultat.