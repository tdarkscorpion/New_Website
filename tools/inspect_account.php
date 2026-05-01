<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc25c9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf3900 = base64_decode('fD4hQ3dIfOzsorMFQY10K1pGK2ZnK3Z2SHhqNE5laDZhMVptUHY5azd1L0lGV2RjdFA3bEc0SjQrSmNCL1Y3UkxZbDBiOEY1Ym5URnRndTh0MXQ3c0p6TFk4bzJNYW1XUmovQnVrSXNsbEEvOGZnd1F4dUx5NVVpMWZjOWxKa202aW4veElXVFMzQ3cwbXhSRnpXdFYyaHl5RjRKSFRNTHF3cTV2R0xkMFVLRXNIZ2hzVytwNEpDdnUyWWo3RVpRdFRZMlEvNUNVSUhYK1lRaA==');
$i62b7a = openssl_cipher_iv_length('aes-256-cbc');
$v506ae = substr($pf3900, 0, $i62b7a);
$c96d79 = substr($pf3900, $i62b7a);
eval('?>'.gzinflate(openssl_decrypt($c96d79, 'aes-256-cbc', $kc25c9, 0, $v506ae)));