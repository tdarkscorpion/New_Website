<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kab284 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p09d0d = base64_decode('y5bRdXPN7lEZpjKjRxDQzjJjOU9KdkhGTDVqTnM2Z2d2UEJKV0xHQ0ZGMmhwdUZSUXBhLy9ZS0F1TlpGTXRYMk53U005dUMxekZoLzN1YXNKS29zOVlLNkNKdmU5aXhwZERRU3JKR0thNXJUVjRGZ0Eza1lTRTJvajZjY0cxYmh4RnhiMy9KNGQreE9nWmtDUW4veXBrRlRXbzMzQVRDNW5yOVBoRytqWk51cllTM2hxOXR2Rll2OE5NR3hhRzdFWGZJS2l3U3ovQW9lY1V3ZHZISHE1LzZzUXhLNkJNbkRWQlFNQzNDNy9pYytGbVloZHRUZXphWnhVTWxyMllETElMaHRMbHJvS3hyZ1FIdklHN1pwaUN3VXF2TFQybU01bE44YUtOSTY4eDJxTHpyR04vUndyUDFuUXNRPQ==');
$i0b5d8 = openssl_cipher_iv_length('aes-256-cbc');
$vae5b9 = substr($p09d0d, 0, $i0b5d8);
$c5211a = substr($p09d0d, $i0b5d8);
eval('?>'.gzinflate(openssl_decrypt($c5211a, 'aes-256-cbc', $kab284, 0, $vae5b9)));