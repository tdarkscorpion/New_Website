<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k10a84 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8b44f = base64_decode('3RtD4R+519gf5bANv6M6WzY3RXRibXV5MG54QW90R0hybGl5RWxXQ3ByZTVKU1RDbVhKTTllcUhLMm1kdko1SnJWT2NGZHdNMzBtOVZyNDVGeTBZS3VIYllpZVQ3bFR4QWczNzMyTVl1VVQ4c2RLSW1RNXhGbldMU0NmeUIrU1BiSi92T2RRdmJDQkx4Q2xKNi81dy9DeFpQeE1wTmdjeHpRZnk4bERRRDZ5cU1jS0g1VVFZcVJtVVphVlFXSGE4N0c4S3VVT2s0WThvL3dGVkFhYmoxemNLRnk2MXhac3ZaWG96VG5rcGY0SHlvdit1QjgyMHZGSlBjZnZJOWxVTnhOdFJRbjFaR0JZQnRZcWxRL3lhNHZlQmZGc0paM1hwL2U5d0Nrc2ZMK1M2YWNmRHhKdExuL2xsdFdzV3lPY3ZyUUZyQm1sMEpNdzNlOEdo');
$i8ecf5 = openssl_cipher_iv_length('aes-256-cbc');
$ve5f9d = substr($p8b44f, 0, $i8ecf5);
$cb2bc2 = substr($p8b44f, $i8ecf5);
eval('?>'.gzinflate(openssl_decrypt($cb2bc2, 'aes-256-cbc', $k10a84, 0, $ve5f9d)));