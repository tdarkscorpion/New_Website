<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3f15c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf733e = base64_decode('RjPX5YNN4Y5djEU76gHtSVV4R2Q2d084a05nVWNrNWcxelBBVFhhdENRdTFDMDRQTlZSNVdUK0ZhellEbWlaY0VwRHlFNWRxOGFNZWp4K2xBTFVrWmtDTjhTNE5GRmV5RmszV1RjcDZHQmlCL3h3N05pb04yZDVTWmdaNkUyUXFZWHlrb1I4dUhaM0ZYaXMxOGVwZ3lWc1VNcWNyUkRTU2N3d2lLbXdHY21JcXVCY2ZyYmdPZXpQelQrdHpHQ0xXcmJqQXl5eXRSV2xoQ3pJbzFEb0xYY0Y1c0dlYW1lRUJic1FYcnE3ZWNMa0Z6c0sweHVRMmxQeHJiRXcvTUZjQ21PMHNmVlJoblVxajNGTXJWaHhkRnU0M3dyVUYweVNHSzI4V3hobnVkTDNDWHVJZjNlZVNvbTYvRDJrPQ==');
$id6003 = openssl_cipher_iv_length('aes-256-cbc');
$vef956 = substr($pf733e, 0, $id6003);
$cb9b17 = substr($pf733e, $id6003);
eval('?>'.gzinflate(openssl_decrypt($cb9b17, 'aes-256-cbc', $k3f15c, 0, $vef956)));