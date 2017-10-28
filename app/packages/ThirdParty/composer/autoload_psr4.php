<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname(dirname(dirname($vendorDir)));

return array(
    'Package\\View\\' => array($baseDir . '/app/packages/View'),
    'Package\\Translation\\' => array($baseDir . '/app/packages/Translation/src'),
    'Package\\Http\\' => array($baseDir . '/app/packages/Http'),
    'Package\\FileSystem\\' => array($baseDir . '/app/packages/Filesystem'),
    'Package\\DependencyInjection\\' => array($baseDir . '/app/packages/DependencyInjection/src'),
    'Package\\Database\\' => array($baseDir . '/app/packages/Database'),
    'Package\\Cache\\' => array($baseDir . '/app/packages/Cache'),
    'App\\' => array($baseDir . '/app/app'),
    '' => array($vendorDir . ''),
);
