<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5caaa72667c088b7ef882569d4209b2f
{
    public static $files = array (
        '662a729f963d39afe703c9d9b7ab4a8c' => __DIR__ . '/..' . '/symfony/polyfill-php83/bootstrap.php',
        '2203a247e6fda86070a5e4e07aed533a' => __DIR__ . '/..' . '/symfony/clock/Resources/now.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Runtime\\Symfony\\Component\\' => 34,
            'Symfony\\Polyfill\\Php83\\' => 23,
            'Symfony\\Component\\Runtime\\' => 26,
            'Symfony\\Component\\Messenger\\' => 28,
            'Symfony\\Component\\Clock\\' => 24,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Clock\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Runtime\\Symfony\\Component\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/runtime/Internal',
        ),
        'Symfony\\Polyfill\\Php83\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php83',
        ),
        'Symfony\\Component\\Runtime\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/runtime',
        ),
        'Symfony\\Component\\Messenger\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/messenger',
        ),
        'Symfony\\Component\\Clock\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/clock',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Psr\\Clock\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/clock/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DateError' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateError.php',
        'DateException' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateException.php',
        'DateInvalidOperationException' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateInvalidOperationException.php',
        'DateInvalidTimeZoneException' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateInvalidTimeZoneException.php',
        'DateMalformedIntervalStringException' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateMalformedIntervalStringException.php',
        'DateMalformedPeriodStringException' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateMalformedPeriodStringException.php',
        'DateMalformedStringException' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateMalformedStringException.php',
        'DateObjectError' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateObjectError.php',
        'DateRangeError' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/DateRangeError.php',
        'Override' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/Override.php',
        'SQLite3Exception' => __DIR__ . '/..' . '/symfony/polyfill-php83/Resources/stubs/SQLite3Exception.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5caaa72667c088b7ef882569d4209b2f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5caaa72667c088b7ef882569d4209b2f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5caaa72667c088b7ef882569d4209b2f::$classMap;

        }, null, ClassLoader::class);
    }
}
