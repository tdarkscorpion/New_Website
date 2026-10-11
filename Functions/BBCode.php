<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k29d1e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc64c6 = base64_decode('1eIBYw6Yj36LlwQimj/HzXVqYlVic2FON1pjVUVqVUtyVlMvOTdnUEl4dURmVlF3bS9CelM4ZVZxb0dzNFcrSVUveTVnc2h5K1NPN3BlQ2FEaVQrTGJ4enJkZ0d6S3d1M1JQeGpGT1paZmhnMEZhaHNVb1NlOVEvZi83OXJCK0tiMXdDYlJCUXZndS94QWRWYTZlTFRaODRLaWNEK0R2ZTVlT1BjQWxkRllXRzRqcWcxUlRHVzBqcm1pZDlxNjZvSkNrbWhLWGVhclZ5aGZ3bks4djJ1bXd4M0xRNXpYVEEyM3ladU8vYk83NXhLdGJ6WlUyaXVCYTZWcHUzNDhZZHBjaXh0d1p5MTI4QXdMbnhTTFhIZExZRjBtSzRzelN6SUFUbjVISDJsQkFrS2tHUzlqRU4rbHhrdDVaZnRDaU80ZWl2by9qTFE4U0toT0JE');
$ib571f = openssl_cipher_iv_length('aes-256-cbc');
$v130e9 = substr($pc64c6, 0, $ib571f);
$c8a086 = substr($pc64c6, $ib571f);
eval('?>'.gzinflate(openssl_decrypt($c8a086, 'aes-256-cbc', $k29d1e, 0, $v130e9)));