Test LeBonCoin
==============

Rendu de test technique pour LeBonCoin.

Cette application utilise la box Vagrant rasmus/php7dev pour monter l'environnement de developpement et est basé sur Silex Skeleton.

https://www.vagrantup.com/
https://app.vagrantup.com/rasmus/boxes/php7dev
https://silex.symfony.com/download

Mise en route de l'application
----------------------------

Afin de monter votre environnement vous devez installer au préalable :

 - [Vagrant](https://www.vagrantup.com/)
 - [Virtual Box](https://www.virtualbox.org/)


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









Getting started with Silex
--------------------------

This distribution is meant to be the starting point for your Silex applications.

A great way to start learning Silex is via the `Documentation`_, which will
take you through all the features of Silex.

What's inside?
---------------

The Silex Skeleton is configured with the following service providers:

* `ValidatorServiceProvider`_ - Provides a service for validating data. It is
  most useful when used with the FormServiceProvider, but can also be used
  standalone.

* `ServiceControllerServiceProvider`_ - As your Silex application grows, you
  may wish to begin organizing your controllers in a more formal fashion.
  Silex can use controller classes out of the box, but with a bit of work,
  your controllers can be created as services, giving you the full power of
  dependency injection and lazy loading.

* `TwigServiceProvider`_ - Provides integration with the Twig template engine.

* `WebProfilerServiceProvider`_ - Enable the Symfony web debug toolbar and
  the Symfony profiler in your Silex application when developing.

* `MonologServiceProvider`_ - Enable logging in the development environment.

Read the `Providers`_ documentation for more details about Silex Service
Providers.

Enjoy!

.. _Composer: http://getcomposer.org/
.. _Documentation: http://silex.sensiolabs.org/documentation
.. _ValidatorServiceProvider: http://silex.sensiolabs.org/doc/master/providers/validator.html
.. _ServiceControllerServiceProvider: http://silex.sensiolabs.org/doc/master/providers/service_controller.html
.. _TwigServiceProvider: http://silex.sensiolabs.org/doc/master/providers/twig.html
.. _WebProfilerServiceProvider: http://github.com/silexphp/Silex-WebProfiler
.. _MonologServiceProvider: http://silex.sensiolabs.org/doc/master/providers/monolog.html
.. _Providers: http://silex.sensiolabs.org/doc/providers.html
