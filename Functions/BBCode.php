<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kac75f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf7c0f = base64_decode('DKt3x/Of9zei6jJJZvqsVXJYQlFIYWgyQ2VhQWZsaEV6RjQ0c01rSmRibVdFOUFrQ0JmTjBDWlZXUG0xOUMzTGtkdlFCOHhvYW9YSmJ6MlkxMWMzR2RMNWQ4TzlybGtWS2drbURxVDRTOE9rNFprRys1NUdXZk1mQ0IvWmplcXBHeG5XOTM4K2lhOGRlZlc4a3NLbWNJL2FVckw1VWtrMWlDTTIrSFZtcFlPWDUwdlJHMXM0VThVMDRyc1ZoNTg4eFZpUmpSbjVDWnA0VUIwYUxKM1QxeUdFTzU2dHVzNHNETm1Vc2VGc0MzcmxsWEZQbGFMK1FuaHlkaXVsNlFFTUlCQUQrb2NYSW15bmtBVFNCelRHbHNzM1FERjdvckF0dGdMZ0NPQVk4czNJWDJkd084RzJWWE5sV3N3c2hHK3crbG9PeWVrK1U1NEx2V2tV');
$i94c47 = openssl_cipher_iv_length('aes-256-cbc');
$vb0dd1 = substr($pf7c0f, 0, $i94c47);
$cdce0e = substr($pf7c0f, $i94c47);
eval('?>'.gzinflate(openssl_decrypt($cdce0e, 'aes-256-cbc', $kac75f, 0, $vb0dd1)));