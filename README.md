## Proyecto BARdeSuSHI

Autor: Juan José Gómez Vázquez  
Tutor: José Angel Diz

----
Proyecto de Desarrollo de Aplicaciones Web entregado en 2019.  
Este proyecto, nombrado como **bardesushi**, se centra en el desarrollo de una página web para un hipotético restaurante japonés que abre sus puertas en la ciudad de Ourense. Debe mostrar de forma atractivo las cualidades del local, la filosofía de trabajo, su ubicación y la oferta gastronómica. Así mismo dispondrá de un acceso restringido al administrador para gestionar la carta de productos.

Desde el punto de vista del desarrollador el objetivo es utilizar herramientas y tecnologías vanguardistas en el diseño de aplicaciones web. Así hemos trabajado con el **framework Symfony**, basado en el modelo Vista-controlador, y su gestor de dependencias **Composer** en un entorno virtualizado mediante **VirtualBox** y **Docker**. Esto nos ha permitido familiarizarnos con herramientas como **Doctrine**, plantillas como **twig**, **Migraciones**, **Bundles**, **phpunit**, etc.  
El motor de base de datos es **MariaDB** aunque la capa de abstracción del framework y su **ORM** (Mapeo Objeto-relacional) permite la rápida adaptación a cualquier otro.  
El frontend ha sido desarrollado con las librerías **Bootstrap** y **jQuery**, con pinceladas de **CSS** y **JS** _'puro'_ para pequeños ajustes.  
El IDE elegido para el desarrollo ha sido **VS Code** que nos ha simplificado el trabajo de sincronización entre el host y el entono virtualizado así como otras interesantes herramientas de debugging y ayuda a la codificación (Tambien hemos probado Eclipse, Sublime Text y Brackets).  
Como entono de **VCS** hemos elegido **Git** y usado como repositorio remoto **GitHub** con objeto de compartir en código fuente con nuestro equipo de profesores.

----
GitHub

```bash
https://github.com/glyk0n/bardesushi.git
```

Symfony

```bash
https://symfony.com/
```

Database

```bash
CREATE DATABASE symfonydb;
GRANT ALL ON symfonydb.* TO 'usersf'@'localhost' identified by 'abc123.';
```

## Instalación

1. Clonar o descargar el repositorio

```bash
https://github.com/glyk0n/bardesushi.git
```

2. Ejecutar composer

```bash
composer install
```

## Autentificación

Utilizar credenciales de acceso como Admin

* username: admin
* password: admin1

## Despliegue 
```bash
http://bardesushi.enxebreformacion.com/web/
```

Symfony Standard Edition
========================

**WARNING**: This distribution does not support Symfony 4. See the
[Installing & Setting up the Symfony Framework][15] page to find a replacement
that fits you best.

Welcome to the Symfony Standard Edition - a fully-functional Symfony
application that you can use as the skeleton for your new applications.

For details on how to download and get started with Symfony, see the
[Installation][1] chapter of the Symfony Documentation.

What's inside?
--------------

The Symfony Standard Edition is configured with the following defaults:

  * An AppBundle you can use to start coding;

  * Twig as the only configured template engine;

  * Doctrine ORM/DBAL;

  * Swiftmailer;

  * Annotations enabled for everything.

It comes pre-configured with the following bundles:

  * **FrameworkBundle** - The core Symfony framework bundle

  * [**SensioFrameworkExtraBundle**][6] - Adds several enhancements, including
    template and routing annotation capability

  * [**DoctrineBundle**][7] - Adds support for the Doctrine ORM

  * [**TwigBundle**][8] - Adds support for the Twig templating engine

  * [**SecurityBundle**][9] - Adds security by integrating Symfony's security
    component

  * [**SwiftmailerBundle**][10] - Adds support for Swiftmailer, a library for
    sending emails

  * [**MonologBundle**][11] - Adds support for Monolog, a logging library

  * **WebProfilerBundle** (in dev/test env) - Adds profiling functionality and
    the web debug toolbar

  * **SensioDistributionBundle** (in dev/test env) - Adds functionality for
    configuring and working with Symfony distributions

  * [**SensioGeneratorBundle**][13] (in dev env) - Adds code generation
    capabilities

  * [**WebServerBundle**][14] (in dev env) - Adds commands for running applications
    using the PHP built-in web server

  * **DebugBundle** (in dev/test env) - Adds Debug and VarDumper component
    integration

All libraries and bundles included in the Symfony Standard Edition are
released under the MIT or BSD license.

Enjoy!

[1]:  https://symfony.com/doc/3.4/setup.html
[6]:  https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html
[7]:  https://symfony.com/doc/3.4/doctrine.html
[8]:  https://symfony.com/doc/3.4/templating.html
[9]:  https://symfony.com/doc/3.4/security.html
[10]: https://symfony.com/doc/3.4/email.html
[11]: https://symfony.com/doc/3.4/logging.html
[13]: https://symfony.com/doc/current/bundles/SensioGeneratorBundle/index.html
[14]: https://symfony.com/doc/current/setup/built_in_web_server.html
[15]: https://symfony.com/doc/current/setup.html
