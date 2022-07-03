<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6d54c4155c165598906bdc6593c6fe9f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automattic\\WooCommerce\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automattic\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/woocommerce/src/WooCommerce',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6d54c4155c165598906bdc6593c6fe9f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6d54c4155c165598906bdc6593c6fe9f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
