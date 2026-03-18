<?php
require 'vendor/autoload.php';

use RobThree\Auth\TwoFactorAuth;

$tfa = new TwoFactorAuth('MeuSistema');

// dados recebidos via POST
$secret = $_POST['secret'];
$code   = $_POST['code'];

$valid = $tfa->verifyCode($secret, $code);

echo json_encode([
    'valid' => $valid
]);