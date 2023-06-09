<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit545a5b173c56f257d1e6c4e559392485
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'eftec\\bladeone\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'eftec\\bladeone\\' => 
        array (
            0 => __DIR__ . '/..' . '/eftec/bladeone/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit545a5b173c56f257d1e6c4e559392485::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit545a5b173c56f257d1e6c4e559392485::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit545a5b173c56f257d1e6c4e559392485::$classMap;

        }, null, ClassLoader::class);
    }
}
