<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit70ee5a05ff701221759a67d9a4fa4f05
{
    public static $classMap = array (
        'ComposerAutoloaderInit70ee5a05ff701221759a67d9a4fa4f05' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit70ee5a05ff701221759a67d9a4fa4f05' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBulider.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
        'UserController' => __DIR__ . '/../..' . '/controllers/UserController.php',
        'controller\\PagesController' => __DIR__ . '/../..' . '/controllers/PagesController.php',
        'core\\App' => __DIR__ . '/../..' . '/core/App.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit70ee5a05ff701221759a67d9a4fa4f05::$classMap;

        }, null, ClassLoader::class);
    }
}