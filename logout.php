<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k126f8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa61f9 = base64_decode('sZ7jB/fNWfRkLOmfQ40PoHhzR1drcEZobzNnRFhCQmwxTmZVY2tsTXZSa05ZK1FkOGNuZGhhSmtQSEhFeGxqTk1pcUhFamJ2ZVZNTWtyS2l6RzEwYVg1WGpGK1JMR0Jtd3A3b0pZUUFpZThoU1lMSU5HVW81V3dXRmRjPQ==');
$id988f = openssl_cipher_iv_length('aes-256-cbc');
$v37176 = substr($pa61f9, 0, $id988f);
$c425e9 = substr($pa61f9, $id988f);
eval('?>'.gzinflate(openssl_decrypt($c425e9, 'aes-256-cbc', $k126f8, 0, $v37176)));