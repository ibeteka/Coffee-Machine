<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit94eeb8e109ea370773e282a7b51db80f
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rakit\\Console\\' => 14,
        ),
        'E' => 
        array (
            'Ermeo\\Entity\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rakit\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/rakit/console/src',
        ),
        'Ermeo\\Entity\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Entity',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit94eeb8e109ea370773e282a7b51db80f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit94eeb8e109ea370773e282a7b51db80f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
