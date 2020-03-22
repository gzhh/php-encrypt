<?php
namespace Gzhh\Encrypt;

interface AdapterInterface
{
    public function encrypt($key, $stringToEncrypt);
    public function decrypt($key, $stringToDecrypt);
}
