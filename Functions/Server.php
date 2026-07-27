<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k95b98 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0a192 = base64_decode('pHor/Kw30QMHpGB/2qQ/ezlTM3NNU1hvQlVxbm4wNmxieXc1T2xDY0pZaDRXY0FOMSsrWEl0aTdzSGdXZ0VVRCtaa0tvdSsrdVVVclRld1p3Q1FFenBiVkR3ME1pa1dvUEhLSFhUQW0wNDQxVDdCNDk0R016S01qRVVPNmdydTNUSDhwNWw0YmVLKzk3S3JEK1pGMkFjYk1uZWVzelZ2bi9NOWtIVmQ2anBiaVdVeTFKdUJYZDZSTC82Yk5aWHlXWFFlVlhhQjFHTytVL0RyTUw3YkI2RUZObG9DaEVyMVBUM05GUlNCaWhlUjN6alBidXRLMmxhS1ZSRjliTVVwWXRQanN6QndWeUZsSkZFZ0ZJckR5djgwNXl1eXZteUNmNVV0a0lhd01RVU5uRi9BT2VnQ3JuM0RrSElVPQ==');
$i12d3b = openssl_cipher_iv_length('aes-256-cbc');
$vdc4fd = substr($p0a192, 0, $i12d3b);
$cf3fb2 = substr($p0a192, $i12d3b);
eval('?>'.gzinflate(openssl_decrypt($cf3fb2, 'aes-256-cbc', $k95b98, 0, $vdc4fd)));