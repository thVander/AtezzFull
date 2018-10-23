<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd4c7612fd9efadb6b798ad8438ee80f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PagSeguro\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PagSeguro\\' => 
        array (
            0 => __DIR__ . '/..' . '/pagseguro/pagseguro-php-sdk/source',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd4c7612fd9efadb6b798ad8438ee80f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd4c7612fd9efadb6b798ad8438ee80f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}