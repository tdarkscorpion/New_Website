<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc221f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3aaba = base64_decode('YpXmjgVBt2+eMEZFMEUSSFdnZ0o2RUo4ZnBmMXpiL2R1dGEwZWNsSkV5ZFhDeHJ2bEg3cUhDV2JIM3gzQXJLalBuckVzRjJjT092NVY3T2xTWTM0WkpXazYwaXB5d2N5RExubjNXZEdhZzNPR1FmaEU1dElJelZYN2srektzV2tKNm5XUFNYOFlleHRQZDdqbEJZRnZiOXdyMzdaV2k5eFJzUkZYa2JEaXVBbDlDbHhWS2VnYTVVYTQ2VmVRY21vcGk0UlpSSFdteWZqQUFUaDlSSE5wRzhCVHZFTzZHL2F3L1ZyNHBoVC9UM2VOMnFPbFczaXNMNjNmc0RtWmRTZHdKQ29aWHZoSENIY1E4dWM=');
$i5ddb9 = openssl_cipher_iv_length('aes-256-cbc');
$va04ca = substr($p3aaba, 0, $i5ddb9);
$cfee88 = substr($p3aaba, $i5ddb9);
eval('?>'.gzinflate(openssl_decrypt($cfee88, 'aes-256-cbc', $kc221f, 0, $va04ca)));