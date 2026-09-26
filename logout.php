<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k94702 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p92811 = base64_decode('BC02WRTw35Glq840YdXay0lzRjFIMlVuVXRnVjR3b3hrREtSNjlmVVFhamtzT3JYRmR5emtnS0FCUlYwZEFCbVBxV0RjYk1CRngrRERVUTZmYU0wRGlyZ0w0QThrVkFSa1J1TVBsQS80SlpqbEVHYm8weG9YTWxYUytzPQ==');
$i468db = openssl_cipher_iv_length('aes-256-cbc');
$v8d6f0 = substr($p92811, 0, $i468db);
$c58f15 = substr($p92811, $i468db);
eval('?>'.gzinflate(openssl_decrypt($c58f15, 'aes-256-cbc', $k94702, 0, $v8d6f0)));