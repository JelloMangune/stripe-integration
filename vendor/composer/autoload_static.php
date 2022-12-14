<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7ca7608201eafbb9eed1d801485e09b9
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
        'P' => 
        array (
            'Pc\\StripeIntegration\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
        'Pc\\StripeIntegration\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7ca7608201eafbb9eed1d801485e09b9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7ca7608201eafbb9eed1d801485e09b9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7ca7608201eafbb9eed1d801485e09b9::$classMap;

        }, null, ClassLoader::class);
    }
}
