<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitae42a06ee57a24c1927494d07164251a
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitae42a06ee57a24c1927494d07164251a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitae42a06ee57a24c1927494d07164251a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
