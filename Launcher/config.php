<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k95f7a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p53c86 = base64_decode('v6riUYBTH23ZILXF4oLS2EI3UC9xbXowd29sZUJEVzl2TjUyTlhTeXkyd1k0TFNRbkdPYjJEOTFrRE9lSlNmWUc2bVBzRmlQZUtUTXZuMVFrdmU1dEQ0alpGb3cyM2tDc3FMcUwrM3o0SG5MNWlBWVFqTjVzOWYzTlV6UVgzNVVyZkhjT3EwbGQ3Q0Y5bTdEeStHN0VmaHdUbzFwQ3g0VTVGZnZVaXRwTldEZVMzNmFGQ0x3dUVBWGIxek1oVWYyVHY4b3lBdjJtVmpjYTBBa2lwbU5qVVowZVdVK21KcDk1U0NrWkFYMUhGb0UzV3hxUmtWemQ2R3JhTUMrODE4V3MzUEtydUdEQ3U5U29wTlltRmpHNWZUUXk2T2ljM0ZlTUQ5NndVVHhXUkdHeHQ5T3ZISkp5MFpyemZvPQ==');
$ice9ba = openssl_cipher_iv_length('aes-256-cbc');
$v084be = substr($p53c86, 0, $ice9ba);
$c9ae6b = substr($p53c86, $ice9ba);
eval('?>'.gzinflate(openssl_decrypt($c9ae6b, 'aes-256-cbc', $k95f7a, 0, $v084be)));