<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc4ec03697ea5cfa07bc8140199d58d49
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc4ec03697ea5cfa07bc8140199d58d49::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc4ec03697ea5cfa07bc8140199d58d49::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
