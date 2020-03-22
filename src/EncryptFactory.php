<?php
namespace Gzhh\Encrypt;

use Gzhh\Encrypt\Adapter\RSA;
use Gzhh\Encrypt\Adapter\RSAReverse;
use Gzhh\Encrypt\Adapter\Swoole;

class EncryptFactory
{
    public static function make($adapter, $config = [])
    {
        $className = static::getClass($adapter);
        $encryptObject = new $className($config);
        return $encryptObject;
    }

    public static function getClass($adapter)
    {
        $map = [
            'rsa' => RSA::class,
            'rsareverse' => RSAReverse::class,
            'swoole' => Swoole::class,
        ];
        $class = $map[$adapter];

        if (!$class) {
            throw new RuntimeException('Can not find the adapter named: ' . $adapter);
        }
        return $class;
    }
}
