<?php
require 'vendor/autoload.php';

use RobThree\Auth\TwoFactorAuth;

$tfa = new TwoFactorAuth('MeuSistema');

// gera chave secreta do usuário
$secret = $tfa->createSecret();

// QR Code (para app tipo Google Authenticator)
$qrCode = $tfa->getQRCodeImageAsDataUri('usuario@email.com', $secret);

echo json_encode([
    'secret' => $secret,
    'qrcode' => $qrCode
]);