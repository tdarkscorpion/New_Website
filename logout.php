<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5fc2c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1b2b4 = base64_decode('YVqhiLz1fezqStcNYOb8JUpIRHZqVktrc1NzL25GTGE5Qi9DZUt4UU0zcjMySCtHcmorY2U1dDd1ZEZyRlNTTUJwSndKby9tK0FDYVR1aVlIMGpZekZUcCttTHF2aCtzcGtNSnowQ3dKZW9zOW5HZm50OERVZXh2T0ZnPQ==');
$i69314 = openssl_cipher_iv_length('aes-256-cbc');
$v77180 = substr($p1b2b4, 0, $i69314);
$cb8379 = substr($p1b2b4, $i69314);
eval('?>'.gzinflate(openssl_decrypt($cb8379, 'aes-256-cbc', $k5fc2c, 0, $v77180)));