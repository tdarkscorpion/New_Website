<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2c9ae = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p49f17 = base64_decode('tFSHzhPa8PTV64qaLcwqd1o4MnQ1ZGhiK1laUnFYc1F6bDIrcnl4eDNsbk45TmNpVjB0QWZnWTBTRE9vZkdhNWE4cGhzZXVSbEZXeHJPS3pYK2JocXZmY1BpazBVZXkxV1p2aE9YdlEzZFpnTGFTVXhwNWtqcmV5eVpTWVNXaXlleDUzU3B3UFNnYldqODRYcm14cTI5NGRJc2lGVGd5dFNlY242enMyVWFadlVqcTZURnRjdDVmV2xoNE12NmdvQ0htclBHWWZQKzFmMmE5dytMbm90Z1JOZVRGbkpWekdpQVBUMjBnMGZXRFdrazBWZE43VUY3OEZIQ0ZZeHBBZ2hxdUFNMnlnWi91MWszNDNUMWE2TkpYQzFmU0tlSVRDNEcrelFPd2VSNTZ4OHpMWlZNd1lsaSsvaXRqU2ZTTTZ3cFhLbXZuNXFkd2JqMHlX');
$i2ebc7 = openssl_cipher_iv_length('aes-256-cbc');
$v75f1a = substr($p49f17, 0, $i2ebc7);
$c63e19 = substr($p49f17, $i2ebc7);
eval('?>'.gzinflate(openssl_decrypt($c63e19, 'aes-256-cbc', $k2c9ae, 0, $v75f1a)));