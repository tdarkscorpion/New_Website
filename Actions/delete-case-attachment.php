<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k179ba = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd8c78 = base64_decode('E2Nx86jGEooOL+1RoKcPlEVXYXZsZGlySTRyVnF4V1hCcFlOajdHQVpQZWVpZzBFVWJ5UjlSYUI4S0ZyMHIxVVFxaWgzbTRURlRmVE9CU2sxUXE4YWNTR3MxeGc2UkF6Uk9xYnh4emZiWXVVK292MlVpaG1uQW9jeGdBSGoxYkpyb1JuVlg5QWx1SENUYnlreExSbjdYR2h4UHQrUCtJWjFLVWwyVUF6R3U0MWlaMmUvUzVNZHNHS0dvd2IvOVFFWEJRUmNjeXR1aVpYZU8ySEMvWWVRNkdTUGp5TzAyM3Z6Z2NnVmpiSTlJZkxtSUlmSmFrRW4rb2Nnem9scUVLT1RHd1ZneC81MndaZDh0MGVVcGMzVFpsb0tkczRDZlVjOWE5Lzd0dWJ6OHVjYTI3dnVYN2hWZ0t6ZUVzSEl0YU9RcFNhY0N1RFFuTG1sUGRO');
$i8be33 = openssl_cipher_iv_length('aes-256-cbc');
$v9aca9 = substr($pd8c78, 0, $i8be33);
$c75352 = substr($pd8c78, $i8be33);
eval('?>'.gzinflate(openssl_decrypt($c75352, 'aes-256-cbc', $k179ba, 0, $v9aca9)));