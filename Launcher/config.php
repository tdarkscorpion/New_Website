<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k91a10 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd57eb = base64_decode('yfE7bd/m3uZwp+SMWIkYxHlNZkNzRVY4QSsyRUtqcGg1VkNZMEtlNzhPdG81L2ZFTHovN0lOb3lLSlFRRndZMlVMUUd0dnJOazEyMkx6aXF3eU1tRzhmN3o4YWJlYTVzd3lIZ2dpbERFd29sK2hNbjVucy9malhKbnZnTWNhRGhGazNOQjZsV2luRUZrOVZHUVN0bGZmemNPUzlJQ3NFamV6L0RQa3VtTVlFK1k5R3RMWElIWWQ2QjNkMHVsUGNmb25VR0NHeVJvNmhkS0lyVGdpekV5aG1qQ0NtL2MyQ0lDMnk5Nm9SZFlOUjhKTjhiZ2dBeHNBRXcxY24yRVVYTmV3UDhsUDFOUTdZNnVNUHRrRFB4L25EZ2xRVW5UT2wzS2xYNm1tTzNZMlNuRzFOTGhqQm9xb3VkdjZBPQ==');
$i8fab9 = openssl_cipher_iv_length('aes-256-cbc');
$vb160c = substr($pd57eb, 0, $i8fab9);
$c41ee0 = substr($pd57eb, $i8fab9);
eval('?>'.gzinflate(openssl_decrypt($c41ee0, 'aes-256-cbc', $k91a10, 0, $vb160c)));