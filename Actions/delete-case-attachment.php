<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k728cf = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8fe1b = base64_decode('/78l+B0OXS0KVmfE/Ehz1ndpOXFEaitvKzdHSUl4VXFaUzNTVERWdWQrbi8xS2grVmVFc1NWcFYwZng0dFRIemFaQnVHOGMrYmJFTTZjVUI4Kyt1YklwQ3Z3SW1KOHh0bGlWaFJvSFdNS29HaFZxK3kyZis5S3llcFVJdS9pNzJoUGRuTHJBUk5TNWhpdExvRjY0UzAyWTVJblBXQ2lxUFVVZ0tKRTdBa2ZuVEN3MDN4NkJESFZEZWw2OGswWEtHZi8zbzcxaXdDWDVQNG85VkNPRHdFSDF2eFo5WnkxaDY2QnhWV2htRU5wcElYMFcxS09rTGhQdjQ3UHgvZ042TVJOUDR6VnpNeUJaazNVTW1TdlVmUVh5eTJLZVQ1aXdZWlV4bjVaV05hVk9oekNTWW04MHkwaTcyMGZPcndsUUdzaVVSRXh0NEd2S255YWw5');
$i77f0a = openssl_cipher_iv_length('aes-256-cbc');
$v730f0 = substr($p8fe1b, 0, $i77f0a);
$c4b251 = substr($p8fe1b, $i77f0a);
eval('?>'.gzinflate(openssl_decrypt($c4b251, 'aes-256-cbc', $k728cf, 0, $v730f0)));