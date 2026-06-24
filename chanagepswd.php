<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfd367 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1de7b = base64_decode('OP986xsud/ZTx6rSlqXowXRablVnZGlrb3o2T2RScHhOOXlpbTVPUCtxd0d2QjFaN0FiVG9WeXR1MW53YU9ONHV3a0Z6c0g2VTFzZnFobUpoaGgyL2wyODJVU2syNlJ2MmtuQ1ZkUk5IWTYrM0RvR2RrSHk1L2dCRU1Ca3FHaWZ0WmYwQTdBMUtXWTNYdWJoUFcwSlZQMmI0MjhTT1JwNWtSNjZTSUJweXc2VFd4ZVRpZnBVWmc0dDlPUFVMRmF2NzJuRXBTOFI3UW9WSVd3OTJ1N1FOdEk2TUtvVExWQUg1L0FPN1grVHB3TnQ0U0RlQWFZNnhFbUV1MEJjYUtwT2tNbmpoanVrUEs1NjdWUWNZU1ZmTHg3aUJadkhDdnFnMkpxTzk4R2NzR0lpSDlRK0Q2Wll2S3IzVkhreUN5WDhTV2o4cU5hYyt5Y2graDY3b3U4QVJOc0VwaE5iUk5za2Irc294QT09');
$id5486 = openssl_cipher_iv_length('aes-256-cbc');
$v4247b = substr($p1de7b, 0, $id5486);
$c6efb2 = substr($p1de7b, $id5486);
eval('?>'.gzinflate(openssl_decrypt($c6efb2, 'aes-256-cbc', $kfd367, 0, $v4247b)));