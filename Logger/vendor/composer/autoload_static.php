<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite203b978527fb4ffb5108fbdb9094021
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Muthukumaranm\\Session\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Muthukumaranm\\Session\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite203b978527fb4ffb5108fbdb9094021::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite203b978527fb4ffb5108fbdb9094021::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite203b978527fb4ffb5108fbdb9094021::$classMap;

        }, null, ClassLoader::class);
    }
}
