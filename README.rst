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



Accéder à l'application
-----------------------------

Vous pouvez maintenant accéder à l'application via :  http://localhost:8080/




Base de données
-----------------------------

Le dossier database du projet contient :

- Le fichier SQL de création de la BDD
- Un fichier PDF avec une représentation graphique de la BDD
