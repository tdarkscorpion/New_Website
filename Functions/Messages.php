<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k76e0b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe88ac = base64_decode('bz7H+SCHDXbzIw4lxkvpGUFmR2dXcTZLdDBJeWJldTFkNkpCOGpEazlERGMrNTIvaitwbjZ5ZXRPc1JvR01iN096N2UzVEdYblpmNC9GVGdsbElGUzM5NW1xK0ZQQjQzTS9wTmZtSU1hY1ZOZXZJMURjMVExVzhsQUVaNkdpNXZTNFR1OThnbUNZeFFaMGtHM3ZiQkNZcWE4bUF6Tms1YnNVUVpsU052ZEUyT080OWxYaExQMFBWb3VCUms2MlJCOUEzN2VZM1doRS9VVzk1TWpYZmNQMUdWd0F2TDk1RDlRbHpBaklOTkdEd2t0cnNoTEtlM2V1emJuUjNtVEx3RGtVRkRQT252ODI2UUxvMUFkMnpCekVkeE9kUjBBODR1M2lrRXBlU3EzQVg0bVhWTGVVQXoxVDJGN3lvPQ==');
$i49497 = openssl_cipher_iv_length('aes-256-cbc');
$v6a390 = substr($pe88ac, 0, $i49497);
$cb2299 = substr($pe88ac, $i49497);
eval('?>'.gzinflate(openssl_decrypt($cb2299, 'aes-256-cbc', $k76e0b, 0, $v6a390)));