<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0947f7d635b230626d882d70fd7789ed
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Translations\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Translations\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0947f7d635b230626d882d70fd7789ed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0947f7d635b230626d882d70fd7789ed::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
