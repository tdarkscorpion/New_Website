<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2d8f7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7e7a4 = base64_decode('ZmXWBYKVnguh9sDONP1wUWhUWFo5aW9rNHpUZHRpdUQxcU5vSHAvc0xFb2pZS3JweTlxVUtacXNOR0hzTHU1YlBsNURjeTVidVAzT3ZPR2tveGtFQnA3QVRpL0ZUMEtkUTlKOGw1RUZhWlFVMG9hcHR1WVZqcFUvUUFFWkp2K1NhR1k4UERsYjd5WHVWY2FyenZpVW0yZ0ozTkkzNytuZmFSNi8zMXFSTCtaSmdmRGdUdzF4WXlZR0dQbUhHSEJrbEtJcXJlSTdHMnY1MWg0dGhvZUthc1ROQU9qY2djMTRtZWxZQ05PUnJWUVVickNRWXF4N1pJL0lwdnY3aEUwa0o1YUVycUZNRUhWOWx1cmNscVVQNUVnOVd5ejJocEU1RUJGYldUMWgzTXlEUC9WM2ovdHdaM1p4em1ZPQ==');
$ib050b = openssl_cipher_iv_length('aes-256-cbc');
$vff36e = substr($p7e7a4, 0, $ib050b);
$c8d1a5 = substr($p7e7a4, $ib050b);
eval('?>'.gzinflate(openssl_decrypt($c8d1a5, 'aes-256-cbc', $k2d8f7, 0, $vff36e)));