<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb0c8e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2ddfb = base64_decode('j3v+QLaAOnA8+WNClPr92kJUQmRTY3RIekZ0UGFtWFFiUTUrZEtSbUU3TTEzelhhQmRrSDFydGpjcVFzUDVycGt4YXpVR0F3aVY4Q1ZnOFlOM3R6dCtPczVoSUtMVkM4WmYvVWsyTUFMbUlBaFk3M3NpbGR0a2FMeTR3PQ==');
$idebc1 = openssl_cipher_iv_length('aes-256-cbc');
$v0a83b = substr($p2ddfb, 0, $idebc1);
$c8f194 = substr($p2ddfb, $idebc1);
eval('?>'.gzinflate(openssl_decrypt($c8f194, 'aes-256-cbc', $kb0c8e, 0, $v0a83b)));