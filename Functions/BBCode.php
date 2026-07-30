<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2c682 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p31b95 = base64_decode('JWi7A5VH4hvFpR9mKp+AQTFjQytjVWNmRXFieTF4SjViTGlzM3FFZUFUKytubHdyelJVbVVVT2owcTVJNHRTMy9qbUpYMGpraHFqdTJGbVNuaEE5aEVLV2RSc0JqM1h2RUZ1TzJyazJVMXhFRndVbUxuaFErakxTUmdTd0dwTVBHeVdrY3ByUmZTd2hrblBQeXdxT09JVTQrdzFiRDRoT1NNaG4wSlpVVDF0SmpJZUExMTZMN3RkZGF5NjVrV2Y5a2lTd2IzZWZsZ0lFZEV3SE9hRnRZWnQrbGd5cXRuQjhoYTFqM2tES0M2eHZkc09ZT04yR1J4eksyWmdqM2E0djZlTnJua3dGM3pyajg1VjZiall2eU96WDhub1ZNUVgzRmUySFNmS0RuT0xKZkNGcWl4eWRyajVQVDhuN0k1YkpSVVM5SXV0WHQ1WllGS0xW');
$i5f932 = openssl_cipher_iv_length('aes-256-cbc');
$v46247 = substr($p31b95, 0, $i5f932);
$c2d254 = substr($p31b95, $i5f932);
eval('?>'.gzinflate(openssl_decrypt($c2d254, 'aes-256-cbc', $k2c682, 0, $v46247)));