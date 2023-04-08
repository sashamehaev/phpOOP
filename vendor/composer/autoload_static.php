<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit741fd8b83e5f36708d685ed9a3d58a3e
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit741fd8b83e5f36708d685ed9a3d58a3e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit741fd8b83e5f36708d685ed9a3d58a3e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit741fd8b83e5f36708d685ed9a3d58a3e::$classMap;

        }, null, ClassLoader::class);
    }
}
