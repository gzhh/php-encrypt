<?php
require_once('../vendor/autoload.php');

$encrypt = Gzhh\Encrypt\EncryptFactory::make('rsareverse', []);
$privateKey = file_get_contents('./rsa/rsa_private_key.pem');
$publicKey = file_get_contents('./rsa/rsa_public_key.pem');

$responseStr = 'Nice to meet you too';
$encryptStr = $encrypt->encrypt($publicKey, $responseStr);
echo base64_encode($encryptStr) . "\n";
$decryptStr = $encrypt->decrypt($privateKey, $encryptStr);
echo $decryptStr . "\n";
