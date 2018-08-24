<?php
// autoload_static.php @generated by Composer
namespace Composer\Autoload;
class ComposerStaticInitf18486ed4d0525b56e8fea339bf0d377
{
    public static $files = array (
        '71d9d3744d1ed20a34c40e66a594ee60' => __DIR__ . '/../..' . '/engine/defines.php',
        'e0d45267b6c2b9c54fb2caa52ed3034f' => __DIR__ . '/../..' . '/engine/function.php',
    );
    public static $prefixLengthsPsr4 = array (
        'P' =>
            array (
                'Plugin\\' => 7,
            ),
        'E' =>
            array (
                'Engine\\' => 7,
            ),
        'C' =>
            array (
                'Cms\\' => 4,
            ),
        'A' =>
            array (
                'Admin\\' => 6,
            ),
    );
    public static $prefixDirsPsr4 = array (
        'Plugin\\' =>
            array (
                0 => __DIR__ . '/../..' . '/content/plugins',
            ),
        'Engine\\' =>
            array (
                0 => __DIR__ . '/../..' . '/engine',
            ),
        'Cms\\' =>
            array (
                0 => __DIR__ . '/../..' . '/cms',
            ),
        'Admin\\' =>
            array (
                0 => __DIR__ . '/../..' . '/admin',
            ),
    );
    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf18486ed4d0525b56e8fea339bf0d377::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf18486ed4d0525b56e8fea339bf0d377::$prefixDirsPsr4;
        }, null, ClassLoader::class);
    }
}