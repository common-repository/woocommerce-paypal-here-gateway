<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf35853679feb3b9305d0d9813028d210
{
    public static $files = array (
        '12ffdfe2445fe0636f2687b75cd6c27f' => __DIR__ . '/..' . '/pendalff/phpqrcode/qrlib.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitf35853679feb3b9305d0d9813028d210::$classMap;

        }, null, ClassLoader::class);
    }
}
