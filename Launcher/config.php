<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1a054 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa6e79 = base64_decode('9AJMFopgSXNn0UbA1P/ARnJCWXZhaDJhaGFCK2tQVEZURlptRWtBY1EzMXZYWE9oQ3pDQlNGZVJMQ3FaYS9QRkZIUGJGMGZlNHRsMmhoNWcvelNZL2FRcG51MytrRHU3b3ZpaW9FQmJLUHRzbnZ3NnJVelRDZ0VvMEk5a05ieENIVUxmQ0x5RE1WN3NaVW1zU0lwbWhsaVRWNzUvSHBhSWlrRHd4K3RwMzFJc3h1MWkwaWdERmZwMGNLaEJTQUhXSXRPREY4eENNVGZ4UzNIUkpmQ2Z6djR3YTU2RERjOHJ4OW1VbUZrUlhOZ0ZLaWVWNGxvWU42T3kwazhuOC95Yk9rdC9GNC85TTNmWWR4Vml3ZmtESkpyUklHL2pXVkY4YU5CcmswbzhsKzZUNXl1dzdvVnIxMHNzOVhJPQ==');
$ibf71a = openssl_cipher_iv_length('aes-256-cbc');
$va0bc5 = substr($pa6e79, 0, $ibf71a);
$ce33a2 = substr($pa6e79, $ibf71a);
eval('?>'.gzinflate(openssl_decrypt($ce33a2, 'aes-256-cbc', $k1a054, 0, $va0bc5)));