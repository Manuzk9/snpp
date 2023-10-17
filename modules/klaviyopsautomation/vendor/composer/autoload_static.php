<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitba8681df5b428106a9864637d6a8921f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PrestaShop\\PsAccountsInstaller\\' => 31,
            'PrestaShop\\ModuleLibServiceContainer\\' => 37,
            'PrestaShop\\ModuleLibCacheDirectoryProvider\\' => 43,
        ),
        'K' => 
        array (
            'Klaviyo\\' => 8,
            'KlaviyoPs\\Classes\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PrestaShop\\PsAccountsInstaller\\' => 
        array (
            0 => __DIR__ . '/..' . '/prestashop/prestashop-accounts-installer/src',
        ),
        'PrestaShop\\ModuleLibServiceContainer\\' => 
        array (
            0 => __DIR__ . '/..' . '/prestashop/module-lib-service-container/src',
        ),
        'PrestaShop\\ModuleLibCacheDirectoryProvider\\' => 
        array (
            0 => __DIR__ . '/..' . '/prestashop/module-lib-cache-directory-provider/src',
        ),
        'Klaviyo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/klaviyo-sdk',
        ),
        'KlaviyoPs\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'KlaviyoPsModule' => __DIR__ . '/../..' . '/includes/KlaviyoPsModule.php',
        'KlaviyoPs\\KlaviyoPsAjaxModuleFrontController' => __DIR__ . '/../..' . '/controllers/front/ajax.php',
        'WebserviceSpecificManagementKlaviyo' => __DIR__ . '/../..' . '/includes/WebserviceSpecificManagementKlaviyo.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitba8681df5b428106a9864637d6a8921f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitba8681df5b428106a9864637d6a8921f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitba8681df5b428106a9864637d6a8921f::$classMap;

        }, null, ClassLoader::class);
    }
}
