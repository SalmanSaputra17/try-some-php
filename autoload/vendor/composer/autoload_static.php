<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4229b9f45f293b23e4519a676b51895
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd4229b9f45f293b23e4519a676b51895::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd4229b9f45f293b23e4519a676b51895::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
