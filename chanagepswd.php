<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k62bb2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pedb0d = base64_decode('L1GnZ5RBSFNSe0r47ExclTRVTmhQUWErR04zOHBqdWZoTVZIbjVlcytFaUF2eFdnK0RST1o0b0creHc2ZnprUmdrK3NaQ2JhNFhwd1R6bStueGJaRDZyMXFpdnMrbHBtZGxzaHdjQTlYNzhLTDQrQUVkOUxqTFUyOGs1Zk1sU3VsMStuR1pQcG4xNnZQR3QwSlg0TFJVNUdmT0l4dExHUEQrcmpJcUpoYmN5c3V4K1BJdDNRTkx5K2xDQTN6STJLRlRYSmdlTVdtNS9zSmxnYzQrN0RVWEEwZlUvUGtEdXpnQVA3dE0xRGczVDlwaXNlVEhENHRWUlNqZEVpbzYwUGRJVWp3WElVdXZGS2RJQUNLTklrRFoyb0Uva290VjNHNjd5WTZzZFhJKzlMcmNjL04xSFVJcWJubVc3MkEvTG9HRkQvN25idDBIQXNPMVM4dGw2THErUWJjeEZZNTRGL29pR0s5UT09');
$i48143 = openssl_cipher_iv_length('aes-256-cbc');
$vcb8c3 = substr($pedb0d, 0, $i48143);
$c93358 = substr($pedb0d, $i48143);
eval('?>'.gzinflate(openssl_decrypt($c93358, 'aes-256-cbc', $k62bb2, 0, $vcb8c3)));