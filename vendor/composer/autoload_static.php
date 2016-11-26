<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit72fb2ea4560de7b7e7ff922501033bde
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'myframes\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'myframes\\' => 
        array (
            0 => __DIR__ . '/..' . '/myframes',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit72fb2ea4560de7b7e7ff922501033bde::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit72fb2ea4560de7b7e7ff922501033bde::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}