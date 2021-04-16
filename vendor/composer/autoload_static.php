<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc11d01371d2c7bf57e9e56ba95364a1
{
    public static $files = array (
        '17fd9fef37c97cfdc0c7794299a8423d' => __DIR__ . '/..' . '/vrana/notorm/NotORM.php',
    );

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

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'P' => 
        array (
            'PHPExcel' => 
            array (
                0 => __DIR__ . '/..' . '/phpoffice/phpexcel/Classes',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc11d01371d2c7bf57e9e56ba95364a1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc11d01371d2c7bf57e9e56ba95364a1::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitdc11d01371d2c7bf57e9e56ba95364a1::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitdc11d01371d2c7bf57e9e56ba95364a1::$classMap;

        }, null, ClassLoader::class);
    }
}
