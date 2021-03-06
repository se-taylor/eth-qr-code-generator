<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6acf70f55d73c13cf3415050eb505122
{
    public static $files = array (
        'f3aa7b7144782f87569c3edc35345318' => __DIR__ . '/../..' . '/constants.php',
        '2103505bbe7570df6ee41c7999dc0165' => __DIR__ . '/../..' . '/admin/ajax.php',
        'fbd22bd5a67ba99bf16533e6fa1ac7fd' => __DIR__ . '/../..' . '/includes/options.php',
        '5c12ad85804d852690b7282a337a7c27' => __DIR__ . '/../..' . '/includes/qr.php',
        'a4047f4ec7d53dbfbc2ce3bdcedd8774' => __DIR__ . '/../..' . '/includes/functions.php',
        '912fe4d7a122084dc571e63e99c4671d' => __DIR__ . '/../..' . '/includes/shortcodes.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ETH_QR_CODE\\Admin\\Init' => __DIR__ . '/../..' . '/admin/class-init.php',
        'ETH_QR_CODE\\Includes\\Assets' => __DIR__ . '/../..' . '/includes/class-assets.php',
        'ETH_QR_CODE\\Includes\\Elementor' => __DIR__ . '/../..' . '/includes/class-elementor.php',
        'ETH_QR_CODE\\Includes\\Init' => __DIR__ . '/../..' . '/includes/class-init.php',
        'ETH_QR_CODE\\Includes\\Ethereum_QR_Code_Widget' => __DIR__ . '/../..' . '/includes/class-eth-qr-code-widget.php',
        'ETH_QR_CODE\\QR8BitByte' => __DIR__ . '/../..' . '/includes/qr.php',
        'ETH_QR_CODE\\QRAlphaNum' => __DIR__ . '/../..' . '/includes/qr.php',
        'ETH_QR_CODE\\QRBitBuffer' => __DIR__ . '/../..' . '/includes/qr.php',
        'ETH_QR_CODE\\QRCode' => __DIR__ . '/../..' . '/includes/qr.php',
        'ETH_QR_CODE\\QRData' => __DIR__ . '/../..' . '/includes/qr.php',
        'ETH_QR_CODE\\QRKanji' => __DIR__ . '/../..' . '/includes/qr.php',
        'ETH_QR_CODE\\QRMath' => __DIR__ . '/../..' . '/includes/qr.php',
        'ETH_QR_CODE\\QRNumber' => __DIR__ . '/../..' . '/includes/qr.php',
        'ETH_QR_CODE\\QRPolynomial' => __DIR__ . '/../..' . '/includes/qr.php',
        'ETH_QR_CODE\\QRRSBlock' => __DIR__ . '/../..' . '/includes/qr.php',
        'ETH_QR_CODE\\QRUtil' => __DIR__ . '/../..' . '/includes/qr.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit6acf70f55d73c13cf3415050eb505122::$classMap;

        }, null, ClassLoader::class);
    }
}
