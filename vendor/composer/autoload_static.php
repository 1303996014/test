<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite44ad4285a37b8b33b4b913013c00851
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Laoyao\\Hello\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Laoyao\\Hello\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite44ad4285a37b8b33b4b913013c00851::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite44ad4285a37b8b33b4b913013c00851::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite44ad4285a37b8b33b4b913013c00851::$classMap;

        }, null, ClassLoader::class);
    }
}
