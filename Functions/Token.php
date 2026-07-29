<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kda42a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p715c4 = base64_decode('Dq4L9Ka60/X3cB0B9USwFWdBY3hXTkgrNWZ6b3M2UFNaTVJDbDJjeWl0bEtlNC9BTldqT09FU0t1Y2ZkVkdKVUVsZm9CRXU5UDlCZENCS3MxQW51dVg5cmlPWHN1Rmx3UXMvaUNvQVk1T1hkbjdEU24vRXJEK2w1UWZ6L0ZKeTdheC84ZzVvSHZ3clBqS0NtdXUxdDQ0SlpoTGNNL3FVU0RRTWpGN1BCTzNaUzlOL0R2RnFrOHkrV3hZaG43TEE4Qjk0TlpNRENHMnh0NnRZTXdleFJORFpZanBVWExpTmNFMk1tT05RMSthTEQrMVpXU1FIQWZrR2xXTkp5cDQ2MGRBaXorUmlydHVqRXNDd0M=');
$id3077 = openssl_cipher_iv_length('aes-256-cbc');
$vb3381 = substr($p715c4, 0, $id3077);
$cb13d9 = substr($p715c4, $id3077);
eval('?>'.gzinflate(openssl_decrypt($cb13d9, 'aes-256-cbc', $kda42a, 0, $vb3381)));