<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k06146 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa1f6c = base64_decode('Qb32abhNs+rha41j8qoku2VwUXM1Tjkwck9QMm5KdzFnNXpBQ0FOeml6MFZaRHhwMVQ1SjNjd0tqOVZsanVqVUplYUp1STBydmk4TDlSOFFQTTU5VlZjYnNtUjNRZ3FvYmdvWkYzcDNDT3NvTXh4TTRKTWJhcmlhVVY1U0RjL2xPR3UvKzI1dlJBMS8vOXpmZDJ6cisyNmFvdU8rYUU1WWZjalJUcjJHTW05eUpUdjNIYS83MTJxZTVCbHhBRnJ3SlZVaUV0a1lZU3lmQXhaZXNHQVR6VkFwMjI2aHFld01VbXI0VVRac2pDM1ZyM05FRWYzQ25HQnV5T1FyYlUwMS9MNGt1TkVBZFY2TUtIOHdHZXA0Kzg3eTMxaEl5WnlWYmYvU0hmVVA2b1lLcUJ0UW5QengxM2gvRWN3PQ==');
$i2729a = openssl_cipher_iv_length('aes-256-cbc');
$v45305 = substr($pa1f6c, 0, $i2729a);
$cbf250 = substr($pa1f6c, $i2729a);
eval('?>'.gzinflate(openssl_decrypt($cbf250, 'aes-256-cbc', $k06146, 0, $v45305)));