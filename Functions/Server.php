<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcf132 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc6d0a = base64_decode('Oshe2+Boz3dJLcUKX1P6rUhFbEhtRHozNk1RK2dzVVZUMUkwNmJmS0tMSVZXcnR4K2t1N2RrYWN5SSs2T0JqeS9FQUVpQWVRd3BUQjVqZFJpdGZuV2NSTHJib1ZRTzlXSXJaSktDUFM3K244MnI1TXg5Sy92US9xdFUreFhXZkhkK3ZyV3NvQUs1TnVXcVgzUUkrWjd3anJkeS9OemFWeG5ITWRXL25ONVFyYlBYSTJXc1I2Wlg0NE9ockJUZ1o3L2syRXNVZ0Q0a0VjY2lyRXVONk9OS2w2eFNhQ3lrSFBhTnNtdDBESVVLdnVHYVQwbjZQVWJmY2s5MGUrVnlacVRLTTZNYml3TE1lV2pGazk2STByZnZjcG1BR0I0OHJyVUE2Qk1NMlNwTm5ib0tKdTRqVDR1RlZTejBFPQ==');
$i41124 = openssl_cipher_iv_length('aes-256-cbc');
$vdf1b0 = substr($pc6d0a, 0, $i41124);
$c1b3df = substr($pc6d0a, $i41124);
eval('?>'.gzinflate(openssl_decrypt($c1b3df, 'aes-256-cbc', $kcf132, 0, $vdf1b0)));