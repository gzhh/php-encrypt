<?php
namespace Gzhh\Encrypt\Adapter;

use Gzhh\Encrypt\AdapterInterface;
use Gzhh\Encrypt\SwooleCompiler\Compiler;

class Swoole implements AdapterInterface
{
    private $encryptor = null;

    public function __construct($config)
    {
        // TODO
        // optimization
        $encryptorClassName = Compiler::class;
        $this->encryptor = new $encryptorClassName;
    }

    public function encrypt($key, $data)
    {
        return $this->encryptor->encrypt($key, $data);
    }

    public function decrypt($key, $data)
    {
        return $this->encryptor->decrypt($key, $data);
    }
}
