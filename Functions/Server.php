<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0072f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4f285 = base64_decode('ixxZvjgXpRFmZFUa08DpjXNZZmFOdyt2SWM4WWxKT0ZPYUd0OU1Gc3dxSHBrZ25WQnZydmFKWFI2RWtsaEdqM3VtYzNZTnZ4ak5ienlQRUhCQTg3ZXhUcHJXNG9lRjlyR2k0S0hrWGIyMXg1cENzdlFPbVlrZHNqSDBCV2RSUEhYbkNqYklDTEVna1M1TlcvVDZIZGhtS2dtdkVJU2ZCVjJxSmlvS3N5a2NGYjludW1RTVFldXU4bTB4ZlYyaW9veHppOTN1V1lCWFByNFJyN2JPc1dZK2tqSmFuOHpWUUROWW12S0dmUEhVcURWSElTWGtma3Nmdnh3QmoxbUpTTzk3aGFkNzBCZmFNNU1nYm43KzVVZHRpWWdWbHEyNUV1ZU5IMDVNWUowWTZMaHFjWG1aMW1Eb012cmVRPQ==');
$i0efed = openssl_cipher_iv_length('aes-256-cbc');
$v8658a = substr($p4f285, 0, $i0efed);
$c307e3 = substr($p4f285, $i0efed);
eval('?>'.gzinflate(openssl_decrypt($c307e3, 'aes-256-cbc', $k0072f, 0, $v8658a)));