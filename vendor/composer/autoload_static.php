<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5d839b36381eb4457e66167c3e22ed73
{
    public static $files = array (
        '3f8bdd3b35094c73a26f0106e3c0f8b2' => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/SendGrid.php',
        '9dda55337a76a24e949fbcc5d905a2c7' => __DIR__ . '/..' . '/sendgrid/sendgrid/lib/helpers/mail/Mail.php',
    );

    public static $prefixLengthsPsr4 = array (
        '\\' => 
        array (
            '\\' => 1,
        ),
    );

    public static $prefixDirsPsr4 = array (
        '\\' => 
        array (
            0 => '/',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'SendGrid' => 
            array (
                0 => __DIR__ . '/..' . '/sendgrid/php-http-client/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5d839b36381eb4457e66167c3e22ed73::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5d839b36381eb4457e66167c3e22ed73::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit5d839b36381eb4457e66167c3e22ed73::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit5d839b36381eb4457e66167c3e22ed73::$classMap;

        }, null, ClassLoader::class);
    }
}
