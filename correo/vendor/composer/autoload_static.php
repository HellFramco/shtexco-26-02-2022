<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit77af4ac2e811a4746b95e27f3435286f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit77af4ac2e811a4746b95e27f3435286f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit77af4ac2e811a4746b95e27f3435286f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit77af4ac2e811a4746b95e27f3435286f::$classMap;

        }, null, ClassLoader::class);
    }
}
