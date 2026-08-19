<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf5b59 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pcbe87 = base64_decode('7Pk1S40HiyqiHfM7QcZrGlQ3VXdTUXJLbTBUN3FFZWhxYSsyWVhpaGtSYlNrMlJzWXRVUHFycFRTSWtIVDV3OUw3SjNROWJ2ZWEyaXBiWTY1QlQxYmdPS3dFdWl6THJCVWthdElIR1NuRFNrL25OZVVKMHFhQ2NlMW9FPQ==');
$if2598 = openssl_cipher_iv_length('aes-256-cbc');
$vc2724 = substr($pcbe87, 0, $if2598);
$c6a349 = substr($pcbe87, $if2598);
eval('?>'.gzinflate(openssl_decrypt($c6a349, 'aes-256-cbc', $kf5b59, 0, $vc2724)));