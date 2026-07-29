<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k46200 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8a9df = base64_decode('CocIQum8vEWkd3JVojUFjjEzdWhGa25lTmVQV3l3Sm5yWmk5UEhLNVQvU3FXekswMVQrV0FodnlBU3V3bUhRZDBEUWlqV1BGc2UwcElRUGRDanEvNk1WUHhmeDVvMWFWWEZmMmwrWHFyRTRsNTFCVWQ0eVpkU1RoUE9YaVpmakJiOTJVZk1NT3N5VDZoalBjU2g0aU9PSVpxVWpVSlZvcEVCb1l6M3J1VldtL3AxWjVrb0lYNFdGVWptMzFQVjY5NnRrdXNSaWhnMndIZGx3L240ZkFTTzhzR2x6STlueHRJWXdyYkFtYXBEZlFObGtWOXdQdXZHRmpiQnl0YnRPSHg1c0NJc2pCODBDZjdjc0x5U1BGWGVVTThmZjNtN3FOSCs0VFNZYlB3SEF4WHIxNnQ2R3diaFJSQW8xYngrazhrREJpV0xiZ0d3VDkzOXhicWFEL2ltTGhYZ3VhTFI0MDlsdG9lQT09');
$i2be1a = openssl_cipher_iv_length('aes-256-cbc');
$v4f439 = substr($p8a9df, 0, $i2be1a);
$ca6fd2 = substr($p8a9df, $i2be1a);
eval('?>'.gzinflate(openssl_decrypt($ca6fd2, 'aes-256-cbc', $k46200, 0, $v4f439)));