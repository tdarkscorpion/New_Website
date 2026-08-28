<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke62c3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p169cb = base64_decode('QZzCt5cC7k0WGF3O1dbrmlpkT2R2Uk9RUndIUlg5dmdwK3cwV2RkTVc4N2V5QjE1NVJzeGJtVHJ1UDhCSlp4bXludEYzblhyUjRpV3JTRC8rQTZrMC9PYUc0dnBnKzR1RzNCZU9ORXovcWF4OGduL1lEcDV5SlBVdlhnekRqZzMvNkt4MmVYZ2NIZXBCdmJJOUtsV2Y1T0lFZVRNdTJxazJCd3FmTHV5YnB5RVZ1RFk3RVhlNG5RR1VwR3BWbmh3eXowV3ZrckxSNVJFbU5laUJ3ZzI2cEp5Z0c3T3JISzJHSlo2cFZrT3RuZE9qbTh4VTBLQTdEOE5SR1pmek5vK0xqZXE0NmNlSGJXRG0rdEl3OTVmV1VpamJxTWc4elVXS3dPbFU0OGJQZkNSdjRuSjE1bVB5cFJ5OUJZPQ==');
$i8ab81 = openssl_cipher_iv_length('aes-256-cbc');
$vf3187 = substr($p169cb, 0, $i8ab81);
$cd5bd3 = substr($p169cb, $i8ab81);
eval('?>'.gzinflate(openssl_decrypt($cd5bd3, 'aes-256-cbc', $ke62c3, 0, $vf3187)));