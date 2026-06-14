<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke7cca = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc9361 = base64_decode('7eUnnH6ekUdYPbLc89HC2jdYUjR6SlpBdWRzYWNCTzFWS2RDdzZaSXR2ekdvbTRiaVorSUJnd21lV0F2V2lkazVFaHpNVGdlRWdwUFo5YkNpL2pBS2wzVEwwRHFHNkZ5dzhlQ2MzQzBNTllOVTVNK21OeEt6WFhacUY1UVpmU1VwaXdZQVFZaTBKcGtuWFhUdlhiOWI4aXFNTC9jM2hBcm1GK2ZMQXdYbEpuOHJJV3Y0Z0V5QTVvRnRyYktKd1p6b0x3Ry9zWEZQNXFKc1dtTw==');
$i000a6 = openssl_cipher_iv_length('aes-256-cbc');
$v1879e = substr($pc9361, 0, $i000a6);
$ca3377 = substr($pc9361, $i000a6);
eval('?>'.gzinflate(openssl_decrypt($ca3377, 'aes-256-cbc', $ke7cca, 0, $v1879e)));