<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k12e2d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p50f28 = base64_decode('NBgP3xxweSMb8x34hXhWUjZ6QlVnWUVwQWtFS3BDWXczQUxFOGczL0MyMTlxY3ljKzBhZjIzNzJzVW8wcTlpZDlmUVJUSXBRTURWUVFmRkYyYU5FV29pSjRIaXMveXUxZFczWUVlOVByL2JhczZ5TmFPMUZXYUY4eVRaU2VDQ1ZaL2xJQWsvZmkyRFhSUkxSVDNLb0hDR0hhNFpuOXk0V1N3ekpqTDY5Yzg1RVJSQjZVejA0bzFhSVpkVjF2V0tqUklCZjJGZENrUUlkMzVIY3RPVzU4VFY0YnNhdXJ4cWFmZHAvSFlEMjJGMy84QStkVkFZc2c1bmhoQ0RDS3lEbi8zMUVzcUpQUGpyUDFDaHZWS2ZyOGNYOEk3OEF3am11bUh0T2h3Rk9YZWdOSkgyd1U1OGgwMkNDZW1zPQ==');
$ifb973 = openssl_cipher_iv_length('aes-256-cbc');
$v0dbe2 = substr($p50f28, 0, $ifb973);
$c06a67 = substr($p50f28, $ifb973);
eval('?>'.gzinflate(openssl_decrypt($c06a67, 'aes-256-cbc', $k12e2d, 0, $v0dbe2)));