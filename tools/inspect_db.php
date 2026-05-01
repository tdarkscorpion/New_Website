<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2dd67 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6ccd3 = base64_decode('SXuz3fuzAZSt6rY27xhvzEJCWlY3ZmFQeFhGQ0lkM2ZmNzM2UlJxUlNndVBtNGFCcGgzcm9UT2w3a0pSQlM0eHNCTTZQRk9HYWlLb0tWVWR4RU5QOGxGQTJQRm9FeDd5bTBPeS9aREpLWmUzS3Uyd1J2T0JSRCt6bHd1YzBBZkQxYjVFNTBKSEk4QlhIVG9UZysrcFRnZmQzc2NWZ2pyV1FXWXlncWtQaEl2bjM3RnBuZmJJUVpJS1NuZis4T1BJbU9uTDlxNWVtWTU1dFNadXdLdVJUUHhhaUNUTXRhcVJGMlQvS3c9PQ==');
$i2c98b = openssl_cipher_iv_length('aes-256-cbc');
$v1fa0f = substr($p6ccd3, 0, $i2c98b);
$c102fb = substr($p6ccd3, $i2c98b);
eval('?>'.gzinflate(openssl_decrypt($c102fb, 'aes-256-cbc', $k2dd67, 0, $v1fa0f)));