<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k40ecd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p486e0 = base64_decode('4TeMsMQlw9HzOHqqbEX/cEV1Uk9iYzQ4VHU1eXhkaWU3RkR0ME1GL3ptMm8xRTNYYXB3RE5YclpjdHExU0ZCbnR6K0FnZ3ZnbWxHcFRXNTZlUDRmQWsvUzBVZGlPbEpzUHN0NTVpay9qN3NMODNzRld4ZVMvUkthYWt6UVRrbDNNSThEQS9RV3pIazNpbWZyYUJOMFNUUHM2ZlVWOTV4ZmVHanJEL0VDKzg2SldyTC9mc1VDSlNDck5YYzV3YS9aVHJMd3UwVFN5dHRMWnRPWW5hOFN6KzAzazRuRWRxS1pFTTg0N3hkNGd2R3JEbmtEamlCQUdVYmFLdXlGb0JMb1B6b21ZZ2pVRjhCVndTakVydVVOb0xRY1F0QWZvVloxamRvVm9RPT0=');
$i72dc9 = openssl_cipher_iv_length('aes-256-cbc');
$v40faf = substr($p486e0, 0, $i72dc9);
$c57338 = substr($p486e0, $i72dc9);
eval('?>'.gzinflate(openssl_decrypt($c57338, 'aes-256-cbc', $k40ecd, 0, $v40faf)));