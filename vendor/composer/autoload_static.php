<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc4df62c56fee0d230313dc4e1e23794e
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc4df62c56fee0d230313dc4e1e23794e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc4df62c56fee0d230313dc4e1e23794e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc4df62c56fee0d230313dc4e1e23794e::$classMap;

        }, null, ClassLoader::class);
    }
}
