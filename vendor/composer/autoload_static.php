<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc8d487e5ccee78be86a18769b06e677f
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Engine\\DI\\' => 10,
            'Engine\\' => 7,
        ),
        'C' => 
        array (
            'Cms\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Engine\\DI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/engine/DI',
        ),
        'Engine\\' => 
        array (
            0 => __DIR__ . '/../..' . '/engine',
        ),
        'Cms\\' => 
        array (
            0 => __DIR__ . '/../..' . '/cms',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc8d487e5ccee78be86a18769b06e677f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc8d487e5ccee78be86a18769b06e677f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc8d487e5ccee78be86a18769b06e677f::$classMap;

        }, null, ClassLoader::class);
    }
}
