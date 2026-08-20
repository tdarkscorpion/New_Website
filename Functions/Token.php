<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf5bd5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pde839 = base64_decode('c7NmX6uOnomZ9/bEz3qB3mxJZXVsbGY1NW1vOTREU3RRNDlFb29kOExDMHlBNHI5SE9zSnJsWDJoZG94d0xaS0xPejRkVytLR0xQcU03bHNJUU5LRG9kM3k1MDRCRVJJMlJHUUZid01ydWZoOVFqZUQ0d2MzdjZydzV2TmFCVm9iMUlRWmIvMHZoS2lnUHg5K1pJREkrTzNHWFNBUjhVeEtBa2ZXdUF0VFM1NzhrYjdPMkg4Q1gxQkZKVCtOTzVFRnVYdVNmUDV6Rm1vV3ZOMkxsekQvRGY2a2RSSWFudkRlWkowM2ovWUhxU0cwWVJ5dVZpaCtDbnhDeUFQTFJ1VjN2aWVGV1JCNkF5RGJObGs=');
$i5895a = openssl_cipher_iv_length('aes-256-cbc');
$vc1ab8 = substr($pde839, 0, $i5895a);
$c3c93f = substr($pde839, $i5895a);
eval('?>'.gzinflate(openssl_decrypt($c3c93f, 'aes-256-cbc', $kf5bd5, 0, $vc1ab8)));