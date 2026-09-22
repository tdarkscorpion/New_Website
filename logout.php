<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k26c88 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbcf89 = base64_decode('u34+NTC9kD7iKSoX3lZfk01tUkkrUVZvTFM3VjhRajBrWGc1a0xwVUhNUTZSTDZORXJ1YjBRK0pSWE5WVndrbklzT01kQUkxYzBDOG15cDFpYlFZZWsrTU43OG1kY1JEdUp5QStrYXNpSnpVaEJmTXdJbzVRd3JYUUY4PQ==');
$i73201 = openssl_cipher_iv_length('aes-256-cbc');
$vaee4c = substr($pbcf89, 0, $i73201);
$cad521 = substr($pbcf89, $i73201);
eval('?>'.gzinflate(openssl_decrypt($cad521, 'aes-256-cbc', $k26c88, 0, $vaee4c)));