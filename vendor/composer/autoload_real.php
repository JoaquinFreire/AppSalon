<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf9cfa6155008d4e5f220b4691dbff36e
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

        spl_autoload_register(array('ComposerAutoloaderInitf9cfa6155008d4e5f220b4691dbff36e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf9cfa6155008d4e5f220b4691dbff36e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf9cfa6155008d4e5f220b4691dbff36e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}