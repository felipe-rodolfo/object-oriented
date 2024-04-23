<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a8a9393239c07ce057f4e4047785962
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\classes\\Crud' => __DIR__ . '/../..' . '/app/classes/Crud.php',
        'app\\classes\\Login' => __DIR__ . '/../..' . '/app/classes/Login.php',
        'app\\classes\\User' => __DIR__ . '/../..' . '/app/classes/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2a8a9393239c07ce057f4e4047785962::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2a8a9393239c07ce057f4e4047785962::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2a8a9393239c07ce057f4e4047785962::$classMap;

        }, null, ClassLoader::class);
    }
}
