<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdb3f0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2e69e = base64_decode('iYtvdwPGjgF0KLMo8fvuSXFmb0xxUC8vdDVGYzdvdW9NeU5CZ05TcTJkeTJPSWM5UklXYUViamNtVUhQUXZkWmp1QmZLeVp2eEM4WjhidlBleDMvZnF4R01kQ1JlNjY0bnA5LzRqVzZCbmlkRHlmTUVLcDZtamwzMDBneVdOQVh5RkZ3MmlCRTJpNXkrTXdyVXgwNkFTTlJYZmxSbHZ1Y0tuMnFqWVFiMkRzd0k5MFJJdUlRVWd0REZ6NnFzSEpydTFUWUQzSURxZnZjd2pWVmxXL3ZNQTZoUmtQOW4vZ1YxbW5GRFhHaXFoQTF1b1Z5Q01jVHJFZ1dLU0FZM01aa0ZpaFpWZ0twWTVGUjFxdHNYUUt1STRwaGNCVFEybGlVRTBZWGdmYnZuK3Vzc3BJMmhydHFxcmIyb0FVPQ==');
$ib6a97 = openssl_cipher_iv_length('aes-256-cbc');
$v97035 = substr($p2e69e, 0, $ib6a97);
$c8d974 = substr($p2e69e, $ib6a97);
eval('?>'.gzinflate(openssl_decrypt($c8d974, 'aes-256-cbc', $kdb3f0, 0, $v97035)));