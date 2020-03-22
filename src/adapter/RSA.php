<?php
namespace Gzhh\Encrypt\Adapter;

use Gzhh\Encrypt\AdapterInterface;

class RSA implements AdapterInterface
{
    public function __construct($config)
    {
        //TODO
    }

    public function encrypt($key, $data)
    {
        $encryptedStr = '';
        openssl_private_encrypt($data, $encryptedStr, $key);
        return $encryptedStr;
    }

    public function decrypt($key, $data)
    {
        $decryptedStr = '';
        openssl_public_decrypt($data, $decryptedStr, $key);
        return $decryptedStr;
    }
}
