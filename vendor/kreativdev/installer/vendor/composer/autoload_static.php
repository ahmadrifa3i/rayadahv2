<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0aae5bf6c5e34e29f60a2dc63a114cbf
{
    public static $files = array (
        'd7354eb4c8441fbf08eec280b61c7c73' => __DIR__ . '/..' . '/rachidlaasri/laravel-installer/src/Helpers/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RachidLaasri\\LaravelInstaller\\' => 30,
        ),
        'K' => 
        array (
            'Kreativdev\\Installer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RachidLaasri\\LaravelInstaller\\' => 
        array (
            0 => __DIR__ . '/..' . '/rachidlaasri/laravel-installer/src',
        ),
        'Kreativdev\\Installer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0aae5bf6c5e34e29f60a2dc63a114cbf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0aae5bf6c5e34e29f60a2dc63a114cbf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0aae5bf6c5e34e29f60a2dc63a114cbf::$classMap;

        }, null, ClassLoader::class);
    }
}
