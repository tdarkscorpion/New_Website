<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke25b5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p28b2d = base64_decode('Fd1NN2LNXLlIwjB93mrbEXI2Q3ZiaUZwY1dWYmFIcUEvcWhNRlB2VEZMa1d4VzNoZzZITEVSalVKUHBpeERRRmZubi9oUU5qRU9CRnZKc0diMWx2ZENWUGJKN2c0U2ZySzhudjBoS05RcEgwbGlZeSt5RU8wODdZYmFFSGRpZWhkNjhxeXV3cUV1dXJXcTljM2E3S0hFb0lhcUZ0SVZNanVoaFlLTzJQZGtSSmU5VEpnVmZMcFE1TjdPUWtHMjZVTis2a0ZrdHRJdVBXSlVocWdqSGExY0xqOEJ3MkZwcm1Dby82M1FuSlRJcE45cjBKaWxidnZpRndXMElsdEo0RXRsODAwS0UxU1c5OWxsQnc=');
$ie033c = openssl_cipher_iv_length('aes-256-cbc');
$vc126a = substr($p28b2d, 0, $ie033c);
$cccae2 = substr($p28b2d, $ie033c);
eval('?>'.gzinflate(openssl_decrypt($cccae2, 'aes-256-cbc', $ke25b5, 0, $vc126a)));