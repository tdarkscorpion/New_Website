<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kaabce = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbe1f6 = base64_decode('albBEqdv7pp7Ol9QpUSLn2pCQk5tVzRQNzJJMkJQaU16TjQrd1ZMK0h1MUh3YnIxRW1oSzUweUpPMDJ4Q1M5bGJRWEc3OU96Wkwza3ptVjdPMm1DMjM4c2VISE9rMGFJbHlLMWZNMzRZWEphdGVQeHZNditOc09CRXRkOVdEOU1ESjV5SjN4MjdTdG85STdRbU9xZWZLSDljZ0xyRGtKejdZQVp6aHZXYlJKNkRScU9HRDJpdmk3TlRxVUxMdlJVRkw4S1hndEIray9EQVR6TlViOEZqcSs5eDFGMmNXLzlzRGNlL3RVS1YrM3ltV3llY1pwemFFd0FVY3JKNVNFVER3OG41a1RUWEgySzVqQUJoZjFwTWdMZTlnQmZNV21kTldyQWk0T3VQSmxQRWN4TFNuYWZrMWJGNHNzPQ==');
$idbbc3 = openssl_cipher_iv_length('aes-256-cbc');
$v7eb4d = substr($pbe1f6, 0, $idbbc3);
$c9c649 = substr($pbe1f6, $idbbc3);
eval('?>'.gzinflate(openssl_decrypt($c9c649, 'aes-256-cbc', $kaabce, 0, $v7eb4d)));