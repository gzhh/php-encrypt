<?php
namespace Gzhh\Encrypt\Adapter;

use Gzhh\Encrypt\AdapterInterface;

class RSAReverse implements AdapterInterface
{
    public function __construct($config)
    {
        //TODO
    }

    public function encrypt($key, $data)
    {
        $encryptedStr = '';
        openssl_public_encrypt($data, $encryptedStr, $key);
        return $encryptedStr;
    }

    public function decrypt($key, $data)
    {
        $decryptedStr = '';
        openssl_private_decrypt($data, $decryptedStr, $key);
        return $decryptedStr;
    }
}
