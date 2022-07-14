<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita73647ae60182728661fb3fd409db698
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita73647ae60182728661fb3fd409db698::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita73647ae60182728661fb3fd409db698::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita73647ae60182728661fb3fd409db698::$classMap;

        }, null, ClassLoader::class);
    }
}
