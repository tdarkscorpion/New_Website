<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdf9dc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8e579 = base64_decode('TSbSBBjlNc3lX8mveIgGfXRvRm50Z3pqOUt1YXhJVUxzNnowVDluUXRReDBQTHViUlJrR1RjR1lQSDhnVTMxMStTc09QaFVoVWdDaCtGekxSUVFPZmNlc0RSNzFNclFhaTA0aGt2Y2x1ZjRjU1YxWEZZRkt6RDdORlk0ZlRtWlowbjRYMFZHcFJxajhUVW9QUWFOY05UaGllelgxa1pvYUlNbkI2VE0vdDFza1g2OUZLKytTUEthM1dPeWZKSlg0b0xvZU14Q3phQ1ByTnVURWpSUnI2dDNHRUk0MzdreWJNcVlNeEJTTHNHUnhQMHZhVitGTWw1RlZrbU11ZkJ1TlpkM3IyZU5xc3kreTUzM0NnbU5zMWFqa2NlL2MvdUlYUWJ5UEpySmdiVkUxRWRGeFpScUhKZlJQYTlNPQ==');
$i1d96e = openssl_cipher_iv_length('aes-256-cbc');
$v4aa0d = substr($p8e579, 0, $i1d96e);
$c53f12 = substr($p8e579, $i1d96e);
eval('?>'.gzinflate(openssl_decrypt($c53f12, 'aes-256-cbc', $kdf9dc, 0, $v4aa0d)));