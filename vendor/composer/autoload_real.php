<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf8d39fdd77f4b261c88cb7a423d91e2c
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitf8d39fdd77f4b261c88cb7a423d91e2c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf8d39fdd77f4b261c88cb7a423d91e2c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf8d39fdd77f4b261c88cb7a423d91e2c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}