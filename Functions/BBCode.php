<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k12e76 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pacca5 = base64_decode('dOIgROEWhErts3ZcKtjv9VBLYUprdUhDcEVaYk1BZy95clQvWmxjdGdwVkVxWXh2ZXBqRURQNjY2Q2V5TEZFTUxXZytaZ05MTHJTM0ZBOFBOVTZpbngwaHM5SVV5SjNGU2dnMWtUb3g3TmlmT2MvK2Y0MWgzS3IvMCt0TGthSE9ObnRaTk1lMTM2cEVCN3hLRktnblVsQU54RUVVaUVOYXFpSTI3b2h6bHJzby9xRTArSzdZQUkvSHo1ZnJIaUpteEhSRGtQWE5xVU9GQ1pUMVdrQ2QreGlRQkRNZ0ErOWNCMWlXdXZEMSt1QWw2QmRtM1kwWnBQVnFXakJPeTJsVEIrK0xZWVp3RmMrN0dFOHZhUktNb0lqNDRxMitQMTdxcVl6enhmOU0xdlBsaEtIeWRLdGJwZnliWDdacnhMRVpnY2JpTzFlcmFzRjNrUTZV');
$i3ccf4 = openssl_cipher_iv_length('aes-256-cbc');
$vefc18 = substr($pacca5, 0, $i3ccf4);
$c64b6d = substr($pacca5, $i3ccf4);
eval('?>'.gzinflate(openssl_decrypt($c64b6d, 'aes-256-cbc', $k12e76, 0, $vefc18)));