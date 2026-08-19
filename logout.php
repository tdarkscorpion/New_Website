<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k66fcf = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe0d07 = base64_decode('vhQKEz5LirZUXJa2mkUyykhLVzlIVkNVYnpyUWp4RmZIeHlVaVdUVzA5OE5YMTNJRnpyRTZBb0k5S09LV3BZU3E5Q1gyTTZFQ1B2N1lsSWF6clllaUp4THBVWDVDZ1IxSmR5WTJGczhCOE9vaVJkbnl2dFBpaFA4T3RZPQ==');
$i595fd = openssl_cipher_iv_length('aes-256-cbc');
$v684d5 = substr($pe0d07, 0, $i595fd);
$c2c6ea = substr($pe0d07, $i595fd);
eval('?>'.gzinflate(openssl_decrypt($c2c6ea, 'aes-256-cbc', $k66fcf, 0, $v684d5)));