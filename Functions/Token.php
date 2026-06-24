<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k26a2a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p88f5c = base64_decode('rVg+iKH41rM8UxvFYxnhAkQrUW5ueXNBVjR4VWpHcVVZOE9UMDVFdDNhQTU4OUpnTUthWkdOMzVpbWJaNGlsb0hTaDNqY2J3NVJsdW1MNURnTHlxc2hjSEd2eWJ6VEVHSW9PSWRLb2RQY0twdmRKeVd0OVBlL0VLQVM3VWFYMGNEb2F5bWNCMHlDTjVmbzA2RHRjNmxzTmgwTHVVckFib2JoaFNzUEVZRm9jZXIyTXFkcFp0cXphRVVndXJDVi9qVUUxVUU1VDlVYzZKOUlBV1krMHllWUxKRlhzL0RRUUxtcCtGZVZqa2RScUd6U3JXTS9SZHpHUUxvckdRZldpUmpwM2RmemxydkduQjg5ZVk=');
$i27255 = openssl_cipher_iv_length('aes-256-cbc');
$va8d20 = substr($p88f5c, 0, $i27255);
$c9f781 = substr($p88f5c, $i27255);
eval('?>'.gzinflate(openssl_decrypt($c9f781, 'aes-256-cbc', $k26a2a, 0, $va8d20)));