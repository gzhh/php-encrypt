<?php
namespace Gzhh\Encrypt\Adapter;

use Gzhh\Encrypt\AdapterInterface;
use Gzhh\Encrypt\SwooleCompiler\Compiler;

class Swoole implements AdapterInterface
{
    private $encryptor = null;

    public function __construct($config)
    {
        $res = ;
        if (!extension_loaded('swoole')) {
            exit("Swoole extension need installed.\n");
        }
        exit("Swoole Compiler doc: https://wiki.swoole.com/wiki/index/prid-16.\n");
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
