<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit47a5743aebfb373581a7aaadff6970bf
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gzhh\\Encrypt\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gzhh\\Encrypt\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit47a5743aebfb373581a7aaadff6970bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit47a5743aebfb373581a7aaadff6970bf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
