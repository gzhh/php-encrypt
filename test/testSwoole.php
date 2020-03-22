<?php
require_once('../vendor/autoload.php');

$encrypt = Gzhh\Encrypt\EncryptFactory::make('swoole', []);
$privateKey = file_get_contents('./rsa/rsa_private_key.pem');
$publicKey = file_get_contents('./rsa/rsa_public_key.pem');

$askStr = 'Nice to meet you';
$encryptStr = $encrypt->encrypt($privateKey, $askStr);
echo base64_encode($encryptStr) . "\n";
$decryptStr = $encrypt->decrypt($publicKey, $encryptStr);
echo $decryptStr . "\n";
