<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1922d298e117fd77e2d960e655049056
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kenprogrammer\\Contactform\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kenprogrammer\\Contactform\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1922d298e117fd77e2d960e655049056::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1922d298e117fd77e2d960e655049056::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1922d298e117fd77e2d960e655049056::$classMap;

        }, null, ClassLoader::class);
    }
}
